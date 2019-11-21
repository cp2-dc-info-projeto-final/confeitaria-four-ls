<?php
require "Adm_Model.php";
$id_produto=$_GET['id'];
invisivel($id_produto);
header("Location: viewadm.php");