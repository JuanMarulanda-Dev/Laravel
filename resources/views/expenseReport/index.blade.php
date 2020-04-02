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
                    <td><a href="/expense_report/{{$expensereport->id}}">{{$expensereport->title}}</a></td>
                    <td>{{$expensereport->created_at}}</td>
                    <td>{{$expensereport->updated_at}}</td>
                    <td><a href="/expense_report/{{$expensereport->id}}/edit">Edit</a></td>
                    <td><a href="/expense_report/{{$expensereport->id}}/confirmDelete">Delete</a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>

@endsection