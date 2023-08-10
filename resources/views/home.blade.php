@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border-radius: 0">
                <div class="card-header">{{ __('Income Expense Tracker') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @include('components.data-table')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
