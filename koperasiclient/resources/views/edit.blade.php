@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <a href="/user" class="btn btn-danger">Kembali</a>
            <br>
            <br>
            <form action="/edit/update" method="POST">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{$user->id}}"> <br>
            <div class="form-group">
                <label for="namamhs">Nama</label>
                <input type="text" class="form-control" required="required" name="namamhs" value="{{$user->name}}"> <br>
            </div>
            <div class="form-group">
                <label for="emailmhs">E-mail</label>
                <input type="email" class="form-control" required="required" name="emailmhs" value="{{$user->email}}"> <br>
            </div>
            <button type="submit" name="edit" class="btn btn-primary float-right">Simpan Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
