<!-- Inclusão do cabeçalho -->
<?php
  include_once("templates/header.php");

  $peso = $_POST['peso'];
  $altura = $_POST['altura'];

  $imc = round($peso / ($altura * $altura), 2);
?>

<body>
  <div class="container">
    <h1>Resultado do IMC</h1>
    <p class="result">Seu IMC é: <?php echo $imc; ?></p>

    <?php if ($imc < 18): ?>
      <p class="below-weight">Abaixo do peso</p>
    <?php elseif ($imc >= 18 && $imc < 25): ?>
      <p class="normal-weight">Peso normal</p>
    <?php elseif ($imc >= 25 && $imc < 30): ?>
      <p class="overweight">Sobrepeso</p>
    <?php else: ?>
      <p class="obese">Obesidade</p>
    <?php endif; ?>

    <a class="back-link" href="index.php">&larr; Voltar para o formulário</a>
  </div>
</body>

<!-- Inclusão do rodapé -->
<?php
  include_once("templates/footer.php");
?>
