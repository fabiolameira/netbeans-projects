<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="css/bootstrap.min.css" rel="stylesheet">

<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
include("estudante.php");
$encontrado = false;

for ($x = 0; $x < sizeof($estudate); $x++) {
    if ($username == $estudate[$x]->getUsername() && $password == $estudate[$x]->getPassword()) {
        $_Session["username"] = $username;
        $encontrado = true;
        echo "Autenticado como $username" . "</br>";
        ?>
        <a class="btn btn-danger" href="logout.php">Sair</a>
        <?php
        break;
    }
}
if (!$encontrado) {
    include("index.php");
}
?>
