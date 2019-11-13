<?php 

 function getConnection() {
    //Dados do banco de dados
    define("DB_HOST", "localhost");
    define("DB_NAME", "confeitariafourls");
    define("DB_USER", "root");
    define("DB_PASS", "");

    //Conexao com Banco de Dados
    return new PDO('mysql:host=localhost;dbname=confeitariafourls',"root","");
 }
