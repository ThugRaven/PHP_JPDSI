<html>
	<head>
		<title>Test</title>
	</head>
	
	<body>
		Hello World!
		
		
		<?php
		
		$a = 1;
		$b = 5;
		$c = 1;
		
		$delta = $b*$b - 4 * ($a * $c);
		
		//print("Delta: " . $delta);
		
		if($delta > 0){
			$x1 = (-$b + sqrt($delta))/(2*$a);
			$x2 = (-$b - sqrt($delta))/(2*$a);
			print("x1: " . $x1 . ", x2: " . $x2);
		}
		else if($delta == 0){
			$x1 = (-$b + sqrt($delta))/(2*$a);
			print("x1: " . $x1);
		}
		else{
			print("Brak pierwiastkow");
		}
		
		echo '<br />';
		
		for($i = 0; $i < 10; $i++){
			echo '<br />' . $i;
		}
		?>
		
	</body>
</html>