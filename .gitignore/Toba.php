<?php 
set_time_limit(0); 
$q=1; 
while($q<=114){ 
	if($q<=9){ 
		$li="http://download.tvquran.com/download/TvQuran.com__Alafasi/00$q.mp3"; 
		echo"<a href='http://download.tvquran.com/download/TvQuran.com__Alafasi/00$q.mp3'> $q </a><BR />"; 
		ob_flush(); 
		flush(); 
		file_put_contents("00$q.mp3",file_get_contents($li)); 
	} 
	elseif($q<=90){ 
		$li="http://download.tvquran.com/download/TvQuran.com__Alafasi/0$q.mp3>"; 
		echo"<a href='http://download.tvquran.com/download/TvQuran.com__Alafasi/0$q.mp3'> $q </a><BR />"; 
		ob_flush(); 
		flush(); 
		file_put_contents("0$q.mp3",file_get_contents($li)); 
	} 
	else{ 
		$li="http://download.tvquran.com/download/TvQuran.com__Alafasi/$q.mp3"; 
		echo"<a href='http://download.tvquran.com/download/TvQuran.com__Alafasi/$q.mp3'> $q </a><BR />"; 
		ob_flush(); 
		flush(); 
		file_put_contents("$q.mp3",file_get_contents($li)); 
	} 
	$q++; 
} 
echo"Done ..."; 
