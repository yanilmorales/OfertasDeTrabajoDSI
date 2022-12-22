<?php

namespace App\Http\Controllers;

use App\Models\Ofert;
use Carbon\Carbon;
use DateInterval;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OfertController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // NOT IMPLEMENTED
        abort(404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("publicar_oferta",['new' => true, 'ofert' => null]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $ofert = new Ofert($request->all());

        $ofert->expiracion = match($request->planSelection){
            "free" => date_add(Carbon::now(),new DateInterval("P3D")),
            "professional" => date_add(Carbon::now(),new DateInterval("P20D")),
            "business" => date_add(Carbon::now(),new DateInterval("P1M")),
            default => $request->ftiempo
        };

        if(!$request->hasFile("logo") && !$request->file("logo")->isValid())
        {
            return response("",400); // BAD RESPONSE
        }else {
            $filepath = $request->file("logo")->store("logo", "public");
            $ofert->logo = $filepath;
        }
        
        $ofert->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ofert  $ofert
     * @return \Illuminate\Http\Response
     */
    public function show(Ofert $oferta)
    {
        return view("descripcion_trabajo", ["ofert" => $oferta]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ofert  $ofert
     * @return \Illuminate\Http\Response
     */
    public function edit(Ofert $oferta)
    {
        return view("publicar_oferta", ['new' => false, 'ofert' => $oferta]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ofert  $ofert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ofert $oferta)
    {
        if($request->hasFile("logo"))
        {
            Storage::delete($oferta->logo);
            if($request->file("logo")->empty())
            $filepath = $request->file("logo")->store("logo", "public");
            $oferta->logo = $filepath;
        }

        $oferta->fill($request->all())->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ofert  $ofert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ofert $oferta)
    {
        Storage::delete($oferta->logo);
        $oferta->delete();
    }
}
