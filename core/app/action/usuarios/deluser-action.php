<?php
/**
* @author 
* @brief Eliminar un docente
**/
$p = UserData::getById($_GET["id"]);
$p->del();
Core::redir("./?view=/usuarios/users");
?>