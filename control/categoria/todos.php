<?php
require $_SERVER['DOCUMENT_ROOT']."/aulaphp/model/CategoriaModel.php";

$model = new CategoriaModel();

$categorias = $model->todos();

echo json_encode($categorias);
?>