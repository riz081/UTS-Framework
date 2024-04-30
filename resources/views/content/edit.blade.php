@extends('layouts.form')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div>
                <h3 class="text-center text-bold">Update Barang</h3>         
                <hr>
            </div>
            <a href="{{ route('barang.index') }}" class="btn btn-dark mb-1"><i class="fas fa-house"></i></a>
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <form action="{{ route('barang.update', $dataBarang->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label class="font-weight-bold">Kode Barang</label>
                            <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" name="kode_barang" value="{{ old('kode_barang', $dataBarang->kode_barang) }}">
                            
                            <!-- error message untuk kode_barang -->
                            @error('kode_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nama Barang</label>
                            <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang', $dataBarang->nama_barang) }}">
                            
                            <!-- error message untuk nama_barang -->
                            @error('nama_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Harga Barang</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" class="form-control harga-barang @error('harga_barang') is-invalid @enderror" name="harga_barang" value="{{ old('harga_barang', $dataBarang->harga_barang) }}">
                            </div>
                            <!-- error message untuk harga_barang -->
                            @error('harga_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Deskripsi</label>
                            <input type="text" class="form-control @error('deskripsi_barang') is-invalid @enderror" name="deskripsi_barang" value="{{ old('deskripsi_barang', $dataBarang->deskripsi_barang) }}">
                            
                            <!-- error message untuk deskripsi_barang -->
                            @error('deskripsi_barang')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Satuan</label>
                            <select class="form-control @error('satuan_id') is-invalid @enderror" name="satuan_id">
                                @foreach ($dataSatuan as $ds)
                                    <option value="{{ $ds->id }}" {{ old('satuan_id') == $ds->id ? 'selected' : '' }}>
                                        @if ($ds->id == 1)
                                            Kilogram
                                        @elseif ($ds->id == 2)
                                            Pieces
                                        @else
                                            {{ $ds->nama_satuan }}
                                        @endif
                                    </option>
                                @endforeach
                            </select>
                            
                            <!-- error message untuk satuan_id -->
                            @error('satuan_id')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        

                        <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Format input value as Indonesian Rupiah
        $('.harga-barang').on('input', function() {
            // Remove non-numeric characters
            let value = $(this).val().replace(/[^\d]/g, '');
            // Format as Rupiah
            value = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(value);
            // Update input value
            $(this).val(value);
        });
    });
</script>

@endsection