<?php
session_start();
unset( $_SESSION['usuario'] );  // irá remover apenas os dados de 'palavra'
session_destroy();
  	header('Location: ../../user/login.html');
 ?>
