@extends('Layout\base')

@section('content')

<div class="row">
    <div class="col">
        <h1>New Expenses for {{ $expense_report->title }}</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_report/{{ $expense_report->id }}" class="btn btn-secondary">Back</a>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                       <li>{{ $error }}</li> 
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="POST" action="/expense_report/{{ $expense_report->id }}/expense">
            @csrf
            <div class="form-group">
                <label for="description">Description:</label>
                <input class="form-control" type="text" id="description" name="description" placeholder="Typing a description for this expense..." value="{{ old('description') }}">
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input class="form-control" type="text" id="amount" name="amount" placeholder="A amount for this expense" value="{{ old('amount') }}">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">submit</button>
        </form>
    </div>
</div>
    
@endsection