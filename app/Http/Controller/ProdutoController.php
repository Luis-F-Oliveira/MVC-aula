<?php

namespace App\Http\Controller;

require 'C:\xampp\htdocs\mvc\app\Model\ProdutoDAO.php';

use App\Model\ProdutoDAO;

class ProdutoController
{
    public function index()
    {
        //
    }

    /**
     * Salva o produto no banco de dados
     * 
     * @param $produto
     */
    public function store($produto)
    {
        $produtoDAO = new ProdutoDAO();

        return $produtoDAO->store($produto);
    }
}
