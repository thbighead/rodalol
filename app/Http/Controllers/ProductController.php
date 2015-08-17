<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
//	private $productModel;
//
//	public function __construct(Product $productModel)
//	{
//		$this->productModel = $productModel;
//	}
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //Listar os produtos cadastrados
        $products = \App\Product::all();

        //return view('products.index', compact('products'));
        return view('products.index')->with(['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $product = \App\Product::create(["nome",
            "categoria",
            "especificacao",
            "preco",
            "qtdEstoque"]);
        if($product->save()) {
            echo '<script type="text/javascript">alert("Cadastro efetuado com sucesso!");</script>';
        } else {
            echo '<script type="text/javascript">alert("O cadastro falhou...");</script>';
        }

        return ;// pagina de cadastro de produtos
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
