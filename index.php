<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Projeto Cadastro</title>
        <script src="./js/jquery/jquery-3.5.1.js" charset="utf-8"></script>
        <script src="./js/js.js" charset="utf-8"></script>
    </head>
    <body>
        <form action="cadastro.php" method="post">
            <label>Nome</label>
            <input type="text" name="nome" id="nome">
            <br>
            <label>Idade</label>
            <input type="number" name="idade" id="idade">
            <br>
            <label>Selecione um Estado</label>
            <select id="estado" name="estado">
                <option>Selecione...</option>
                    <?php
                        include("./banco/conexao.php");


                        $sql="SELECT * FROM estados";

                        $query=mysqli_query($con, $sql);

                        if(mysqli_num_rows($query)>0){
                            while(($resultado=mysqli_fetch_assoc($query))!=NULL){

                                echo "
                                    <option value='".$resultado['id']."'>".$resultado['nome']."</option>
                                ";
                            }
                        }else{
                            echo mysqli_error($con);
                        }

                        include('./banco/disconnect.php');
                    ?>
            </select>

            <div id="cidade">

            </div>

            <input type="submit" value="Cadastrar">
            
        </form>
    </body>
</html>
