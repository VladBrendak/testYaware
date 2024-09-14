@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <!-- resources/views/register.blade.php -->

                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <label for="account_name">Account Name:</label>
                        <input type="text" name="account_name" required><br>
                    
                        <label for="name">Your Name:</label>
                        <input type="text" name="name" required><br>
                    
                        <label for="email">Email:</label>
                        <input type="email" name="email" required><br>
                    
                        <label for="password">Password:</label>
                        <input type="password" name="password" required><br>
                    
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" name="password_confirmation" required><br>
                    
                        <button type="submit">Register</button>
                    </form>
                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
