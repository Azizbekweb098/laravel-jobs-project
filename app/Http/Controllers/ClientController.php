<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        // Dastlab, validatsiyani amalga oshiring
        $request->validate([
            'subjects' => 'required|max:255',
            'message' => 'required',
            'file' => 'file|mimes:jpg,png,pdf',
        ]);

        $reqestData  = $request->all();

        // Fayl yuklanganligini tekshiring va saqlang
        if($request->hasFile('file')){
            try{
                $file = $request->file('file');
                $imageName = time(). '-'. $file->getClientOriginalName();
                $file->move(public_path('files'), $imageName);
                $reqestData['file'] = $imageName;
            }catch (\Exception $e){
                return back()->withErrors(['file' => 'file yuklashda xato bor']);
            }
           }
           Application::create([
            $reqestData,
            'user_id' => auth()->user()->id,
            'subjects' => $request->subjects,
            'message' => $request->message,
            'file_url' => $path ?? null,
        ]);
        return redirect()->back();
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
