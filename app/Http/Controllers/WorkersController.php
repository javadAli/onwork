<?php

namespace App\Http\Controllers;

use App\Models\workers;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(workers $works)
    {

        $workers=workers::all();
        return response()->json(['workers'=>$workers]);

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
        $name=$request->name;
        $workeraddress=$request->address;
        $workerphone=$request->workerphone;
        $work_id=$request->work_id;
        $created_at=now();
        $worker=workers::create([
                            "name"=>"$name",
                            "workeraddress"=>"$workeraddress",
                            "workerphone"=>"$workerphone",
                            "work_id"=>$work_id,
                            "created_at"=>$created_at
                        ]);
        return response()->json(['worker'=>$worker]);
    }

    /**
     * Display the specified resource.
     */
    public function show(workers $workers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(workers $workers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, workers $workers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(workers $workers)
    {
        //
    }
}
