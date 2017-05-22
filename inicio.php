<?php

#IMAGEN
$image = 'image.jpg';
$imageData = base64_encode(file_get_contents($image));
$src_image = 'data: '.mime_content_type($image).';base64,'.$imageData;

#VIDEO
$video = 'video.mp4';
$videoData = base64_encode(file_get_contents($video));
$src_video = 'data: '.mime_content_type($video).';base64,'.$videoData;

echo 
'
<div class="center">
	<img src="'. $src_image. '">
</div>
<br>
<div class="center">
	<video width="1000" height="300" controls>
		<source src="'. $src_video. '" type="video/mp4">
	</video>
</div>

<style>
.center{
	text-align: center;
}
</style>
';