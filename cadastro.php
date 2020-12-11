<?php
    include("./banco/conexao.php");
?>

<?php
    $nome=$_POST['nome'];
    $idade=$_POST['idade'];
    $id_estado=$_POST['estado'];
    $id_cidade=$_POST['cidade'];

    $sql_estado="SELECT nome FROM estados WHERE id=$id_estado";
    $query=mysqli_query($con, $sql_estado);

    if(mysqli_num_rows($query)>0){
        while(($nome_estado=mysqli_fetch_assoc($query))!=null){
            $estado=$nome_estado['nome'];
        }
    }

    $sql_cidade="SELECT nome FROM cidades WHERE id=$id_cidade";
    $query=mysqli_query($con, $sql_cidade);

    if(mysqli_num_rows($query)>0){
        while(($nome_cidade=mysqli_fetch_assoc($query))!=null){
            $cidade=$nome_cidade['nome'];
        }
    }


    $sql="INSERT INTO cadastro (nome, idade, estado, cidade)
          VALUE ('$nome', $idade, '$estado', '$cidade')";

    $insert=mysqli_query($con, $sql);

    if($insert){
        echo '<h1>Cadastro feito com sucesso</h1>';
        echo '<a href="index.php">Voltar</a>';
    }else{
        echo '<h1>Falha no cadastro</h1>';
    }
?>

<?php
    include('./banco/disconnect.php');
?>
