<?php
$fichaUserPep = $_POST['fichaUsuarioPemex'];
$fichaEvaluado = $_POST['fichaUsuarioAEvaluar'];
$pwUserpep = $_POST['contraseñaUsuarioPemex'];

echo "<h2>Informacion recibida desde PHP</h2>";
echo "La ficha del usurio de pemex recibido es: " . $fichaUserPep . "<br/>";
echo "La ficha de usuario a evaluar recibido es: " . $fichaEvaluado . "<br/>";
echo "La contraseña de usuario de pemex es: " . $pwUserpep . "<br/>";

?>