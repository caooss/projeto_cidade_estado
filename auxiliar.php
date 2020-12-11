<?php
    include("./banco/conexao.php");

    $id=$_POST['id'];
    $id=number_format($id);

    $sql="SELECT id, nome, id_estado FROM cidades WHERE id_estado='".$id."'";

    $query=mysqli_query($con, $sql);

        if(mysqli_num_rows($query)>0){
            echo '<label>Selecione uma Cidade </label>';
            echo '<select name="cidade">';
                while(($registro=mysqli_fetch_assoc($query))!=NULL){
                    echo "<option value='".$registro['id']."'>".$registro['nome']."</option>";
                }
            echo '</select>';
        }
?>
