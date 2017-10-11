<html>
<head>
<title>Practica 12- Variables PHP</title>
<meta charset="utf-8"/>
</head>
<body>
    <?php
    $nombre='Carlos';
    $edad=18;
    $salario=8500.50;
    $estatus=true;
    echo "Valores<br/>";
    echo "Nombre: ".$nombre. '<br/>';
    echo "Edad".$edad. '<br/>';
    echo "Salario".$salario. '<br/>';
    echo "Estatus".$estatus. '<br/>';
    ?>
    <h1>Operaciones Aritmeticas</h1>
    <?php
    echo "Operaciones";
    $valor1=15;
    $valor2=7;
    $suma=$valor1+$valor2;
    echo "la suma es:".$suma. '<br/>';

    $Divi=$valor1/$valor2;
    echo "la divicion es:".$Divi. '<br/>';

    $Resta=$valor1-$valor2;
    echo "la Resta es:".$Resta. '<br/>';

    $Mul=$valor1*$valor2;
    echo "la multiplicacion es:".$Mul. '<br/>';

    ?>
</body>
</html>