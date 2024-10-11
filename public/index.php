<?php

require 'C:\xampp\htdocs\mvc\app\Http\Controller\ProdutoController.php';
require 'C:\xampp\htdocs\mvc\app\Model\Produto.php';

use App\Http\Controller\ProdutoController;
use App\Model\Produto;

$produtoController = new ProdutoController();
$produto = new Produto();
echo $produtoController->store($produto);