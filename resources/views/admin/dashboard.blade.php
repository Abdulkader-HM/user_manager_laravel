@extends('layouts.app')
@php
$i = 1;
@endphp

@section('content')
    <center>Dashboard <br>
        @if (Auth::user()->type == 'admin')
            <a class="btn btn-warning alert-success" href="{{ route('dashboard.create') }}">
                {{ __('create user') }}
            </a>
        @endif
    </center>
    <br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $i++ }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->type }}</td>

                    <td>
                        @if (!($user->email == "admin@admin.com" & $user->type == "admin"))
                            <form method="POST" action="{{ route('dashboard.destroy', $user->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="delete" class="btn btn alert-danger">Delete</button>
                            </form>
                    </td>
            @endif
            <td>
                <a href="{{ route('dashboard.edit', $user->id) }}" class="btn btn-secondary">Edit</a>
            </td>
            <td>
                <a href="{{ route('dashboard.show', $user->id) }}" class="btn btn-primary">Show</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <center>{{ $users->links() }}</center>

@endsection
