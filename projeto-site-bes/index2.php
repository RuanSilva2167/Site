
<?php include(`config.php`);
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$assunto = $_POST["assunto"];
$texto = $_POST["texto"];



$conn = mysqli_connect($servidor,$dbusuario,$dbsenha,$dbname);
mysqli_select_db($conn,'$dbname');
$sql = "INSERT INTO dado_pessoal (nome,email,cpf,assunto,texto) VALUES ('$nome', '$email', '$cpf', '$assunto', '$texto' )";
if (mysqli_query($conn, $sql)) {
echo "<script>alert('Salvei seus dados !'); window.location = 'fale-conosco.php';</script>";

}else{
 echo "Deu errro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
