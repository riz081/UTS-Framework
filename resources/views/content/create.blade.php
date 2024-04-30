@extends('layouts.form')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-5">
                    <hr>         
                </div>
                <div>
                    <h3 class="text-center text-bold">Input Barang</h3>         
                    <hr>
                </div>
                <a href="{{ route('barang.index') }}" class="btn btn-dark mb-1"><i class="fas fa-house"></i></a>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('barang.store') }}" method="POST" enctype="multipart/form-data">
                        
                            @csrf

                            <div class="form-group">
                                <label class="font-weight-bold">Kode Barang</label>
                                <input type="text" class="form-control @error('kode_barang') is-invalid @enderror" name="kode_barang" value="{{ old('kode_barang') }}"  placeholder="Ex:BR-019">
                            
                                <!-- error message untuk kode_barang -->
                                @error('kode_barang')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Barang</label>
                                <input type="text" class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') }}" placeholder="Masukkan Nama Barang">
                            
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
                                    <input type="text" class="form-control harga-barang @error('harga_barang') is-invalid @enderror" name="harga_barang" value="{{ old('harga_barang') }}" placeholder="Masukkan Harga Barang">
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
                                <input type="text" class="form-control @error('deskripsi_barang') is-invalid @enderror" name="deskripsi_barang" value="{{ old('deskripsi_barang') }}" placeholder="Masukkan Deskripsi">
                            
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
                                    <option value="">Pilih Satuan</option>
                                    @foreach ($dataSatuan as $ds)
                                        <option value="{{ $ds->id }}" {{ old('satuan_id') == $ds->id ? 'selected' : '' }}>
                                            {{ $ds->nama_satuan }}
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
                            


                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
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