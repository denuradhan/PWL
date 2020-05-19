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
                <br>
                <br>
                <div class="card-deck">
                    @foreach ( $anggota as $agt)
                    <div class="card">
                        <img class="card-img-top" src="http://localhost/koperasi/uploads/barang/{{ $agt['gambar'] }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $agt['nama_barang'] }}</h5>
                            <p class="card-text">Rp. {{ $agt['harga'] }}</p>
                            <p class="card-text"><small class="text-muted">.</small></p>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- <div class="card-deck">
                    <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
