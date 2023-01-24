<h1>Listar usuarios</h1>

<?php

    $sql = "SELECT * FROM usuarios";

    $res = $conn->query($sql);

    if($res->num_rows > 0){
    echo "<table class='table table-hover table-bordered table-striped'>";

        echo "<thead>
                <th>ID</th>
                <th>NOME</th>
                <th>EMAIL</th>
                <th>DATA DE NASCIMENTO</th>
                <th>Ações</th>
            </thead>";
        echo "<tbody>";
        while($linha = $res->fetch_object()){
            echo "<tr>";
                echo "<td>".$linha->id."</td>";
                echo "<td>".$linha->nome."</td>";
                echo "<td>".$linha->email."</td>";
                echo "<td>".$linha->data_nasc."</td>";
                echo "<td>
                        <button onclick =\"location.href='?page=editar&id=".$linha->id."';\" class='btn btn-success'>Editar</button>
                        <button onclick =\"if(confirm('tem certeza que deseja excluir ?')){location.href='?page=salvar&acao=excluir&id=".$linha->id."'}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";
            echo "</tr>";
        }
        echo "</tbody>";
    echo "</table>";

    }

?>