<?php

namespace App\Http\Controllers;

use App\Production;
use App\User;
use App\Persinfouser;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
        $test = User::all();
        $personalinfo = Persinfouser::all();

        return view('admin.tables', compact('test', 'personalinfo'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    public function edit(Persinfouser $per)
    {
        return view('admin.edit', compact('per'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persinfouser $per)
    {
//        dd($per);
//        dd($request);
        try {
//            $this->authorize('destroy', $per);
//            $this->validate($request, [
//                'id' => 'required|max:255',
//                'first_name' => 'required',
//                'second_name' => 'required',
//                'surname' => 'required',
//            ]);
            $per->fill([
//                'id' => $per->id,
                'first_name' => $request->first_name,
                'second_name' => $request->second_name,
                'surname' => $request->surname,
                'street' => $request->street,
                'numberofhome' => $request->numberofhome,
                'flat' => $request->flat,
            ])->save();


        } catch (\Exception $e) {
            return redirect('/admin/tables/');
        }
        return redirect('/admin/tables/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Persinfouser $per)
    {
//        dd($per);
        $per->delete();
        return redirect('/admin/tables');
    }
}
