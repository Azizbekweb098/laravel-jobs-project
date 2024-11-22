<?php

namespace App\Http\Controllers;

use App\Jobs\SengEmailJob;
use App\Mail\ApplicationCreated;
use App\Models\Application;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        // Validatsiya qilish
        $request->validate([
            'subjects' => 'required|max:255',
            'message' => 'required',
            'file_up' => 'file|mimes:jpg,png,pdf', // Faylni tekshirish
        ]);

        $path = null;
        if ($request->hasFile('file_up')) {
            $name = $request->file('file_up')->getClientOriginalName();
            $path = $request->file('file_up')->storeAs('files', $name, 'public');
        }

        $application = Application::create([
            'subjects' => $request->subjects,
            'message' => $request->message,
            'file_up' => $path,
            'user_id' => auth()->id(),
        ]);


        dispatch(new SengEmailJob($application));

        return redirect()->back()->with('success', 'Application created successfully');
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
