@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="border-radius: 0">
                    <div class="card-header">{{ __('Add Income') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('store-category') }}">
                            @csrf


                            <div class="row mb-3">
                                <label for="category" class="col-md-3 col-form-label">{{ __('Category Name') }}</label>
                                <div class="col-md-9">
                                    <input id="category" type="text" class="form-control" name="category" required>
                                </div>
                            </div>


                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-3">
                                    <button type="submit" class="btn btn-primary">{{ __('Add Income Record') }}</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
