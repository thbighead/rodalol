<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	private $productModel;

	public function __construct(Product $productModel)
	{
		$this->productModel = $productModel;
	}
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
	    //Listar os produtos cadastrados
	    //$products = \App\Product::all();
	    $products = $this->productModel->all();

        $products = Product::paginate(8);

        $products->setPath('produtos');

	    return view('admin.products.index')->with(['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
		return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
	    $input = $request->all();

	    //http://laravel.com/docs/5.0/validation#controller-validation
	    //Fazer a validacao dos campos
	    $this->validate($request, [
		    'nome'          => array('required', 'max:255'),
		    'categoria'     => 'required',
		    'especificacao' => 'required | max:255',
//		    'preco'         => 'required | numeric',//js.validator
		    'preco'         => array('required', 'regex:/^\d*[0-9](|,\d*[0-9])?$/'),
		    'qtdEstoque'    => 'required | numeric'

		    //array('required', 'regex:/^[0-9]{1,5}(,[0-9]{2,3})*\.[0-9]{2}$')
		    //sem decimal /^\d+(?:,\d{1,2})?$/
		    //só ponto  /^\d+(?:\.\d{2})?$/
		    //so ponto /^\d*[0-9](|,\d*[0-9])?$/
	    ]);

	    Product::Create($input);
	    return redirect()->route('ListProduto');
//	    return redirect('admin/produtos');//retorna pra pagina de listagem de produtos


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
	//Editar produto do Banco de dados
    public function edit($id)
    {
        $product = Product::find($id);

	    return view('admin.products.edit')->with(['product'=>$product]);
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
	    $product = Product::find($id)->update($request->all());
//	    $product = $this->productModel->find($id)->update($request->all());

	    return redirect()->route('ListProduto');
//	    return redirect('admin/produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
	    //apagar um produto pelo #id
        Product::find($id)->delete();

	    return redirect('admin/produtos');
    }

	//
	//FIM ADMIN
	//
    //listagem de produtos visitante/usuario
    public function produto()
    {
        $products = Product::paginate(16);

        $products->setPath('produtos');

        return view('listaProduto', ['products' => $products]);
    }

    public function productDetail($id)
    {
//	    $products = $this->productModel->all();
//	    $products = Product::find($id)->first();
//	    $products = Product::where('id','=','$id')->get();
		$product = Product::where('id', $id)->first();
//	    return view('productDetail', ['products' => $products]);
	    return view('productDetail')->with(['product' => $product]);
    }

    public function productCategory($categoria)
    {
        $product = Product::where('categoria', $categoria)->paginate(16);
//        $product = Product::find('$id');
//	    Product::paginate(10);
	    $product->setPath('');//para as outras páginas funcionarem
        return view('productCategory')->with(['product' => $product]);
    }
}
