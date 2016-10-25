<?php 
$page = str_replace(array('/projekty/blu2/', '.php', '?pg='), '', $_SERVER['REQUEST_URI']);
  $page = $page ? $page : 'default';
