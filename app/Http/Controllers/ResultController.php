<?php

namespace App\Http\Controllers;

use App\Result;
use App\User;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['results'] = Result::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.result.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = User::orderBy('name')->get();
        return view('admin.result.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'result_title' => 'required',
            'result' => 'required',
            'status' => 'required',
        ]);

        $data['user_id'] = $request->user_id;
        $data['result_title'] = $request->result_title;
        $data['result'] = $request->result;
        $data['status'] = $request->status;


        Result::create($data);
        session()->flash('success', 'Result Create Successfully');
        return redirect()->route('result.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        $data['users'] = User::orderBy('name')->get();
        $data['result']=$result;
        return view('admin.result.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        $request->validate([
            'user_id' => 'required',
            'result_title' => 'required',
            'result' => 'required',
            'status' => 'required',
        ]);

        $data['user_id'] = $request->user_id;
        $data['result_title'] = $request->result_title;
        $data['result'] = $request->result;
        $data['status'] = $request->status;


        $result->update($data);
        session()->flash('success', 'Result Update Successfully');
        return redirect()->route('result.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        $result->delete();
        session()->flash('success', 'Result Deleted Successfully');
        return redirect()->back();
    }
}
