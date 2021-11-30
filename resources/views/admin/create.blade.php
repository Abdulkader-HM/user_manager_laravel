@extends('layouts.app')

@section('content')
    <div class="container">
        <center>
            <h1>Create Page</h1>
        </center>
        <form method="POST" action="{{ route('dashboard.store') }}">
            @csrf
            <div class="mb-3" style="container">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3" style="container">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" aria-describedby="emailHelp" name='email'>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password">
            </div>
            <select class="form-select" name="type">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select><br><br>

            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('dashboard.index') }}" class="btn btn-success">Back</a>
        </form>
    </div>
@endsection
