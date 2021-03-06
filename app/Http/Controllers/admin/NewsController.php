<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\OurNews;

class NewsController extends Controller
{
    public function __construct(OurNews $ournews)
    {
        $this->ournews = $ournews;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        try {
            $data = $this->ournews->get();
            return view('admin.news.news', ['alldata' => $data]);
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.addnews');
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
            $request->images->move(public_path('adminassets/img'), $imageName);
            $request['image'] = $imageName;
            $this->ournews->create($request->except("_token", "images"));
            return redirect()->route('admin.news');
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
            $news = OurNews::find($id);
            return view('admin.news.addnews', compact('news'));
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

                $request->images->move(public_path('adminassets/img'), $imageName);
                $request['image'] = $imageName;
            }
            $this->ournews->find($id)->update($request->except("_token", "images"));
            return redirect()->route('admin.news');
        } catch (\Exception $e) {
            return redirect()->back();
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
            $this->ournews->find($id)->delete();
            return redirect()->back();
        } catch (\Exception $e) {
            return redirect()->back();
        }
    }
}
