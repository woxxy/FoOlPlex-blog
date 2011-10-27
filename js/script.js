jQuery(document).ready(function(){
	
	(function() {
		var po = document.createElement('script');
		po.type = 'text/javascript';
		po.async = true;
		po.src = 'https://apis.google.com/js/plusone.js';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(po, s);
	})();
	
	var foolslide = new $.foolslide(null, {
		slideUrls: ['http://foolrulez.org/slide']
	});
	
	if(jQuery('#list_for_foolslide').length > 0)
	{
		var chaptersArray = foolslide.readerChapters({
			direction: 'desc',
			per_page: 8
		});
		
		var chapters_list = "";
		var prev_id = 0;
		jQuery.each(chaptersArray.chapters, function(index, chapter){
			if(prev_id != chapter.comic_id)
			{
				var comic = foolslide.readerComic({
					id: chapter.comic_id
				});
				chapters_list += '<dt><a href="' + comic.comics[0].href + '">' + comic.comics[0].name + '</a></dt>'; 
				prev_id = chapter.comic_id;
			}
			chapters_list += '<dd><a href="' + chapter.href + '">' + ((chapter.volume>0)?'Vol.' + chapter.volume + ' ':'') + 'Chapter ' + chapter.chapter + ((chapter.subchapter>0)?'.' + chapter.subchapter + ' ':'');
			
			// some date calculation
			var date = new Date((chapter.created || "").replace(/-/g,"/").replace(/[TZ]/g," ")),
			diff = (((new Date()).getTime() - date.getTime()) / 1000),
			day_diff = Math.floor(diff / 86400);
			
			if(day_diff <= 2)
				chapters_list += ' <time style="color:red">' + prettyDate(chapter.created) + '</time>';
			else if(day_diff <= 7)
				chapters_list += ' <time style="color:orange">' + prettyDate(chapter.created) + '</time>';
			else
				chapters_list += ' <time>' + prettyDate(chapter.created) + '</time>';
			
			chapters_list += '</a></dd>';
		})
	
		jQuery('#list_for_foolslide').html(chapters_list);
	}
});
