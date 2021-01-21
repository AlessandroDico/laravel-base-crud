<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $allProducts = Product::all();

        // dd($allProducts);
        $data = [
            'products' => $allProducts,
        ];

        return view('product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {

        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $data = $request->all();
        // passandolo in ->all() mi crea un array con elementi in chiave=>valore dei dati passati dal form

        $newProduct = new Product();
        // $newProduct->brand = $request->brand;

// PRIMO METODO SCRIVENDO TUTTO "A MANO"

        // $newProduct->brand = $data['brand'];
        // $newProduct->fabric = $data['fabric'];
        // $newProduct->color = $data['color'];
        // $newProduct->size = $data['size'];
        // $newProduct->length = $data['length'];
        // $newProduct->model = $data['model'];
        // $newProduct->price = $data['price'];
        // $newProduct->save();

// SECONDO METODO CON FILL
// per usare al meglio fill devo dirgli quali dati prendere in considerazione e questo lo faccio nel model

        $newProduct->fill($data);

        $newProduct->save();

        // dd($newProduct->fill($data));
        // dd($data);
        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $singleItem = Product::find($id);

        if ($singleItem) {
            $data = [
                'item' => $singleItem,
            ];

            return view('product.show', $data);
        } else {
            abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
