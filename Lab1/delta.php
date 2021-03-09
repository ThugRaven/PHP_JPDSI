<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1</title>
</head>
<body>
    <?php
        $a = $b = $c = 0;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
        }
    ?>

    <p>
        ax<sup>2</sup> + bx + c = 0
    </p>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <input type="text" name="a" value="<?php echo $a;?>" size="4"> a<br />
        <input type="text" name="b" value="<?php echo $b;?>" size="4"> b<br />
        <input type="text" name="c" value="<?php echo $c;?>" size="4"> c<br /><br />
        <input type="submit" value="Oblicz">
        <input type="reset" value="Wyczyść">
    </form>
    <br />

    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(isset($a) && isset($b) && isset($c)){
                rown_kwadr($a, $b, $c);
            }
            else{
                print("Nie podano wszystkich wartości!");
            }
        }
        
        function rown_kwadr($a, $b, $c){
            $delta = $b * $b - 4 * ($a * $c);

            if($a == 0){
                return print("A nie może być równe zero!");
            }

            if($delta > 0){
                $x1 = (-$b + sqrt($delta)) / (2*$a);
        	    $x2 = (-$b - sqrt($delta)) / (2*$a);
			    print("Delta > 0, równanie ma dwa rozwiązania" . "<br />" . "x<sub>1</sub> = " . $x1 . "<br />" . "x<sub>2</sub> = " . $x2);
            }
            else if($delta == 0){
                $x1 = -$b / (2 * $a);
                print("Delta = 0, równanie ma jedno rozwiązanie" . "<br />" . "x<sub>1</sub> = " . $x1);
            }
            else{
                print("Delta < 0, równanie nie ma rozwiązań");
            }
        }
    ?>
    
</body>
</html>