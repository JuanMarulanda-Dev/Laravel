@extends('Layout/base')

@section('content')
<div class="row">
    <div class="col">
        <h1>Reports: {{ $report->title }}</h1>
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
        Details...
    </div>
</div>

@endsection