<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseReport;
use App\Models\Expense;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() // esta funcionalidad la tenemos que evadir por que no se va a utilziar.
    {
        
    }

    /**
     * Show the form for creating a new resource.
     * @param ExpenseReport $expenseReport
     * @return \Illuminate\Http\Response
     */
    public function create(ExpenseReport $expenseReport)
    {
        return view('expense/create',[
            'expense_report' => $expenseReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ExpenseReport $expenseReport)
    {
        $validData = $request->validate([
            'description' => 'required|min:5|max:45',
            'amount' => 'required|min:100|max:30000|numeric',
        ]);

        $expense = new Expense();
        $expense->expense_report_id = $expenseReport->id;
        $expense->description = $validData['description'];
        $expense->amount = $validData['amount'];
        $expense->save();

        return redirect("/expense_report/$expenseReport->id");
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
