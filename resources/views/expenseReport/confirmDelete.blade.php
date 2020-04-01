@extends('Layout/base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Confirm Delete Report</h1>
    </div>
</div>
<div class="row">
    <div class="col-sm-1">
        <a href="/expense_report" class="btn btn-secondary">Back</a>
    </div>
    <div class="col-sm-1">
        <form class="" method="POST" action="/expense_report/{{$id}}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-danger" name="submit">Delete</button>
        </form>
    </div>
</div>

@endsection