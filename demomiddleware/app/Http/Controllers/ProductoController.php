<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;
class ProductoController extends Controller
{
    //Colocamos el middleware
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['productos']=Producto::paginate(5);

        return view('producto.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validación de datos
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Precio'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'Marca'=>'required|string|max:100',
            'Distribuidora'=> 'required|string|max:100',
            'TipoProducto'=> 'required|string|max:100',
            'FechaFabricacion'=>'required|string|max:30',
            'FechaVencimiento'=>'required|string|max:30',
            'Foto'=>'required|max:10000|mimes:jpeg,png,jpg',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Foto.required'=>'La foto es requerida',
        ];

        $this->validate($request, $campos, $mensaje);
        //$datosProducto = request()->all();
        $datosProducto = request()->except('_token');

        if($request->hasFile('Foto')){
            $datosProducto['Foto']=$request->File('Foto')->store('uploads','public');
        }

        Producto::insert($datosProducto);
        //return response()->json($datosProducto);
        return redirect('producto')->with('mensaje','Producto agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $producto=Producto::findOrFail($id);
        return view('producto.edit',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Validación de datos
        $campos=[
            'Nombre'=>'required|string|max:100',
            'Precio'=>'required|string|max:100',
            'Descripcion'=>'required|string|max:100',
            'Marca'=>'required|string|max:100',
            'Distribuidora'=> 'required|string|max:100',
            'TipoProducto'=> 'required|string|max:100',
            'FechaFabricacion'=>'required|string|max:30',
            'FechaVencimiento'=>'required|string|max:30',

        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',

        ];

        if($request->hasFile('Foto')){
            $campos=['Foto'=>'required|max:10000|mimes:jpeg,png,jpg'];
            $mensaje=['Foto.required'=>'La foto es requerida'];
        };
        $this->validate($request, $campos, $mensaje);

        $datosProducto = request()->except(['_token','_method']);

        if($request->hasFile('Foto')){
            $producto=Producto::findOrFail($id);
            Storage::delete('public/'.$producto->Foto);
            $datosProducto['Foto']=$request->file('Foto')->store('uploads','public');
        }


        Producto::where('id','=',$id)->update($datosProducto);
        $producto=Producto::findOrFail($id);
        //return view('producto.edit',compact('producto'));
        return redirect('producto')->with('mensaje','Producto modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //se esta recepcionando el id del formulario del index
        $producto=Producto::findOrFail($id);

        if(Storage::delete('public/'.$producto->Foto)){
            Producto::destroy($id);
        }


        return redirect('producto')->with('mensaje','Producto eliminado');
    }
}
