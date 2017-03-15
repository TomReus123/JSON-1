<?php
	$file = 'school.json';
	if(file_exists($file)){
		$filedata = file_get_contents($file);
		$objson = json_decode($filedata, true);
		echo"<hr><code><pre>";
		print_r($objson);//voor debuggen
		echo"</pre></code></hr>";
	}
	else{
			echo $file .' not exists';
		}
		echo($objson['school']['Mediacollege']['courses']['MD']);
		echo("<br>");
		echo($objson['school']['Horizoncollege']['nr_students']);
	
?>