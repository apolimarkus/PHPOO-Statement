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
        $nivelAcesso = "Usuario";
        $criadoEm = '2022-01-05';
        $mod = '2022-01-28';

        try {
            $cadastro = "INSERT INTO tbnivelacesso(nomenivel,criadoem, modificadoem)
            VALUES(:nomenivel, :criadoem, :modificadoem)";
            $cadastrar = $conn->getConn()->prepare($cadastro);
            $cadastrar->bindParam(':nomenivel', $nivelAcesso, PDO::PARAM_STR);
            $cadastrar->bindParam(':criadoem', $criadoEm, PDO::PARAM_STR);
            $cadastrar->bindParam(':modificadoem', $mod, PDO::PARAM_STR);
            $cadastrar->execute();

            if($cadastrar->rowCount()):
                echo "Cadastrado com sucesso!";

            endif;
        } catch (Exception $e) {
            echo "Não foi possivel cadastrar!";
            
        }

    ?>
</body>
</html>