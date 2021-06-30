<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ClientLogo;

class ClientLogoController extends Controller
{
    public function __construct(ClientLogo $logo)
    {
        $this->logo = $logo;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $logos = ClientLogo::all();
        return view('admin.clientlogo.logo', compact('logos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('admin.clientlogo.addlogo');
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $imageName = $request->images->getClientOriginalName();
            $request->images->move(public_path('assets/images/shop'), $imageName);
            $request['image'] = $imageName;
            $this->logo->create($request->except("_token", "images"));
            return redirect()->route('client.index');
        } catch (\Exception $e) {
            return redirect()->back();
        }
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
        try {
            $data = ClientLogo::find($id);
            return view('admin.clientlogo.addlogo', compact('data'));
        } catch (\Exception $e) {
            return redirect()->back();
        }
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
        try {
            if ($request->hasfile('images')) {
                $imageName = $request->images->getClientOriginalName();

                $request->images->move(public_path('assets/images'), $imageName);
                $request['image'] = $imageName;
            }
            $this->logo->find($id)->update($request->except("_token", "images"));
            return redirect()->route('client.index');
        } catch (\Exception $e) {
            return redirect()->route('client.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->logo->find($id)->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
