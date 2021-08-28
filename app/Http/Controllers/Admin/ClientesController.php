<?php

namespace App\Http\Controllers\Admin;

use App\customers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::user()->id;
        $customer = customers::where('users_id', $id)->get();
        return view('admin.customers.index', [
            'clientes' => $customer

        ]);
    }
    public function create()
    {
        return view('admin.customers.add',['data' => new customers, 'id' => Auth::user()->id ]);
    }

    public function store(Request $request){


        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:50',
        ]);

        $customer = new customers([
            'users_id' => $request->get('users_id'),
            'name'     => $request->get('name'),
            'phone'    => $request->get('phone'),
            'email'    => $request->get('email')
        ]);
        $customer->save();
        return redirect()->route('customers.index')->with('message','New Customer Added Successfully.');
    }

    public function edit($id)
    {
        return view('admin.customers.edit', [
            'data' => customers::find($id),
            'id' => Auth::user()->id
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|numeric',
            'email' => 'required|email|max:50',
        ]);

        $customer = customers::find($id);
        $customer->update($request->all());

        return redirect()->route('customers.index')->with('message', 'Customer Update Successfully');
    }
    public function delete($id)
    {
        customers::find($id)->delete();
        return redirect()->route('customers.index')->with('message', 'Customer Delete Successfully!');
    }

}
