<?php

require_once "Dao.php";
$dao =new Dao();

$dao->insertlogin("aluno","senha_aluno");
$dao->listar();