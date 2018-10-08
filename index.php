<html>
<head>
	<title>COUCOU</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="place">
	<?php
	if($dossier = opendir('./Image'))
			{
			while(false !== ($fichier = readdir($dossier)))
				{
				if($fichier != '.' && $fichier != '..' && $fichier != 'index.php')
					{
									
					echo '<a href="description_tome.php?Tome=' .$compte .'"><img src="Livre.png"/>';
					echo '&nbsp';
					
					if(($compte % 2) == 1)
					{
						echo '</br></br>';
						
					}
					$compte++;
 
				}
			echo '</ul><br />';
			
 
			closedir($dossier);
 
		}
		else{
		     echo 'Le dossier n\' a pas pu être ouvert';
		 }
		 ?>
	<div class="Livre">
		<img src="Livre.png">
		<img src="Livre.png">
		<img src="Livre.png">
		<img src="Livre.png">
	</div>
	<!--<div >
		<img src="Livre.png">
		<img src="Livre.png">
		<img src="Livre.png">
		<img src="Livre.png">
	</div>
	<div class="Livre">
		<img src="Livre.png">
		<img src="Livre.png">
		<img src="Livre.png">
		<img src="Livre.png">
	</div>
	<div class="Livre">
		<img src="Livre.png">
		<img src="Livre.png">
		<img src="Livre.png">
		<img src="Livre.png">
	</div>-->

</body>
</html>
