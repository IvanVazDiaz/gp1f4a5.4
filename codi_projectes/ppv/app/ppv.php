<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>PRICE OF THE SELECTED MATCH</title>
</head>
        <body>
                <p><u>PRICE OF THE SELECTED MATCH</u></p>
                <?php
			if ($_GET["e1"]==$_GET["e2"]){
				echo "Wrong selection. A team can not play against itself. Select a different team 2, please</br>";
			}
			else{
				if (($_GET["e1"]=="Rocaparda Village Sporting Club") and  ($_GET["e2"]=="North Pallerola Athletic Club")) {
					echo "Special match: Price: 13 Euros</br>";
				}
				else {
					echo "Basic match. Price: 10 Euros</br>";
				}
			}
		?>
		<br>
		<a href="index.html">Return to the init web page</a>
        </body>
</html>
