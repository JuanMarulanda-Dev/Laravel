@extends('Layout\base')

@section('content')

<div class="row">
    <div class="col">
        <h1>Confirm Send Report</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_report/{{ $id }}" class="btn btn-secondary">Back</a>
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
        <form method="POST" action="/expense_report/{{ $id }}/sendEmail">
            @csrf
            <div class="form-group">
                <label for="description">Email:</label>
                <input class="form-control" type="email" id="email" name="email" placeholder="Typing the email where send report..." value="{{ old('email') }}", required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">submit</button>
        </form>
    </div>
</div>
    
@endsection