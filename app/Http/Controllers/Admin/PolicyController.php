<?php

namespace App\Http\Controllers\Admin;

use App\customers;
use App\policy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PolicyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $policy = policy::where('users_id', $id)->get();
         return view('admin.policy.index',[
             'policys' => $policy
         ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Auth::user()->id;
        $customers = customers::where('users_id', 1)->get();

        return view('admin.policy.add',[
            'data' => new policy,
            'id' => $id,
            'customers' => $customers,
            'array' => []
        ]);
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
            'num_poliza'    => 'required|numeric',
            'fecha_inicio'  => 'required|date',
            'fecha_final'   => 'required|date',
            'customers_id'  => 'required',
            'aseguradora'   => 'required|max:255',
            'tipo_poliza'   => 'required',
            'precio'        => 'required',
            'status'        => 'required',
        ]);

        $policy = new policy([
            'users_id'      => $request->get('users_id'),
            'num_poliza'    => $request->get('num_poliza'),
            'fecha_inicio'  =>  $request->get('fecha_inicio'),
            'fecha_final'   =>  $request->get('fecha_final'),
            'customers_id'  =>  $request->get('customers_id'),
            'insureds_id'   =>  implode(",", $request->get('insureds_id')),
            'aseguradora'   =>  $request->get('aseguradora'),
            'tipo_poliza'   =>  $request->get('tipo_poliza'),
            'precio'        =>  $request->get('precio'),
            'status'        =>  $request->get('status'),
        ]);
        $policy->save();
        return redirect()->route('policy.index')->with('message', "New Policy Added Successfully.");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\policy  $policy
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customers2 = customers::where('users_id', 1)->get();
        $policys = policy::find($id);
        return view('admin.policy.edit', [
            'data' => policy::find($id),
            'id' => Auth::user()->id,
            'array' => explode(",", $policys->insureds_id),
            'customers' => $customers2,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'num_poliza'    => 'required|numeric',
            'fecha_inicio'  => 'required|date',
            'fecha_final'   => 'required|date',
            'customers_id'  => 'required',
            'aseguradora'   => 'required|max:255',
            'tipo_poliza'   => 'required',
            'precio'        => 'required',
            'status'        => 'required',
        ]);
        $policy = policy::find($id);
        $policy->update([
            'users_id'      => $request->get('users_id'),
            'num_poliza'    => $request->get('num_poliza'),
            'fecha_inicio'  =>  $request->get('fecha_inicio'),
            'fecha_final'   =>  $request->get('fecha_final'),
            'customers_id'  =>  $request->get('customers_id'),
            'insureds_id'   =>  implode(",", $request->get('insureds_id')),
            'aseguradora'   =>  $request->get('aseguradora'),
            'tipo_poliza'   =>  $request->get('tipo_poliza'),
            'precio'        =>  $request->get('precio'),
            'status'        =>  $request->get('status'),
        ]);
        return redirect()->route('policy.index')->with('message', 'Policy Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\policy  $policy
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        policy::find($id)->delete();
        return redirect()->route('policy.index')->with('message', 'Policy Delete Successfully!');
    }
}
