<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label>Número 1:</label>
        <input type="number" name="num1" required><br><br>
        <label>Número 2:</label>
        <input type="number" name="num2" required><br><br>
        <input type="submit" name="somar" value="Somar">
    </form>

    <?php
require_once "funcao.php";
if(isset($_POST['num1']) && isset($_POST['num2'])){
    $calc = new Calculadora();
    $calc->num1 = $_POST['num1'];
    $calc->num2 = $_POST['num2'];
    $resultado = $calc->subtraçao();
    echo "Resultado: " . $resultado;
}
    ?>
</body>
</html>