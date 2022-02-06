<!DOCTYPE html>
<html lang="pt-br">

<head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../meustyle.css">
    <style>
        body {
            height: 100vh !important;

        }

        .leitura {
            font-weight: bolder;
            background-color: azure;
            border: 1px solid black;
        }
    </style>
    <title>IMC</title>
</head>

<?php

$nome = trim($_POST['nome']) ?? null;
$peso = $_POST['peso'] ?? null;
$altura = $_POST['altura'] ?? null;

if (is_null($nome)) {
    header('Location: ' . 'index.php');
  }

$alturaMetros = $altura / 100;
$imc = $peso / ($alturaMetros * $alturaMetros);

switch ($imc) {
    case $imc < 18.5:
        $resultado = "<span style='color: yellow'>abaixo do peso</span>";
        break;
    case $imc >= 18.5 && $imc <= 24.9:
        $resultado = "no <span style='color: green'>peso normal</span>";
        break;
    case $imc >= 25 && $imc <= 29.9:
        $resultado = "em <span style='color: orange'>sobrepeso</span>";
        break;
    case $imc >= 30 && $imc <= 34.9:
        $resultado = "com <span style='color: red'>Obesidade grau I</span>";
        break;
    case $imc >= 35 && $imc <= 39.9:
        $resultado = "com <span style='color: red'>Obesidade grau II</span>";
        break;
    case $imc >= 40:
        $resultado = "com <span style='color: red'>Obesidade grau III</span>";
        break;
}

?>

<body class="fundo-principal">
    <?php include_once("../nav.php"); ?>
    <div class="coluna-imc mx-auto p-0" >
        <h1 class="text-center">Calculadora de IMC</h1>
        <p class="text-center px-3 mx-1">
        <a href="https://douglasbarreto.me/projeto6/index.php"><button type="button" class="btn btn-primary btn-lg">Calcular outro IMC</button></a>
            <div class="form-group">
                <label for="formNome">Nome</label>
                <input type="text" class="form-control leitura" id="formNome" maxlength="15" readonly value="<?php echo $nome; ?>">
            </div>
            <div class="form-group">
                <label for="formPeso">Peso (KG)</label>
                <input type="number" class="form-control leitura" id="formPeso" readonly value="<?php echo $peso; ?>">
            </div>
            <div class="form-group">
                <label for="formAltura">Altura (cm)</label>
                <input type="number" class="form-control leitura" id="formAltura" readonly value="<?php echo $altura; ?>">
            </div>
            <div class="resultado">
            <p><?php echo $nome; ?>, seu IMC é <?php echo round($imc, 2); ?></p>
            <p><?php echo "Você está " . $resultado;?></p>

            


            </div>

        </p>
    </div>

    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>





    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>