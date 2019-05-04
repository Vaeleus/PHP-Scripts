<!DOCTYPE html>
<html>
<head>
	<title>phplessons</title>
</head>
<body>
	<h1>ID Generator</h1>
	<form method='POST'>
		<button name='gen' value="set">Generate</button>
	</form>
	<?php
		$abc = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm',
		 						 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');

		if(isset($_POST['gen'])) {
			for($i = 0; $i < 20; $i++) {
				switch(random_int(0,1)) {
					case '0':
						$x = random_int(0, 9);
						echo $x;
						break;

					case '1':
						$x = $abc[random_int(0, 25)];
						echo $x;
						break;
				}
			}
		}
	?>
</body>
</html>
