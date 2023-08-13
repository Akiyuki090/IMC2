<?php
    include_once("templates/header.php");
?>

<main>
    <form id="container" action="results.php" method="post">
        <label for="peso">Peso em KG:</label>
        <input type="text" id="peso" name="peso" required>
        <label for="altura">Altura em M:</label>
        <input type="text" id="altura" name="altura" required>
        <button type="submit">Calcular IMC</button>
    </form>
</main>

<?php
    include_once("templates/footer.php");
?>