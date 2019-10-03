<?php 

    require $_SERVER["DOCUMENT_ROOT"] . "/aulaphp/model/CategoriaModel.php";

    $model = new CategoriaModel();

    $descricao = $_POST["descricao"];

    $model -> inserir($descricao);

    echo "categoria inserida com sucesso!!"

?>