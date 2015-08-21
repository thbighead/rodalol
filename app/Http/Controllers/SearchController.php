<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
//        if (Input::has('query')) {
//            $query = Input::get('query');
//
////            $results = Product::whereRaw("MATCH(name,content) AGAINST(? IN BOOLEAN MODE)", array($query))->remember(1440)->orderBy('id','ASC')->get();
//            $results = Product::where('nome', 'LIKE', '%')
//            if ($results->count() > 0) {
//                return view('search')->with('results',$results)->with('query', $query)->with('title', 'Search Result for '.$query);
//            } else {
//                return '<h3>Sorry, No results for ' . $query . ' </h3>';
//            }
//        }
	    
//        $searchterm = Input::get('searchinput');
//
//        if ($searchterm){
//
//            $products = DB::table('products');
//            $results = $products->where('name', 'LIKE', '%'. $searchterm .'%')
//                ->orWhere('description', 'LIKE', '%'. $searchterm .'%')
//                ->orWhere('brand', 'LIKE', '%'. $searchterm .'%')
//                ->get();
//
//            return view('search')->with('products', $results);
//
//        }


//        return Redirect::to('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
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
