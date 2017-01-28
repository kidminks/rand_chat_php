<html>
 <head>
	<meta http-equiv="refresh" content="1">
 </head>
 <body>
	<?php
		$link=mysqli_connect('localhost','id349939_a8314628_mayank','Jai@hind1','id349939_a8314628_forum');
		if(!$link){
			die("could not connect".mysqli_error());
		}
		$query="SELECT * FROM Message";
		if($result=mysqli_query($link,$query)){
			while($row=mysqli_fetch_row($result)){
				echo $row['1'].":-&nbsp&nbsp".$row['2']."</br>";
			}
			mysqli_free_result($result);
		}
                $sql  = 'DELETE FROM `Message` WHERE timestamp<CURRENT_TIMESTAMP-INTERVAL \'20\' minute';
                if($result=mysqli_query($link,$sql));
		mysqli_close($link);
	?>
 </body>
</html>