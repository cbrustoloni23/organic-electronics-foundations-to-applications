<?PHP
session_start();
unset($_SESSION["username"]);
unset($_SESSION["legiuser"]);
header('Location: index.php');
exit;
?>
