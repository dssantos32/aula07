<!-- Aluno/RGM: Deigivan de Sousa Santos - 123.888
Curso: Engenharia de Software 
Semestre: 6º semnestre - Aula 07.
Polo: Alto Aparnaiba - MA -->
<!DOCTYPE html>
<html>
  <head>
    <title>Calculo de IMC</title>
  </head>
  <body>
    <h1>Calculo de IMC</h1>
    <?php
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST["peso"];
        $altura = $_POST["altura"];

        $imc = $peso / ($altura * $altura);
        echo "<p>Seu IMC é: " . number_format($imc, 2) . "</p>";

        if ($imc < 18.5) {
          echo "<p>Você está abaixo do peso ideal.</p>";
        } elseif ($imc >= 18.5 && $imc < 25) {
          echo "<p>Parabéns! Você está em seu peso normal.</p>";
        } elseif ($imc >= 25 && $imc < 30) {
          echo "<p>Você está acima de seu peso (sobrepeso).</p>";
        } elseif ($imc >= 30 && $imc < 35) {
          echo "<p>Você está com obesidade grau I.</p>";
        } elseif ($imc >= 35 && $imc < 40) {
          echo "<p>Você está com obesidade grau II.</p>";
        } else {
          echo "<p>Você está com obesidade grau III (obesidade mórbida).</p>";
        }
      }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <label for="peso">Peso (em kg):</label>
      <input type="number" name="peso" id="peso" required>
      <br><br>
      <label for="altura">Altura (em metros):</label>
      <input type="number" step="0.01" name="altura" id="altura" required>
      <br><br>
      <input type="submit" value="Calcular IMC">
    </form>
  </body>
</html>
