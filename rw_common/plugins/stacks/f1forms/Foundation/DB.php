<?php
namespace Foundation;

class DB extends Mailer
{
    private $dbServer;
    private $dbPort;
    private $dbUsername;
    private $dbPassword;
    private $dbTable;
    private $dbName;
    private $conn;

    public function __construct($options)
    {
        parent::__construct($options);

        $options = array_merge(array(
            'dbServer'       => '',
            'dbUsername'     => '',
            'dbPassword'     => '',
            'dbTable'        => '',
            'dbName'         => '',
            'dbPort'         => 3306,
            'exportUser'     => '',
            'exportPassword' => '',
        ), $options);

        $this->dbServer   = $options['dbServer'];
        $this->dbPort     = $options['dbPort'];
        $this->dbUsername = $options['dbUsername'];
        $this->dbPassword = $options['dbPassword'];
        $this->dbTable    = $options['dbTable'];
        $this->dbName     = $options['dbName'];

        $this->conn = $this->connect();
    }

    public function close()
    {
        $this->conn = null;
    }

    private function connect()
    {
        try {
            // Connect to the database
            $conn = new \PDO(
                "mysql:host=$this->dbServer;port=$this->dbPort;dbname=$this->dbName;charset=utf8",
                $this->dbUsername,
                $this->dbPassword
            );
        } catch (\PDOException $e) {
            $this->returnError('Could not connect to database server: '.$e->getMessage());
        } catch (\Exception $e) {
            $this->returnError('Server Error: '.$e->getMessage());
        }
        return $conn;
    }

    public function insert()
    {
        $keys   = implode(',', array_keys($this->postData));
        $values = $this->decodeString(implode(',:', array_keys($this->postData)));

        try {
            // Execute the query
            $query = $this->conn->prepare("INSERT INTO $this->dbTable ($keys) value (:$values)");
            $query->execute($this->postData);
        } catch (\PDOException $e) {
            $this->close();
            $this->returnError("Problem inserting data: ".$e->getMessage());
        } catch (\Exception $e) {
            $this->returnError('Unknown Error: '.$e->getMessage());
        }

        $this->returnSuccess("Insert Success!");
    }

    public function export()
    {
        try {
            // get column names
            $names = $this->conn->prepare("DESCRIBE $this->dbTable");
            $names->execute();
            // get the data
            $data = $this->conn->prepare("select * from $this->dbTable");
            $data->execute();
        } catch (\PDOException $e) {
            $this->returnError($e->getMessage());
        } catch (\Exception $e) {
            $this->returnError('Unknown Error: '.$e->getMessage());
        }

        // Download the csv file
        $filename = "data-export.csv";
        header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename='.$filename);

        $output = fopen("php://output", "w");

        fputcsv($output, $names->fetchAll(\PDO::FETCH_COLUMN));

        while ($row = $data->fetch(\PDO::FETCH_ASSOC)) {
            fputcsv($output, $row);
        }
    }

    //-------------------------------------------------
    // Setup .htaccess and htpassword files
    //-------------------------------------------------
    private function cryptApr1Md5($plainpasswd)
    {
        $salt = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);
        $len = strlen($plainpasswd);
        $text = $plainpasswd.'$apr1$'.$salt;
        $bin = pack("H32", md5($plainpasswd.$salt.$plainpasswd));
        for ($i = $len; $i > 0; $i -= 16) {
            $text .= substr($bin, 0, min(16, $i));
        }
        for ($i = $len; $i > 0; $i >>= 1) {
            $text .= ($i & 1) ? chr(0) : $plainpasswd{0};
        }
        $bin = pack("H32", md5($text));
        for ($i = 0; $i < 1000; $i++) {
            $new = ($i & 1) ? $plainpasswd : $bin;
            if ($i % 3) {
                $new .= $salt;
            }
            if ($i % 7) {
                $new .= $plainpasswd;
            }
            $new .= ($i & 1) ? $bin : $plainpasswd;
            $bin = pack("H32", md5($new));
        }
        for ($i = 0; $i < 5; $i++) {
            $k = $i + 6;
            $j = $i + 12;
            if ($j == 16) {
                $j = 5;
            }
            $tmp = $bin[$i].$bin[$k].$bin[$j].$tmp;
        }
        $tmp = chr(0).chr(0).$bin[11].$tmp;
        $tmp = strtr(
            strrev(substr(base64_encode($tmp), 2)),
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",
            "./0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz"
        );

        return "$"."apr1"."$".$salt."$".$tmp;
    }

    public function setupSecurityFiles($exportUser, $exportPassword, $basedir)
    {
        // The htaccess file must have the absolute path to the htpasswd file.
        // This is why I must create it via PHP instead of simply including it in the stack as an asset
        $htaccess = $basedir.'/.htaccess';
        $htpasswd = $basedir.'/foundation-export.passwd';

        $htaccess_contents = <<<EOT
<FilesMatch "_export\.php\$">
AuthUserFile $htpasswd
AuthName "Form Export Utility"
AuthType Basic
Require valid-user
</FilesMatch>

# Disable Directory Access
Options -Indexes

# secure htaccess file
<Files .htaccess>
order allow,deny
deny from all
</Files>

# secure htpasswd file
<Files foundation-export.passwd>
order allow,deny
deny from all
</Files>

AddType application/octet-stream .csv
EOT;

        if (!file_exists($htpasswd)) {
            $hash = $this->cryptApr1Md5($exportPassword);

            $contents = $exportUser . ':' . $hash;

            file_put_contents($htpasswd, $contents);
            file_put_contents($htaccess, $htaccess_contents);

            if (file_exists($htpasswd)) {
                header('Location: '.$_SERVER['REQUEST_URI'].'?setup=complete');
            } else {
                $this->returnError("Unable to create files for form export! Check permissions at ".__DIR__);
            }
        }
    }
}
