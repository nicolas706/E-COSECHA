<?php
require_once(__DIR__ . "/../layouts/header.php");
?>
<h1 class="text-center">NUEVA COSECHA</h1>
<form action="index.php?m=guardarCosecha" method="POST">
    <input type="number" placeholder="INGRESE AÑO:" id="año" name="año" required>
    <br>
    <input type="text" placeholder="ACTIVA (S/N):" id="activa" name="activa" required>
    <br>
    <input type="text" placeholder="INGRESE DETALLE:" id="detalle" name="detalle" required>
    <br>
    <input type="submit" class="btn" name="btn" value="GUARDAR"> <br>
</form>
<?php
require_once(__DIR__ . "/../layouts/footer.php");
?>