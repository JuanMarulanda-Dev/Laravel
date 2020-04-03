<div class="row">
    <div class="col">
        <h2>Summary Report {{ $report->id }}: {{ $report->title }}</h2>
    </div>
</div>
<div class="row">   
    <div class="col">
        <table>
            <th>Description</th>
            <th>Amount</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            @foreach ($report->Expenses as $expense)
                <tr>
                    <td>{{ $expense->description }}</td>
                    <td>{{ $expense->amount }}</td>
                    <td>{{ $expense->created_at }}</td>
                    <td>{{ $expense->updated_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</div>