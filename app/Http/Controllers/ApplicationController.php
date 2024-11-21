<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
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
        // dd('Salom');

        // Dastlab, validatsiyani amalga oshiring
        $request->validate([
            'subjects' => 'required|max:255',
            'message' => 'required',
            'file_up' => 'file|mimes:jpg,png,pdf',
        ]);


           if ($request->hasFile('file_up'))
           {
            $name = $request->file('file_up')->getClientOriginalName();
            $path = $request->file('file_up')->storeAs(
                'files',
                $name,
                'public',
            );
           }

           $application = Application::create([
            'subjects' => $request->subjects,
            'message' => $request->message,
            'file_up' => $path ?? null,
            'user_id' => auth()->id(),
           ]);



           return redirect()->back()->with('success', 'Application created successfully.');
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
