@extends('layouts.app')

@section('content')
<center><h1>Edit Page</h1></center>
<form method="POST" action="{{ route('dashboard.update',$user[0]->id) }}">
    @csrf
    @method('PUT')
    <div class="mb-3" style="container">
        <label  class="form-label">Name</label>
        <input type="text" class="form-control" name="name" placeholder="{{ $user[0]->name }}"  >
      </div>
    <div class="mb-3" style="container">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control"  aria-describedby="emailHelp" name='email' placeholder="{{ $user[0]->email }}">
    </div>
    {{-- <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="text" class="form-control" name="password" value="{{ $user[0]->password }}">
    </div> --}}
    <select class="form-select" name="type" >
        <option value="user">User</option>
        <option value="admin">Admin</option>
      </select><br><br>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('dashboard.index') }}" class="btn btn-dark" >Back</a>
  </form>

@endsection
