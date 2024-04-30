@extends('layouts.form')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                <h3 class="text-center text-bold">Detail Barang</h3>         
                <hr>
            </div>
            <a href="{{ route('barang.index') }}" class="btn btn-dark mb-1"><i class="fas fa-house"></i></a>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <div class="text-center">
                        <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?q=80&w=1972&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Product Image" class="img-fluid rounded mb-3">
                    </div>
                    <h4 class="text-center">{{ $dataBarang->kode_barang }}</h4>
                    <p class="text-center">{{ $dataBarang->nama_barang }}</p>
                    <p class="text-center">Price: Rp {{ number_format($dataBarang->harga_barang, 0, ',', '.') }}</p>
                    <p class="text-center">{{ $dataBarang->deskripsi_barang }}</p>
                    <p class="text-center">Satuan: 
                        @if ($dataBarang->satuan_id == 1)
                            Kilogram
                        @elseif ($dataBarang->satuan_id == 2)
                            Pieces
                        @else
                            {{ $dataBarang->nama_satuan }}
                        @endif
                    </p>
                    <div class="text-center mt-4">
                        <a href="{{ route('barang.edit', $dataBarang->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('barang.destroy', $dataBarang->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
