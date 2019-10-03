<?php ob_start(); ?>

<a class="btn-floating btn-large waves-effect waves-light red modal-trigger" href="#modal">
    <i class="material-icons">add</i>
</a>


  <div id="modal" class="modal">
    <div class="modal-content">
     
      <form method="post" action="/aulaphp/control/categorias/salvar.php" id="formularioCategoria">

          <input id="codigo" name="codigo" id="codigo" type="hidden">

            <div class="row">
              <div class="input-field col s12">
                <input id="descricao" name="descricao" id="descricao" type="text">
                <label for="descricao">Descrição</label>
              </div>
            </div>

            <button class="btn waves-effect waves-light" type="submit" name="action">Salvar
              <i class="material-icons right">send</i>
            </button>

      </form>

    </div>
    
  </div>
          

<table id="tableCategoria" 
      class="responsive-table"
      data-url="control/categoria/todos.php"
      data-search="true"
      data-show-refresh="true"
      data-pagination="true"
      data-page-list="[10, 25, 50, 100, all]"
      data-show-footer="true">

        <thead>
          <tr>
              <th data-field="idcategoria">Código</th>
              <th data-field="descricao">Nome</th>
          </tr>
        </thead>

        <tbody>
         
        </tbody>
 </table>


 <?php

 $conteudo = ob_get_contents();

 ob_end_clean();

 include "layout.php";

 ?>