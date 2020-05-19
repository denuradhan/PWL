@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You are logged in!</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> {{ Auth::user()->name }}</td>
                                <td> {{ Auth::user()->email }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <a href="/edit/{{Auth::user()->id}}" class="btn btn-primary">Edit Profile</a>
                    <a href="/hapus/{{Auth::user()->id}}" class="btn btn-danger">Delete Profile</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
