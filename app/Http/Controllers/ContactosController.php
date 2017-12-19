<?php

namespace App\Http\Controllers;

use App\Contacto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactosController extends Controller
{
    public function __construct(){
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacto= Contacto::where('estado','habilitado')->get();
        return view("contacto.index",["contacto"=>$contacto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacto=new Contacto();
        return view("contacto.create",["contacto"=>$contacto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacto=new Contacto($request->all());
        $contacto->nick=$request->nick;
        $contacto->celular=$request->celular;
        $contacto->email=$request->email;
        $contacto->estado="habilitado";
        $contacto->user_id= Auth::user()->id;
        if($contacto->save()){
            return redirect("/contacto");
        } else {
            return view("contacto.create",["contacto"=>$contacto]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contacto= Contacto::where('user_id',$id)->get();
        return view('contacto.show',['contacto'=>$contacto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto= Contacto::find($id);
        return view("contacto.edit",["contacto"=>$contacto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $contacto= Contacto::find($id);
        $contacto->nick=$request->nick;
        $contacto->celular=$request->celular;
        $contacto->email=$request->email;
        if($contacto->save()){
            return redirect("/contacto");
        } else {
            return view("contacto.create",["contacto"=>$contacto]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contacto  $contacto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
