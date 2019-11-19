<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\file;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $ids =$id;
        return view('productoDetails',[
            'id'=> $ids,
        ]);
    }

    public function agregar()
    {
        return view('productos.agregarProducto');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product = Producto::find($id);
         $validate = $this->validate($request,[
            'name'=>'required',
            'precio'=>'required',
            'cantidad'=>'',
            'descripcion'=>'required',
            'categoria'=>'required',
            'imagen'=>''
        ]);

            $nombreproducto = $request->input('name');
            $precio = $request->input('precio');
            $cantidadd = $request->input('cantidad');
            $descripcion = $request->input('descripcion');
            $categoria = $request->input('categoria');

            $product->area_id =$categoria;
            $product->nombre =$nombreproducto;
            $product->precio_propuesto =$precio;
            $product->descripcion =$descripcion;
            $product->disponibles=$cantidadd;

             $prod = $request->file('imagen');
            if ($prod) {
                $producto_path = time().$prod->getClientOriginalName();
                Storage::disk('public')->put($producto_path, File::get($prod));
                $product->image = $producto_path;
             }

            $product->update();
            return redirect()->route('welcome')->with(['message'=>'Subido correctamente']);

    }

    public function save(Request $request)
    {
                $user = \Auth::user();
                $product = new Producto;

            $validate = $this->validate($request,[
            'name'=>'required',
            'precio'=>'required',
            'cantidad'=>'required',
            'descripcion'=>'required',
            'categoria'=>'required',
            'imagen'=>'required'
        ]);

            $nombreproducto = $request->input('name');
            $precio = $request->input('precio');
            $cantidadd = $request->input('cantidad');
            $descripcion = $request->input('descripcion');
            $categoria = $request->input('categoria');

            $product->clienta_vende =$user->id;
            $product->area_id =$categoria;
            $product->nombre =$nombreproducto;
            $product->precio_propuesto =$precio;
            $product->descripcion =$descripcion;
            $product->disponibles=$cantidadd;

             $prod = $request->file('imagen');
            if ($prod) {
                $producto_path = time().$prod->getClientOriginalName();
                Storage::disk('public')->put($producto_path, File::get($prod));
                $product->image = $producto_path;
             }

            $product->save();
            return redirect()->route('welcome')->with(['message'=>'Subido correctamente']);
    }

    public function getproducto($filename){
        $file = Storage::disk('public')->get($filename);
        return new Response($file, 200);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    $producto = Producto::find($id);
    $producto->delete();
    return redirect()->route('Productoslist')->with(['message'=>'Subido correctamente']);
    }
}
