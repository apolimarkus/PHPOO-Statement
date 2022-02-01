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
        $situacao = "Ativo";
        $criadoEm = "2021-09-12";
        $modEm = "2021-12-23";

        try {
            $cadastro = "INSERT INTO tbsituacaouser(nomesituacao, criadoem  , modificadoem)
            VALUES(:nomesituacao, :criadoem, :modificadoem)";
            $cadastrar = $conn->getConn()->prepare($cadastro);
            $cadastrar->bindParam(':nomesituacao', $situacao, PDO::PARAM_STR);
            $cadastrar->bindParam(':criadoem', $criadoEm, PDO::PARAM_STR);
            $cadastrar->bindParam(':modificadoem', $modEm, PDO::PARAM_STR);
            $cadastrar->execute();

            if($cadastrar->rowCount()):
                echo "Cadastro realizado com sucesso!";

            endif;
        } catch (Exception $e) {
           echo "Não foi possivel cadastrar!";
        }


    ?>
</body>
</html>