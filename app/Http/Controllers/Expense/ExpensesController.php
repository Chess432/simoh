<?php

namespace App\Http\Controllers\Expense;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Expense;
use Illuminate\Http\Request;

class ExpensesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::orderBy('created_at','desc')->paginate(10);
        return view('expenses.index')->with('expenses', $expenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.create');
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
            'description' => 'required',
            'category' => 'required',
            'usd' => 'required',
            'zwd' => 'required',
            'image' => 'image|nullable|max:1999'
         ]);

         // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);
        }

        $expense = new Expense;
        $expense->date = $request->input('date');
        $expense->description = $request->input('description');
        $expense->category = $request->input('category');
        $expense->usd = $request->input('usd');
        $expense->zwd = $request->input('zwd');
       // $expense->image = $fileNameToStore;
        $expense->save();

        $request->session()->flash('success', 'Details have been entered.');

        return redirect()->route('expense.expense.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user, $id)
    {
        $expense = Expense::find($id);
        return view('expenses.show')->with('expense', $expense);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user, $id)
    {
        $expense = Expense::find($id);
        return view('expenses.edit')->with('expense', $expense);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'date' => 'required',
            'description' => 'required',
            'category' => 'required',
            'usd' => 'required',
            'zwd' => 'required',
            'image' => 'image|nullable|max:1999'
         ]);
         $expense = Expense::find($id);

         // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

            // Delete file if exists
            Storage::delete('public/images/'.$expense->image);
        }

        $expense->date = $request->input('date');
        $expense->description = $request->input('description');
        $expense->category = $request->input('category');
        $expense->usd = $request->input('usd');
        $expense->zwd = $request->input('zwd');
        if($request->hasFile('image')){
            $expense->image = $fileNameToStore;
        }
        $expense->save();

        $request->session()->flash('success', 'Details have been updated.');

        return redirect()->route('expense.expense.index');
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
