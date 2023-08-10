@php
    $incomes = app('App\Http\Controllers\IncomeController')->display();
    $incomes = app('App\Http\Controllers\ExpenseController')->display();
@endphp

<table class="table table-striped table-hover table-responsive">
    <thead>
    <tr>
        <th>#</th>
        <th>Date</th>
        <th>Description</th>
        <th>Category</th>
        <th>Income</th>
        <th>Expense</th>
        <th>Net Income</th>
    </tr>
    </thead>
    <tbody>
    @foreach($incomes as $income)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $income->date }}</td>
            <td>{{ $income->description }}</td>
            <td>{{ $income->category }}</td>
            <td>{{ $income->amount }}</td>
            <td>{{ $income->expense->amount ?? 0 }}</td>
            <td>{{ $income->amount - ($income->expense->amount ?? 0) }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
