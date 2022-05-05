<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recibo de prestação de serviço</title>
</head>

<body>

    <?php
    $recebido_numero = $_POST['numero_recibo'];
    $recebido_valor = $_POST['valor'];
    $recebido_contratante = $_POST['contratante'];
    $recebido_cpf_cnpj = $_POST['cpf_cnpj'];
    $recebido_referente = $_POST['referente'];
    $recebido_cidade = $_POST['cidade'];
    $recebido_data = $_POST[dataAtual()];
    ?>
</body>

</html>