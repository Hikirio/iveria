<?php

namespace App\Http\Controllers;

use App\Production;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prod = new Production();
        $production = Production::all();
        return view('admin.add', compact('prod', 'production'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Production $prod)
    {

        try {
            $prod->fill([
                'name_product' => $request->name_product,
                'description' => $request->description,
                'price' => $request->price,
                'IsEmpty' => $request->IsEmpty,
                'IsSoda' => $request->IsSoda,

            ])->save();


        } catch (\Exception $e) {
            dd($e);

        }
        return redirect('/admin/oursource');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Production $p)
    {
//        dd($p, $request);
        return view('admin.editt', compact('p'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Production $p)
    {
        $p->fill([

            'name_product' => $request->name_product,
            'description' => $request->description,
            'price' => $request->price,
            'photo'=>$request->photo,
            'IsEmpty' => $request->IsEmpty,
            'IsSoda' => $request->IsSoda,

        ])->save();
        return redirect('/admin/oursource/');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
