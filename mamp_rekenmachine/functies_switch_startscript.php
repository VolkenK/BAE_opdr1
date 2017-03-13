<?php
$num1 = $num2 =$num3 =$num4 ="";//geef een waarde bij opstarten script
$operand = "";//geef een waarde bij opstarten script
if(isset($_GET['num1']) && isset($_GET['num2'])&& isset($_GET['num3']) && isset($_GET['num4']) && isset($_GET['operand']))
{
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];
    $num4 = $_GET['num4'];
    $operand = $_GET['operand'];
}

function calc($num1,  $num2,  $num3,  $num4, $operand)
{
    switch($operand)
    {
        case "+": return ($num1 + $num2 + $num3 + $num4); break;
        case "-": return ($num1 - $num2 - $num3 - $num4); break;
        case "/": return ($num1 / $num2 / $num3 / $num4); break;
        case "*": return ($num1 * $num2 * $num3 * $num4); break;
        default : return ("geen of verkeerde operand $operand ingevoerd" ); break;
    }
}
function printSource(){ // dit script print de source code
    echo "<h1>da codee</h1>";
    show_source("functies_switch_startscript.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>I am the edge lord</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div> neklov kolemijn gd1b</div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
    <fieldset>
        <legend>Hallo ed!</legend>
        <p>A: <input type="text" name="num1" placeholder = "getal" value = "<?php echo $num1 ?>"></p>
        <p>B: <input type="text" name="num2" placeholder = "getal" value = "<?php echo $num2 ?>"></p>
        <p>C: <input type="text" name="num3" placeholder = "getal" value = "<?php echo $num3 ?>"></p>
        <p>D: <input type="text" name="num4" placeholder = "getal" value = "<?php echo $num4 ?>"></p>
        <p>Berekening: <input type="text" size = "8" placeholder = "bewerking" name="operand" value = "<?php echo $operand ?>"></p>

        <p><input type="submit" name="versturen" value="Versturen"></p>
    </fieldset>
    <p><?php echo "Het resultaat met $operand is: ". calc($num1,  $num2,  $num3,  $num4, $operand); ?></p>

</form>
Bonus: voeg code toe om delen door nul te voorkomen.<br>
Als er gedeeld wordt door 0 moet je een waarschuwing
laten zien bijvoorbeeld "delen door 0 kan niet."<br>
<?php printSource(); ?>
</body>
</html>
