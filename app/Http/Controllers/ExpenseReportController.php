<?php

namespace App\Http\Controllers;

use App\Models\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('expenseReport/index',[
            'title' => "Convencion de laravel",
            'expenseReports' => ExpenseReport::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenseReport/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'title' => 'required|min:3|max:30'
        ]);

        $report = new ExpenseReport();
        $report->title = $validData['title'];
        $report->save();

        return redirect('expense_report');
    }

    /**
     * Display the specified resource.
     *
     * @param  ExpenseReport $expensereport
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseReport $expenseReport) // Model building
    {
        return view('expenseReport/show', [
            'report' => $expenseReport
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        $report = ExpenseReport::FindOrFail($id);

        return view('expenseReport/edit', [
            'report' => $report
        ]);
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
        $report = ExpenseReport::FindOrFail($id);
        $report->title = $request->get('title');
        $report->save();

        return redirect('expense_report');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $report = ExpenseReport::FindOrFail($id);
        $report->delete();

        return redirect("expense_report");
    }

    public function confirmDelete($id)
    {
        return view("expenseReport/confirmDelete",[
            'id' => $id
        ]);
    }
}
