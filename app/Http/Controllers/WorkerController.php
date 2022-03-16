<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;

class WorkerController extends Controller
{
    public function index()
    {
        $workers = worker::all();
        return view('workers.index', ["workers" => $workers]);
    }
    public function create(Request $request)
    {
        $worker = $request->all();
        worker::create($worker);
        return redirect('dolgozok');
    }
    public function show($id)
    {
        $worker = worker::find($id);
        return view('workers.show', ["worker" => $worker]);
    }
    public function update(Request $request, worker $worker)
    {
        $worker->update([
            'name' => request('name'),
            'city' => request('city'),
            'birthdate' => request('birthdate'),
            'salary' => request('salary')
        ]);
        return redirect('dolgozok/' . $worker->id);
    }
    public function delete($id)
    {
        worker::destroy($id);
        return redirect('dolgozok');
    }
}
