<?php
	include("simple_html_dom.php");
	$html = file_get_html('https://www.pexels.com/search/videos/cat/');

	foreach($html->find('video.photo-item__video source[src]') as $element) {
			printf('<iframe width="560" height="315" src="%s" frameborder="0"
			allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
			allowfullscreen></iframe>', $element->src);
	}
?>
