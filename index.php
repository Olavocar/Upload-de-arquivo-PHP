<?php

//upload de arquivos em php

if(isset($_POST['submit'])){
    
    $arquivo = $_FILES['file'];

    $arquivoNovo = explode('.', $arquivo['name']);
    if($arquivoNovo[sizeof($arquivoNovo)-1] != 'jpg' ){
        die('tipo de arquivo errado');
    } else{
        echo 'Upload feito com sucesso';
        move_uploaded_file($arquivo['tmp_name'], 'uploads/' . $arquivo['name']);
    }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"/>
        <br>
        <input type="submit" name="acao" value="enviar">
</form>    
</body>
</html>