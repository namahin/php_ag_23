@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card" style="border-radius: 0">
                    <div class="card-header">{{ __('Add Income') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('store-income') }}">
                            @csrf

                            <input name="user_id" id="user_id" type="hidden">

                            <div class="row mb-3">
                                <label for="date" class="col-md-3 col-form-label">{{ __('Date') }}</label>
                                <div class="col-md-9">
                                    <input id="date" type="date" class="form-control" name="date" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="amount" class="col-md-3 col-form-label">{{ __('Income Amount') }}</label>
                                <div class="col-md-9">
                                    <input id="amount" type="number" class="form-control" name="amount" required>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="category" class="col-md-3 col-form-label">{{ __('Category') }}</label>
                                <div class="col-md-9">
                                    <select id="category" class="form-control" name="category">
                                        <option>Select Category</option>
                                        {{--@foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach--}}
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-3 col-form-label">{{ __('Description') }}</label>
                                <div class="col-md-9">
                                <textarea rows="4" id="description" class="form-control" name="description"
                                          required></textarea>
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Set the authenticated user's ID in the hidden input field
            const userIdInput = document.getElementById('user_id');
            const userId = {{ auth()->id() }}; // Get the user's ID using Laravel's auth() helper
            userIdInput.value = userId;
        });
    </script>

@endsection
