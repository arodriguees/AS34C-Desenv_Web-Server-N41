<?php
   $erro = null;
   $categoria = $_POST["categoria"] ?? "";
   $date = $_POST["date"] ?? "";
   $metodo = $_POST["metodo"] ?? "";
   $valor = $_POST["valor"] ?? "";
   $descricao = $_POST["descricao"] ?? "";
   $tipo = $_POST["tipo"] ?? "";
   $lancamentos;
   $id= null;