<?php if (strlen(session_id()) < 1) {
session_start();
} ?><?php ob_start(); ?>
<?php header('pwa-no-cache: true'); ?>

<?php if (file_exists('../../rw_common/plugins/stacks/total-cms/interim.check')) setcookie("total-interim",true,time()+10); ?><!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes" />

	<title>Admin</title>

    <meta name="theme-version" content="1.8.1" />
    <meta name="foundation-version" content="5.5.4" />
    <meta name="modernizr-version" content="3.6.0" />

	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="Keywords" content=""no self", facilitator, consciousness, nonduality, depression, anxiety, addiction,  spirituality, awareness, awakening, enlightenment" />
		<meta name="Description" content="Irreverent Mind. Practical nonduality for everyday life. Real relief with a side of fun.  &copy; 2009-2022 Judy Cohen " />
		<meta name="robots" content="index, follow" />
		<meta name="generator" content="RapidWeaver" />
		
	<meta name="twitter:card" content="summary">
	<meta name="twitter:title" content="Admin">
	<meta name="twitter:url" content="https://irreverentmind.com/page-4a/mt-admin/index.php">
	<meta property="og:type" content="website">
	<meta property="og:site_name" content="Irreverent Mind">
	<meta property="og:title" content="Admin">
	<meta property="og:url" content="https://irreverentmind.com/page-4a/mt-admin/index.php">

	<link rel="stylesheet" type="text/css" media="all" href="../../rw_common/themes/foundation/consolidated.css" />
		
	<script>var foundation={};</script>
	<script>function loadCSS(a,b,c){"use strict";var d=window.document.createElement("link"),e=b||window.document.getElementsByTagName("script")[0],f=window.document.styleSheets;return d.rel="stylesheet",d.href=a,d.media="only x",e.parentNode.insertBefore(d,e),d.onloadcssdefined=function(a){for(var b,c=0;c<f.length;c++)f[c].href&&f[c].href===d.href&&(b=!0);b?a():setTimeout(function(){d.onloadcssdefined(a)})},d.onloadcssdefined(function(){d.media=c||"all"}),d}</script>

	

			<link rel='stylesheet' type='text/css' media='all' href='../../rw_common/plugins/stacks/stacks.css' />
<link rel="stylesheet" type="text/css" media="all" href="../../rw_common/plugins/stacks/wysiwyg-content.css" /><link rel="stylesheet" type="text/css" media="all" href="../../rw_common/plugins/stacks/wysiwyg-editor.css" />		<link rel='stylesheet' type='text/css' media='all' href='files/stacks_page_page48.css' />
        <script type='text/javascript' charset='utf-8' src='../../rw_common/plugins/stacks/jquery-2.2.4.min.js'></script>
        
        <link rel="stylesheet" href="../../rw_common/plugins/stacks/font-awesome.min.css">
        
<script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/jscookie.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/Sortable.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/afterselect.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/uri.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/fullscreen.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/dropzone.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/base64.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/moment-with-locales.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/wysiwyg-editor.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/markdown.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/textrange.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/foundation-datepicker.min.js"></script><script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/awesomplete.min.js"></script>		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

		<script type='text/javascript' charset='utf-8' src='files/stacks_page_page48.js'></script>
        <meta name="formatter" content="Stacks v4.3.0 (6300)" >
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.foundation.2col.s3" name="2 Column Foundation" content="1.9.4">
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.foundation.styles.s3" name=" Site Styles" content="1.9.4">
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.totalcms.protect" name="Protect" content="1.10.29">
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.totalcms.admin.styles" name="Admin Core" content="1.10.29">
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.foundation.topbar.s3" name="Top Bar" content="1.9.4">
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.foundation.1col.s3" name="1 Column Foundation" content="1.9.4">
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.foundation.button" name="Button" content="1.9.4">
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.foundation.topbar.dropzone" name="Top Bar Dropzone" content="1.9.4">
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.totalcms.admin.blog.list" name="Blog List" content="1.10.29">
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.totalcms.debug.check" name="Server Check" content="1.10.29">
		<meta class="stacks 4 stack version" id="com.joeworkman.stacks.totalcms.debug" name="Debug" content="1.10.29">
		




	<script>var jQuery=stacks.jQuery,$=jQuery;</script>
	
</head>

<body class="antialiased">

<div id="foundation-loader"></div>



<div id='stacks_out_1' class='stacks_top'><div id='stacks_in_1' class=''>   <!--[if lt IE 9]> <meta http-equiv="refresh" content="0; url="> <![endif]-->       


<?php
$days = 60;
$unit = 60;
if (isset($_SESSION["LAST_ACTIVITY"]) && time() <= $_SESSION["LAST_ACTIVITY"]+($days*$unit)) {
	$_SESSION["LAST_ACTIVITY"] = time();
}
else {
	session_unset();
	session_destroy();
	ob_get_clean(); // discard everything above
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">

	<title>Enter the passcode to login</title>

	<?php
    // Support PWA if it exists on the page
    echo $pageSpeedHeader??""; ?>

	<link rel="stylesheet" href="files/stacks_in_18_protect.css" />
</head>
<body class="color linear">



	<section id="protect-wrapper">
		<form id="protect" method="post" action="files/stacks_in_18_protect.php" data-action="files/stacks_in_18_protect.php">
			<div id="icon">
<div class='centered_image' >
</div>

</div>
			<p id="cookie-warning"></p>
			<input id="code" name="code" type="password" placeholder="Enter Password" tabindex="1" autofocus="autofocus">
		</form>
	</section>

	<footer id="footer">
		

		
	</footer>



	<script src="files/stacks_in_18_protect.js"></script>
<?php
	// hack for RW7 so that it does not add Body content
	echo "</bo"."dy>";
?>
</html>
<?php
	if (ob_get_level()) ob_end_flush(); // send buffer
	exit;
}
?>



<div id='stacks_out_2' class='stacks_out'><div id='stacks_in_2' class='stacks_in '>   <!--[if lt IE 9]> <meta http-equiv="refresh" content="0; url="> <![endif]-->       
</div></div><div id='stacks_out_7' class='stacks_out'><div id='stacks_in_7' class='stacks_in '>
	
		<?php
		if (!isset($cms_foundation_checker)) {
			$cms_foundation_checker = true;
			$page_check = ob_get_clean();
			ob_start();
			echo $page_check;
			if (strpos($page_check,"foundation-version") === false) {
				echo '<link rel="stylesheet" type="text/css" media="all" href="../../rw_common/plugins/stacks/total-cms/total-cms.css"/>'.
					'<script type="text/javascript" charset="utf-8" src="../../rw_common/plugins/stacks/total-cms/total-cms.js"></script>';
			}
		}
		?>
	
	






<!--
	File Preview Template
-->
<template id="file-preview-template">
<div class="dz-preview dz-file-preview">
	<div class="actionbar">
		<a class="filebar-link left float-left"  href="javascript:void(0)" title="Copy File Path"><i class="fa fa-link"></i></a>
		<a class="filebar-trash right float-right" href="javascript:void(0)" title="Delete File"><i class="fa fa-trash-o"></i></a>
	</div>
	<i class="fa file-icon fa-file-o fa-3x"></i>
	<p class="filename"></p>
	<div class="dz-progress">
		<span class="dz-upload" data-dz-uploadprogress></span>
		<span class="dz-upload-progress-label" data-dz-uploadprogress>0%</span>
	</div>
	<i class="fa fa-check-circle"></i>
	<i class="fa fa-times-circle"></i>
</div>
</template>
<!--
	Copy File Path Reveal Template
-->
<template id="imagebar-link-template">
<div id="imagebar-link" class="reveal reveal-modal" data-reveal>
	<h4>Copy File Path</h4>
	<hr/>
	<label>File Path</label>
	<input type="text" name="file" readonly/>
	<a class="close-reveal-modal close-button" data-close>&#215;</a>
</div>
</template>

<!--
	Feed Image Template
-->
<template id="feed-preview-template">
<div class="dz-preview dz-file-preview">
	<div class="actionbar">
		<a class="imagebar-tag left float-left" href="javascript:void(0)" title="Image Description">
			<i class="fa fa-tag"></i>
		</a>
	</div>
	<img oncontextmenu="return false;" draggable="false" data-dz-thumbnail />
	<div class="dz-progress">
		<span class="dz-upload" data-dz-uploadprogress></span>
		<span class="dz-upload-progress-label" data-dz-uploadprogress>0%</span>
	</div>
	<i class="fa fa-check-circle"></i>
	<i class="fa fa-times-circle"></i>
</div>
</template>
<!--
	Feed Edit Template
-->
<template id="feed-edit-template">
<div id="feed-edit" class="reveal reveal-modal" data-reveal>
	<h4>Edit Post</h4>
	<form autocomplete="off" id="form_feed_stacks_in_7_1" class="total-form feed-form feed-edit-form" method="post" action="../../rw_common/plugins/stacks/total-cms/totalapi.php">

		<fieldset class="image-box filedrop">

			<div class="total-preview">
				<div class="dz-overlay"><i class="fa  fa-newspaper-o fa-4x"></i></div>
				<div class="dz-preview dz-file-preview empty"></div>
			</div>

		</fieldset>


		<fieldset class="text-box textarea">

			<textarea class="format-selection" spellcheck="true" rows="5" name="feed" data-widearea="enable"></textarea>

		</fieldset>

		<input type="hidden" name="type" value="feed" />
		<input type="hidden" name="timestamp"/>
		<input type="hidden" name="alt"      />
		<input type="hidden" name="strip"    />
		<input type="hidden" name="slug"     />
		<input type="hidden" name="resize"   />
		<input type="hidden" name="quality"  />
		<input type="hidden" name="scale"    />
		<input type="hidden" name="scale_th" />
		<input type="hidden" name="scale_sq" />

		<input type="hidden" name="feed_title"       />
		<input type="hidden" name="feed_description" />
		<input type="hidden" name="feed_link"        />
		<input type="hidden" name="feed_baseurl"     />

		<button class="button radius local" type="submit">Save</button>
	</form>

	<a class="close-reveal-modal close-button" data-close>&#215;</a>
</div>
</template>
<!--
	Feed Edit Hipwig Template
-->
<template id="feed-edit-hipwig-template">
<div id="feed-edit-hipwig" class="reveal reveal-modal" data-reveal>
	<h4>Edit Post</h4>
	<form autocomplete="off" id="form_feed_hipwig_stacks_in_7_1" class="total-form feed-form feed-edit-form" method="post" action="../../rw_common/plugins/stacks/total-cms/totalapi.php">

		<fieldset class="image-box filedrop">

			<div class="total-preview">
				<div class="dz-overlay"><i class="fa  fa-newspaper-o fa-4x"></i></div>
				<div class="dz-preview dz-file-preview empty"></div>
			</div>

		</fieldset>


		<fieldset class="text-box textarea hipwig">

			<textarea class="hipwig" data-height="200" spellcheck="true" rows="5" name="feed"></textarea>

		</fieldset>

		<input type="hidden" name="type" value="feed" />
		<input type="hidden" name="timestamp"/>
		<input type="hidden" name="alt"      />
		<input type="hidden" name="strip"    />
		<input type="hidden" name="slug"     />
		<input type="hidden" name="resize"   />
		<input type="hidden" name="quality"  />
		<input type="hidden" name="scale"    />
		<input type="hidden" name="scale_th" />
		<input type="hidden" name="scale_sq" />

		<input type="hidden" name="feed_title"       />
		<input type="hidden" name="feed_description" />
		<input type="hidden" name="feed_link"        />
		<input type="hidden" name="feed_baseurl"     />

		<button class="button radius local" type="submit">Save</button>
	</form>

	<a class="close-reveal-modal close-button" data-close>&#215;</a>
</div>
</template>
<!--
	Blog List Template
-->
<template id="blog-list-template">
<li class="post">
	<time class="post-date"></time>
	<div class="post-action">
		<i class="fa fa-newspaper-o"></i>
		<i class="fa fa-video-camera"></i>
		<i class="fa fa-quote-left float-left"></i>
		<i class="fa fa-link"></i>
		<i class="fa fa-headphones"></i>

		<div class="actionbar fill">
			<a class="blogbar-draft left float-left"    href="javascript:void(0)" title="Set Draft"><i class="fa fa-bookmark"></i><i class="fa fa-bookmark-o"></i></a>
			<a class="blogbar-featured left float-left" href="javascript:void(0)" title="Set Featured"><i class="fa fa-star"></i><i class="fa fa-star-o"></i></a>
			<a class="blogbar-links left float-left"    href="javascript:void(0)" title="Copy Post Links"><i class="fa fa-link"></i></a>
			<a class="blogbar-trash right float-right"   href="javascript:void(0)" title="Delete Post"><i class="fa fa-trash-o"></i></a>
		</div>
	</div>
	<h5 class="post-title"><a class=""href="#"></a><small class="author"></small></h5>
	<div class="post-tags">
		<i class="fa fa-star fa-fw"></i>
		<i class="fa fa-bookmark fa-fw"></i>
	</div>
</li>
</template>
<!--
	Copy Blog Links Reveal Template
-->
<template id="blog-links-template">
<div id="blogbar-links" class="reveal reveal-modal" data-reveal>
	<h4>Copy Post Links</h4>
	<hr/>
	<label>Post Link <a class="right float-right permalink" href="#" target="_blank"><i class="fa fa-external-link"></i></a></label>
	<input type="text" name="permalink" readonly/>
	<label>Blog RSS <a class="right float-right rss" href="#" target="_blank"><i class="fa fa-external-link"></i></a></label>
	<input type="text" name="rss" readonly/>
	<label>Blog Sitemap <a class="right float-right sitemap" href="#" target="_blank"><i class="fa fa-external-link"></i></a></label>
	<input type="text" name="sitemap" readonly/>
	<a class="close-reveal-modal close-button" data-close>&#215;</a>
</div>
</template>
<!--
	Feed List Template
-->
<template id="feed-list-template">
<li class="post">
	<div class="post-image">
		<div class="actionbar fill">
			<a class="feedbar-tag left float-left"    href="javascript:void(0)" title="Image Description"><i class="fa fa-tag"></i></a>
			<a class="feedbar-edit left float-left"   href="javascript:void(0)" title="Edit Post"><i class="fa fa-pencil-square-o"></i></a>
			<a class="feedbar-rss left float-left"    href="javascript:void(0)" title="Copy Feed Links"><i class="fa fa-rss"></i></a>
			<a class="feedbar-trash right float-right" href="javascript:void(0)" title="Delete Feed Post"><i class="fa fa-trash-o"></i></a>
		</div>
	</div>
	<div class="post-text feedbar-edit"></div>
	<time class="post-date"></time>
</li>
</template>
<!--
	Copy Feed RSS Reveal Template
-->
<template id="feed-rss-template">
<div id="feed-rss" class="reveal reveal-modal" data-reveal>
	<h4>Copy Feed Links</h4>
	<hr/>
	<label>Feed RSS</label>
	<input type="text" name="rss" readonly/>
	<a class="close-reveal-modal close-button" data-close>&#215;</a>
</div>
</template>
<!--
	Datastore Reveal Template
-->
<template id="datastore-template">
<div id="datastore-bulk-edit" class="reveal reveal-modal" data-reveal>
	<h4>Bulk Edit</h4>
	<hr/>

	<form class="total-form datastore-form" autocomplete="off" method="post" action="../../rw_common/plugins/stacks/total-cms/totalapi.php" data-baseurl="https://irreverentmind.com/">

		<fieldset class="text-box textarea">
			<textarea class="track-selection" name="datastore" spellcheck="true" rows="10"></textarea>
		</fieldset>

		<input type="hidden" name="_METHOD" value="PUT"/>
		<input type="hidden" name="type"    value="datastore"/>
		<input type="hidden" name="ext"     value="csv"/>
		<input type="hidden" name="slug"    value=""/>

		<button class="button radius" type="submit" value="Save">Save</button>
	</form>

	<a class="close-reveal-modal close-button" data-close>&#215;</a>
</div>
</template>







<div id="cms-alertbox-success" class="cms-alertbox"><i class="fa fa-check fa-3x"></i></div>
<div id="cms-alertbox-error" class="cms-alertbox"><i class="fa fa-times fa-3x"></i></div>

<!--
	Image Preview Template
-->
<template id="image-preview-template">
<div class="dz-preview dz-file-preview">
	<div class="actionbar">
		<a class="imagebar-tag left float-left"   href="javascript:void(0)" title="Image Description"><i class="fa fa-tag"></i></a>
		<a class="imagebar-image left float-left" href="javascript:void(0)" title="Copy Image Paths"><i class="fa fa-image"></i></a>
		<a class="imagebar-featured left float-left"  href="javascript:void(0)" title="Featured Image"><i class="fa fa-star-o"></i><i class="fa fa-star"></i></a>
		<a class="imagebar-trash right float-right" href="javascript:void(0)" title="Delete Image"><i class="fa fa-trash-o"></i></a>
		<i class="fa fa-fw fa-bars imagebar-move"></i>
	</div>
	<img oncontextmenu="return false;" draggable="false" data-dz-thumbnail />
	<div class="dz-progress">
		<span class="dz-upload" data-dz-uploadprogress></span>
		<span class="dz-upload-progress-label" data-dz-uploadprogress>0%</span>
	</div>
	<i class="fa fa-check-circle"></i>
	<i class="fa fa-times-circle has-tip" data-tooltip title="Error"></i>
</div>
</template>
<!--
	Copy Image Path Reveal Template
-->
<template id="imagebar-image-template">
<div id="imagebar-image" class="reveal reveal-modal" data-reveal>
	<h4>Copy Image Paths</h4>
	<hr/>
	<label>Full Image <a class="right float-right image" href="#" target="_blank"><i class="fa fa-external-link"></i></a></label>
	<input type="text" name="image" readonly/>
	<label>Thumbnail <a class="right float-right thumb" href="#" target="_blank"><i class="fa fa-external-link"></i></a></label>
	<input type="text" name="thumb" readonly/>
	<label>Square Thumb <a class="right float-right square" href="#" target="_blank"><i class="fa fa-external-link"></i></a></label>
	<input type="text" name="square" readonly/>

	<img src="" alt=""/>
	<a class="close-reveal-modal close-button" data-close>&#215;</a>
</div>
</template>
<!--
	Alt Tag Reveal Template
-->
<template id="altbox-template">
<div id="altbox" class="reveal reveal-modal" data-reveal>
	<h4>Image Description</h4>
	<hr/>

	<form class="total-form alt-form" autocomplete="off" method="post" action="../../rw_common/plugins/stacks/total-cms/totalapi.php" data-baseurl="https://irreverentmind.com/">

		<img src="" alt=""/>

		<fieldset class="text-box textarea">
			<textarea class="track-selection" name="alt" spellcheck="true" rows="2" placeholder="Enter Image Description"></textarea>
		</fieldset>

		<input type="hidden" name="_METHOD" value="PUT"/>
		<input type="hidden" name="type"  value="image"/>
		<input type="hidden" name="filename" value="false"/>
		<input type="hidden" name="isGallery" value="false"/>
		<input type="hidden" name="timestamp" />
		<input type="hidden" name="ext"   value="jpg"/>
		<input type="hidden" name="slug"  value=""/>
		<input type="hidden" name="permalink" value=""/>

		<button class="button radius" type="submit" value="Save">Save</button>
	</form>

	<a class="close-reveal-modal close-button" data-close>&#215;</a>
</div>
</template>


 
 
   
</div></div><div id='stacks_out_3' class='stacks_out'><div id='stacks_in_3' class='stacks_in '><div id='stacks_out_3_1' class='stacks_out'><div id='stacks_in_3_1' class='stacks_in com_joeworkman_stacks_foundation_topbar_s3_stack'>


<div class="top-bar-wrapper full-width   sticky  contain-to-grid  solid   stickyLogo submenuIndicator menu-align-centered zone-align-left">
    <nav class="top-bar" data-topbar data-options="is_hover:true;custom_back_text:true;back_text:Back;mobile_show_parent_link:true;scrolltop:false;" role="navigation">
        <ul class="title-area title-area-site-setup">
            <li class="name ">
                
                    <a href="https://irreverentmind.com/">
                        
                        
                    </a>
                

                
            </li>
            <li class="toggle-topbar menu-icon">
                <a href="#">
                    <span>Menu</span>
                </a>
            </li>
        </ul>

        <section class="top-bar-section  menu-rw">







    <ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../../index.html" rel="">Irreverent Mind</a></li><li class="active has-dropdown" role="menuitem"><a href="../../page-4a/index.html">WRITINGS</a><ul class="menu dropdown" role="navigation"><li class="has-dropdown" role="menuitem"><a href="../../page-4a/mind-tickler/index.php" rel="">Mind-Tickler Blog</a></li><li class="has-dropdown" role="menuitem"><a href="../../suffering_and_nonduality.html" rel="">Transform Suffering</a></li><li class="has-dropdown" role="menuitem"><a href="../../page-4a/page-2c/Judy_Cohen_article_Paradoxica_magazine.html" rel="">Magazine Article by Judy</a></li></ul></li><li class="has-dropdown" role="menuitem"><a href="../../page/about_judy_nonduality_facilitator.html" rel="">JUDY'S STORY</a></li><li class="has-dropdown" role="menuitem"><a href="../../page37/email_judy.html" rel="">CONTACT</a></li><li class="has-dropdown" role="menuitem"><a href="../../page-3/index.html" rel=""></a></li></ul>










        </section>
    </nav>
</div>



</div></div></div></div><div id='stacks_out_4' class='stacks_out'><div id='stacks_in_4' class='stacks_in com_joeworkman_stacks_foundation_1col_s3_stack'> 
<div class='row        '  > <div class='columns small-12      '> <div id='stacks_out_16' class='stacks_out'><div id='stacks_in_16' class='stacks_in image_stack'>
<div class='centered_image' >
    <img class='imageStyle' src='files/stacks-image-ade1b93.jpg' alt='Stacks Image 17' />
</div>

</div></div><div id='stacks_out_9' class='stacks_out'><div id='stacks_in_9' class='stacks_in com_joeworkman_stacks_foundation_2col_s3_stack'> 
<div class='row     '  > <div class='columns small-12    medium-6     ' >  <div class='slice empty out'><div class='slice empty in'></div></div>  </div> <div class='columns small-12    medium-6     ' >  <div id='stacks_out_12' class='stacks_out'><div id='stacks_in_12' class='stacks_in com_joeworkman_stacks_foundation_button_stack'>  <a role="button" href="../../page-4a/mt-admin/mt-adminview/index.php" class=" button   centered   round " target="" rel="">New Post</a>   
</div></div>  </div> </div> 
</div></div><div id='stacks_out_8' class='stacks_out'><div id='stacks_in_8' class='stacks_in com_joeworkman_stacks_totalcms_admin_blog_list_stack'> <form class="blog-filter" autocomplete="off"> <div class="right total"><span class="count">0</span> Posts</div> <select name="scope"> <option value="all" selected>All Fields</option> <option value="author">Author</option> <option value="genre">Genre</option> <option value="category">Category</option> <option value="tag">Tag</option> <option value="label">Label</option> <option value="title">Title</option> </select> <input type="text" spellcheck="true" placeholder="Filter" name="filter" /> </form>  <ul style="min-height:600px" class="admin total-blog-list " data-maxheight="600" data-slug="mindtickler" data-editurl="../../page-4a/mt-admin/mt-adminview/index.php" data-dateformat='MMM DD YYYY' data-filter='{"all":true,"sort":"new","date":"all","draft":"top","featured":"with","archived":"hide","category":"","tag":""}'>  </ul> 
 
</div></div><div id='stacks_out_22' class='stacks_out'><div id='stacks_in_22' class='stacks_in com_joeworkman_stacks_totalcms_debug_stack'><!-- Total CMS Debug -->


<div id='stacks_out_23' class='stacks_out'><div id='stacks_in_23' class='stacks_in com_joeworkman_stacks_totalcms_debug_check_stack'>



</div></div>


</div></div> </div> </div> 
</div></div></div></div>
<!--  -->


<script data-cfasync="true" src="../../rw_common/themes/foundation/foundation.min.js"></script>


<rapidweaver-badge url="https://www.realmacsoftware.com" position-x="left" position-y="bottom" transition="slide" delay-type="time" delay="1000" mode="auto" target="_blank"><img src= "../../rw_common/assets/RWBadge.png" alt="RapidWeaver Icon" /><p>Made in RapidWeaver</p></rapidweaver-badge>
<script src="../../rw_common/assets/rw-badge.js"></script>
</body>
</html>
