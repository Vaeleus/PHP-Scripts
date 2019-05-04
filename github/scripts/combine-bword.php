<html><head><title>combine-base-word</title></head><body>
	<form method='POST'>
		Base Word: <input type="text" name="bword">
		<button name='sub' value="set">Submit</button>
	</form>
</body></html>

<?php
	$prefix = array(
		// Color prefixes
		'Red ',
		'Green ',
		'Blue ',

		// Emotional prefixes
		'Angry ',
		'Funny ',
		'Scary ',
		'Happy ',
		'Lazy ',

		// Other
		'Big '
	);

	$suffix = array(
		// I don't know
		' Killer',
	    'Bully',
	);

	foreach ($prefix as $x) {
		echo $x.$_POST['bword'].'<br>';
	}

	foreach ($suffix as $x) {
		echo $_POST['bword'].$x.'<br>';
	}
?>	
