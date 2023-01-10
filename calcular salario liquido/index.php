<!DOCTYPE html>
<html lang="en">
<head>
<?php

    include_once 'processo.php';


?>
    
    <meta charset="UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>calcular salario liquido</title>

    <link rel="stylesheet" href="/decor.css">

</head>
<body>
    
    <fieldset>
        <p>salário minimo: R$1.212</p>
    </fieldset>

    <form action="" method="GET">
        <input type="number" name="SALARIOBRUTO" placeholder="Salário bruto do empregado">
        
        <label for="">Transporte: </label>
        <input type="number" name="TRANSPORTE" placeholder="Desconto por Transporte">
        
        <label for="">Pensão Alimenticia(P.A.T.)/label>
        <input type="number" name="PAT" placeholder="Desconto por Pensão Alimenticia">

        <label for="">Plano de Saúde</label>
        <input type="number" placeholder="Desconto por Plano de Saúde">

        <label for="">Outros Descontos...</label>
        <input type="number" name="OUTROS" placeholder="Outros Descontos feitos...">

        <input type="submit">

        <?php

        echo "Seu Sálario liquido é de: $final";

        ?>
    </form>
    
</body>
</html>