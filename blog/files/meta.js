(function() {
	var Realmac = Realmac || {};

	Realmac.meta = {
		
		// Set the browser title
		//
		// @var String text
		setTitle: function(text) {
			return document.title = text;
		},
		
		// Set the content attribute of a meta tag
		//
		// @var String name
		// @var String content
		setTagContent: function(tag, content){
			// If the tag being set is title
			// return the result of setTitle
			if ( tag === 'title' )
			{
				return this.setTitle(content);
			}
			
			// Otherwise try and find the meta tag
			var tag = this.getTag(tag);
			
			// If we have a tag, set the content
			if ( tag !== false )
			{
				return tag.setAttribute('content', content);
			}
			
			return false;
		},
		
		// Find a meta tag
		//
		// @var String name
		getTag: function(name) {
			var meta = document.querySelectorAll('meta');
			
			for ( var i=0; i<meta.length; i++ )
			{
				if (meta[i].name == name){
					return meta[i];
				}
			}
			
			var tag = document.createElement('meta');
			tag.name = name;
			document.getElementsByTagName('head')[0].appendChild(tag);
			
			return tag;
		}
	};
 
	// Object containing all website meta info
	var websiteMeta = {"58e643ae65571cd8d52be80ad8c3862d-5.html":"￼  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; ￼   \n\n","4cc37d75b3fe0a89c6ba2e3656ee6c3a-6.html":"￼    \nLast summer I put my treasured kitty Muffin to sleep.\nSuch sadness. Such loss. \n","archive-05-june-2016.html":"Archives for 05 June 2016","406609659c04b068d6a47c65bfa3f711-9.html":"￼\n\nWhen we think about how much of our lives we devote to getting people to like us, well… ","archive-08-may-2016.html":"Archives for 08 May 2016","archive-26-february-2017.html":"Archives for 26 February 2017","archive-03-july-2016.html":"Archives for 03 July 2016","2d5cb57143f6734d4464d9611e937723-7.html":"￼\nMost people involved with spirituality want things to be different.\nYeah, there, I said it.\n"};
 
	// pageId must match the key in websiteMeta object
	var url = window.location.pathname;
	var pageId = url.substring(url.lastIndexOf('/')+1);
	if (!pageId || pageId.length == 0){
		pageId = 'index.html';
	}
	pageMeta = websiteMeta[pageId];
 
	// If we have meta for this page
	if (pageMeta){
		Realmac.meta.setTagContent('description', pageMeta);
	}
 
 })();