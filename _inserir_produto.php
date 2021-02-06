<?php

$numeroproduto = $_POST['numeroproduto'];
$nomeproduto = $_POST['nomeproduto'];
$categoria = $_POST['categoria'];
$quantidade = $_POST['quantidade'];
$fornecedor = $_POST['fornecedor'];

$sql = "INSERT INTO `estoque`( `numeroproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($numeroproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

 ?>
