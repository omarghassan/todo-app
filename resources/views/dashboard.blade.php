@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span>Dashboard</span>
                    <form method="POST" action="{{ url('/logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-danger">Logout</button>
                    </form>
                </div>

                <div class="card-body">
                    <h5>Welcome, {{ session('user')->full_name }}</h5>
                    <p>Email: {{ session('user')->email }}</p>
                    <p>Gender: {{ session('user')->gender }}</p>
                    <p>Age Group: {{ session('user')->age_group }}</p>
                    <p>Education: {{ session('user')->education_level }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection