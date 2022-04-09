<?php

namespace App\Http\Controllers;
use App\Models\tkriteria;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TkriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tkriteria = tkriteria::all();

       return view('pages.Admin.form.tkriteria',compact(
           'tkriteria'
       ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return 'hello';
        $tkriteria = new tkriteria;
        return view('pages.Admin.form.create',compact(
            'tkriteria'
         ));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $tkriteria = new tkriteria;
        $tkriteria ->parent_name = $request->parent_name;
        $tkriteria ->child_name = $request->child_name;
        $tkriteria ->save();

        return redirect('tkriteria');
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
        $tkriteria = tkriteria::find($id);
        return view('pages.Admin.form.edit',compact(
            'tkriteria'
         ));
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
        $tkriteria = tkriteria::find($id);
        $tkriteria ->parent_name = $request->parent_name;
        $tkriteria ->child_name = $request->child_name;
        $tkriteria ->save();

        return redirect('tkriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tkriteria = tkriteria::find($id);
        $tkriteria->delete();
        return redirect("tkriteria");
    }
}
