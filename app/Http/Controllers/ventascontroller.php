<?php

namespace App\Http\Controllers;
use App\Venta;
use Illuminate\Http\Request;

class ventascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('productos.productoComprado');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function savedatos(Request $request)
    {


        $ventas = new Venta;
        $validate = $this->validate($request,[
            'producto_id'=>'required',
            'Fecha'=>'required',
            'quien_vendio'=>'required',
            'precio_venta'=>'required',
            'comprador'=>'required',
        ]);

            $producto_id = $request->input('producto_id');
            $Fecha = $request->input('Fecha');
            $quien_vendio = $request->input('quien_vendio');
            $precio_venta = $request->input('precio_venta');
            $comprador = $request->input('comprador');

            $ventas->producto_id = $producto_id;
            $ventas->Fecha = $Fecha;
            $ventas->quien_vendio = $quien_vendio;
            $ventas->precio_venta = $precio_venta;
            $ventas->comprador = $comprador;
            $ventas->save();
            //var_dump($ventas);
            return redirect()->route('welcome')->with(['message'=>'Subido correctamente']);


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
