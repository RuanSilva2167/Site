<?php
include "config.php";

if (isset($_POST["BtCadastrar"])) {
    $code_assunto = $_POST["codigo"];
    $nome_assunto = $_POST["assunto"];
}
    if ($_GET["Acao"]=="Cadastrar") {
        $sql = "INSERT INTO bandeira (cod_assunto,dsc_assunto) "
                . "VALUES ('$code_assunto','$nome_assunto')";
    }
    mysqli_query($conn, $sql);
                var_dump($result);
  
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="css/cor-da-barra.css" rel="stylesheet" type="text/css"/>
    <title>Document</title>
</head>

<body>
<header class="jumbotron">
    <h1>Painel Adminsitrativo</h1>
</header>
    <div class="container">
       <<fieldset class="col-md-6">
            <legend>Insira os dados</legend>
            
             <div class="form-group">
                <label for="codigo">Codigo do assunto</label>
                <input type="number" class="form-control" id="codigo" name="codigo" method="post" action="fale-conosco.php?Acao=<?if (isset($_POST["BtCadastrar"])) {echo "Cadastrar";}?>"          </div>
                     <div class="form-group">
                <label for="assunto">Assunto</label>
                <input type="text" class="form-control" id="assunto" name="assunto" >
            </div>
            <br>
            <input type="submit" value="<?php if (isset($_GET["CodAlterar"])) { echo "Alterar"; } else { echo "Cadastrar"; } ?>" id="BtCadastrar" name="BtCadastrar" />
        </form>
    </div>


    <div class="container"  id="color">
        <div class="row">
            <div class="col-sm-2">
                <strong>Codigo</strong>
            </div>
            <div class="col-sm-4">
                <strong>Assunto</strong>
            </div>
                    <?php
        while ($row = mysqli_fetch_assoc($result)) {

        ?>
            <div class="row" >
                <div class="col-sm-2">
                    <?php echo ($row["cod_assunto"]); ?>
                </div>
                <div class="col-sm-4">
                    <?php echo ($row["dsc_assunto"]); ?>
                </div>
            
            </div>
        <?php } ?>
    </div>

</body>

</html>