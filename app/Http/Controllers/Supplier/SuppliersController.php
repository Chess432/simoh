<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::orderBy('created_at','desc')->paginate(10);
        return view('suppliers.index')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'date' => 'required',
            'suppliers_name' => 'required',
            'item_purchased' => 'required',
            'invoice' => 'required',
            'quantity' => 'required',
            'usd' => 'required',
            'zwd' => 'required',
            'txtMessage' => 'required'
         ]);


        $supplier = new Supplier;
        $supplier->date = $request->input('date');
        $supplier->suppliers_name = $request->input('suppliers_name');
        $supplier->item_purchased = $request->input('item_purchased');
        $supplier->invoice = $request->input('invoice');
        $supplier->quantity = $request->input('quantity');
        $supplier->usd = $request->input('usd');
        $supplier->zwd = $request->input('zwd');
        $supplier->txtMessage = $request->input('txtMessage');
        $supplier->save();

        $request->session()->flash('success', 'Details have been entered.');

        return redirect()->route('supplier.supplier.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $id)
    {
        $supplier = Supplier::find($id);
        return view('suppliers.show')->with('supplier', $supplier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $supplier = Supplier::find($id);
        return view('suppliers.edit')->with('supplier', $supplier);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user, $id)
    {
        $this->validate($request, [
            'date' => 'required',
            'suppliers_name' => 'required',
            'item_purchased' => 'required',
            'invoice' => 'required',
            'quantity' => 'required',
            'usd' => 'required',
            'zwd' => 'required',
            'txtMessage' => 'required'
        ]);
        $supplier = Supplier::find($id);

        $supplier->date = $request->input('date');
        $supplier->suppliers_name = $request->input('suppliers_name');
        $supplier->item_purchased = $request->input('item_purchased');
        $supplier->invoice = $request->input('invoice');
        $supplier->quantity = $request->input('quantity');
        $supplier->usd = $request->input('usd');
        $supplier->zwd = $request->input('zwd');
        $supplier->txtMessage = $request->input('txtMessage');
        $supplier->save();

        $request->session()->flash('success', 'Details have been Updated.');

        return redirect()->route('supplier.supplier.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
