<?php include("config.php");
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];

$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO `dado_pessoal`(`code_cpf`, `dsc_nome_completo`, `dsc_email`) . Value ( '$cpf','$nome', '$email')";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Salvei seus dados !'); window.location = 'index.php';</script>";

}else{
 echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
