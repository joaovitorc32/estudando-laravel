<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     public function index()
     {  
         $products = ['Product 1', 'Product2', 'Product 3'];
         return $products;
     }

     public function show($id)
     { 
        return "Exibindo o produto de id: $id";
     }

     public function create()
     { 
        return "Exibindo o form de cadastro de um novo produto";
     }

     public function edit($id)
     { 
        return "Editando o produto $id";
     }

     public function store()
     { 
        return "Cadastrando um novo produto";
     }

     public function update($id)
     { 
        return "Atualizando o produto $id";
     }

     public function destroy($id)
     { 
        return "Deletando o produto $id";
     }
}
