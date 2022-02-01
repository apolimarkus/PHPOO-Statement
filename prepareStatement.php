<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require './inc/Config.inc.php';
        $conn = new Conn();
        $nome = "Mauricio Sousa";
        $email = "mauricio@gmail.com";

        try {
            $cadastro = "INSERT INTO tbusuarios(nome, email) VALUES(:nome, :email)";
            $cadastrar = $conn->getConn()->prepare($cadastro);
            $cadastrar->bindParam(':nome', $nome, PDO::PARAM_STR);
            $cadastrar->bindParam(':email', $email, PDO::PARAM_STR);
            $cadastrar->execute();
            if($cadastrar->rowCount()):
                echo "Cadastrado com sucesso!";
            endif;
        } catch (Exception $e) {
            echo "Não foi posssivel cadastrar!";
        }

    ?>
</body>
</html>