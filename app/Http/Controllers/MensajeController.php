<?php

namespace App\Http\Controllers;

use App\Mensaje;
use Illuminate\Http\Request;
use App\Contacto;

class MensajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacto= Contacto::where('estado','habilitado')->get();
        return view('mensaje.index',compact('contacto'));
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
        $this->validate($request,[
           'body' => 'required',
           'recipient'=>'required|exists:contacto,id'
        ]);
        $mensaje= Mensaje::create([
            'sender_id'=>auth()->id(),
            'recipient_id'=>$request->recipient_id,
            'body'=>$request->body,
        ]);
//        $recipient=User::find($request->recipient_id);
//        $recipient->notify(new MensjeEnvidado($mensaje));
        return back()->with('flash','Mensaje Enviado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensaje= Mensaje::findOrFail($id);
        return view('mensaje.show',compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Mensaje $mensaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mensaje $mensaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mensaje  $mensaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mensaje $mensaje)
    {
        //
    }
}
