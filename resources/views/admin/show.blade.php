@extends('layouts.app')

@section('content')
    <center>
        <h1>Show Page</h1>
    </center>
    <center>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title colored">Details</h5>
                <table>
                    <tr>
                        <th>Name </th>
                        <th>:</th>
                        <td>
                            <p class="card-text">{{ $user[0]->name }}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Email </th>
                        <th>:</th>
                        <td>
                            <p class="card-text">{{ $user[0]->email }}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <th>:</th>

                        <td>
                            <p class="card-text"> {{ $user[0]->type }}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>Creating Time</th>
                        <th>:</th>
                        <td>
                            <p class="card-text">{{ $user[0]->created_at }}</p>
                        </td>
                    </tr>

                </table>
                <a href="{{ route('dashboard.edit', $user[0]->id) }}" class="btn btn-danger"> Edit</a>
                <a href="{{ route('dashboard.index') }}" class="btn btn-dark">Back</a>
            </div>
        </div>
    </center>
@endsection
