jQuery(document).ready(function(){
	var head_funct = jQuery('#head_funct');
	jQuery('#header_tabs li').each(function(index, el){
		jQuery(el).hover(function(){
			jQuery('#header_panel').stop(true).scrollTo('li:eq(' + index + ')', 500, {
			}, function(){});
		});
	});
	
	jQuery('#slide_latest_panel').foolslide({
		slideUrls: ['http://foolrulez.org/slide']
	});
	
	var foolslide = new $.foolslide(null, {
				slideUrls: ['http://foolrulez.org/slide']
			});
	
	var chaptersArray = foolslide.readerChapters({
		direction: 'desc'
	});
	
});
