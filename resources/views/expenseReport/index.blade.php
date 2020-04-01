@extends('Layout/base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Reports</h1>
    </div>
</div>
<div class="row">
    <div class="col">
     <a href="/expense_report/create" class="btn btn-primary">Create a new expense report</a>   
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            @foreach($expenseReports as $expensereport)
                <tr>
                    <td>{{$expensereport->id}}</td>
                    <td>{{$expensereport->title}}</td>
                    <td>{{$expensereport->created_at}}</td>
                    <td>{{$expensereport->updated_at}}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection