<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1><center>Calculo de Salario</center></h1>

    <section class="sectionData">
        <form class="formData" name="form" method="get">
            <label for="">Insira seu nome:</label>
            <br>
            <input name="name" type="text" required>
            <br>
            <label for="">Meta Semana 1: (atingida)</label>
            <br>
            <input name="semana1" type="number" required>
            <br>
            <label for="">Meta Semana 2: (atingida)</label>
            <br>
            <input name="semana2" type="number" required>
            <br>
            <label for="">Meta Semana 3: (atingida)</label>
            <br>
            <input name="semana3" type="number" required>
            <br>
            <label for="">Meta Semana 4: (atingida)</label>
            <br>
            <input name="semana4" type="number" required>
            <br>

            <label for="">Meta Mensal Total:</label>
            <br>
            <input name="metaMensal" type="number" required>
            
            <br><br>
            <button name="btnCalc" class="btnCalc">Calcular</button>
            
        </form>
    </section>

    <section class="codeSection">

    <h1 style="font-size: 60px;">Resultado:</h1>

        <?php
            if (isset($_GET['btnCalc'])) {

                $name = $_GET["name"];
                $metaSemanal1 = $_GET["semana1"];
                $metaSemanal2 = $_GET["semana2"];
                $metaSemanal3 = $_GET["semana3"];
                $metaSemanal4 = $_GET["semana4"];
                $metaMensal = $_GET["metaMensal"];
                $metaMensaltotal = 0;
                $salarioMinimo = 1927.02;
                $metaSemanal = 20000;
                $bonificacaoSemanal1 = 0;
                $excedenteSemanal1 = 0;
                $bonificacaoSemanal2 = 0;
                $excedenteSemanal2 = 0;
                $bonificacaoSemanal3 = 0;
                $excedenteSemanal3 = 0;
                $bonificacaoSemanal4 = 0;
                $excedenteSemanal4 = 0;
                $bonificacaoMensal = 0;
                $excedenteMensal = 0;
            
                if ($metaSemanal1 >= $metaSemanal) {
                    $bonificacaoSemanal1 = $metaSemanal * 0.01;
                }
                if($metaSemanal1 > $metaSemanal){
                    $excedenteSemanal1 = $metaSemanal1 - $metaSemanal;
                    $bonificacaoSemanal1 = $excedenteSemanal1 * 0.05;
                }
                if ($metaSemanal2 >= $metaSemanal) {
                    $bonificacaoSemanal2 = $metaSemanal2 * 0.01;
                }
                if($metaSemanal2 > $metaSemanal){
                    $excedenteSemanal2 = $metaSemanal2 - $metaSemanal;
                    $bonificacaoSemanal2 = $excedenteSemanal2 * 0.05;
                }
                if ($metaSemanal3 >= $metaSemanal) {
                    $bonificacaoSemanal3 = $metaSemanal3 * 0.01;
                }
                if($metaSemanal3 > $metaSemanal){
                    $excedenteSemanal3 = $metaSemanal3 - $metaSemanal;
                    $bonificacaoSemanal3 = $excedenteSemanal3 * 0.05;
                }
                if ($metaSemanal4 >= $metaSemanal) {
                    $bonificacaoSemanal4 = $metaSemanal4 * 0.01;
                }
                if($metaSemanal4 > $metaSemanal){
                    $excedenteSemanal4 = $metaSemanal4 - $metaSemanal;
                    $bonificacaoSemanal4 = $excedenteSemanal4 * 0.05;
                }
            
                $metaSemanalTotal = $metaSemanal1 + $metaSemanal2 + $metaSemanal3 + $metaSemanal4;
                $metaMensaltotal = $metaSemanalTotal ;
            
                if ($metaMensaltotal > 80000) {
                    $excedenteMensal = $metaMensaltotal - 80000;
                    $bonificacaoMensal = $excedenteMensal * 0.10;
                }
            
                $salarioFinal = $salarioMinimo + $bonificacaoSemanal1 + $bonificacaoSemanal2 + $bonificacaoSemanal3 + $bonificacaoSemanal4 + $bonificacaoMensal;
            
                echo "<h3>Salário Base: R$ $salarioMinimo</h3>";
                echo "<h3>Bônus por Meta Semanal: R$ " . number_format($bonificacaoSemanal1 + $bonificacaoSemanal2 + $bonificacaoSemanal3 + $bonificacaoSemanal4, 2) . "</p>";
                echo "<h4>Bônus por Meta Mensal: R$ " . number_format($bonificacaoMensal, 2) . "</h3>";
                echo "<h3>Excedente da Meta Semanal: R$ " . number_format($excedenteMensal, 2) . "</h3>";
                echo "<br>";
                echo "<h2>Salário Final: R$ " . number_format($salarioFinal, 2) . "</h2>";
            }
        ?>

    </section>
    
</body>
</html>