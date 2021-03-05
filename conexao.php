<?php

$conexao = pg_connect ("host=localhost dbname=CRUD1 port=5432 password=3245 user=michel");

if (!$conexao) {echo pg_last_error();}


?>