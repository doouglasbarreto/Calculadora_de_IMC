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

    </style>
    <title>IMC</title>
</head>

<body class="fundo-principal">
    <div class="coluna-imc mx-auto p-0 md-2">
        <h1 class="text-center">Calculadora de IMC</h1>
        <p class="text-center px-3 mx-1">

            Cada resultado do IMC deve ser avaliado por um profissional de saúde. No entanto, a tabela a seguir indica os possíveis resultados do IMC, de acordo com a Organização Mundial da Saúde.<br>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                Quando não calcular o IMC
            </button>

            <!-- Modal -->
        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"> Quando não calcular o IMC</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Apesar do IMC ser muito utilizado para verificar se o indivíduo está acima do peso ou não, este método possui algumas falhas e, por isso, recomenda-se que além dele, utilize outros meios de diagnóstico para verificar se o indivíduo está realmente acima ou abaixo do peso ideal, como a medição da prega de gordura, por exemplo.<br>

                        Assim, o IMC não é o parâmetro ideal para se avaliar o peso ideal em:<br>
                        <ul>
                            <li><strong>Atletas e pessoas muito musculosas:</strong> porque não leva em consideração o peso dos músculos. Nesse caso a medida do pescoço é uma melhor opção.</li>
                            <li><strong>Idosos:</strong> porque não leva em consideração a redução natural dos músculos nessas idades;</li>
                            <li><strong>Durante a gravidez:</strong> porque não leva em consideração o crescimento do bebê.</li>

                        </ul>
                        Além disso ele é contraindicado em caso de desnutrição, ascite, edemas e em pacientes acamados.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Entendi</button>
                    </div>
                </div>
            </div>
        </div><br>


        Preencha todos os campos abaixo corretamente e clique em calcular.<br><br>
        <form method="POST" action="imc.php">
            <div class="form-group">
                <label for="formNome">Nome</label>
                <input type="text" class="form-control" name="nome" required id="formNome" placeholder="Maria...">
            </div>
            <div class="form-group">
                <label for="formPeso">Peso (KG)</label>
                <input type="number" class="form-control" name="peso" required id="formPeso" min="1" max="300" step="0.01" placeholder="70...">
            </div>
            <div class="form-group">
                <label for="formAltura">Altura (cm)</label>
                <input type="number" class="form-control" name="altura" required id="formAltura" min="1" max="300" step="any" placeholder="170...">
            </div>
            <input type="submit" class="btn btn-primary d-block mx-auto" value="Calcular">




        </form>

        </p>
    </div>







    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>