<?php

namespace App\Http\Controllers;

use App\Models\workers;
use App\Models\Works;
use Illuminate\Http\Request;

class WorksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Works $works)
    {
        $works=$works->orderBy("id","desc")->get();
        return view("dashboard", ["works"=> $works]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Works $works)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Works $works)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Works $works)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
    function getworkers(Request $request,$workId) {
        $workers=workers::where("work_id",$workId)->get();
        return view("workers.workers", ["workers"=> $workers]);
    }
}
