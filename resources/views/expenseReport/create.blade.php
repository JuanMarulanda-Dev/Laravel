@extends('Layout/base')

@section('content')
<div class="row">
    <div class="col">
        <h1>New Reports</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_report" class="btn btn-secondary">Back</a>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col">
        <form class="" method="POST" action="/expense_report">
            @csrf
            <div class="form-group">
                <label for="title">title:</label>
                <input class="form-control" type="text" id="title" name="title" placeholder="Into the title...">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">submit</button>
        </form>
    </div>
</div>

@endsection