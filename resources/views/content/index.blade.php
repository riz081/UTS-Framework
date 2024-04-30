@extends('welcome.master')

@section('title', 'Rizqika Ibnu - UTS')

@section('content')
<body style="background: rgb(222, 217, 217)">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-5">
                    <hr>         
                </div>
                <div>
                    <h3 class="text-center text-bold">Data Barang</h3>         
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <a href="{{ route('barang.create') }}" class="btn btn-md btn-success mb-3"><i class="fas fa-plus"></i> Tambah Barang</a>
                        <table class="table table-bordered">
                            <thead class="text-center">
                              <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Kode Barang</th>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga Barang</th>
                                <th scope="col">AKSI</th>
                              </tr>
                            </thead>
                            <tbody>
                              @forelse ($dataBarang as $data)
                                <tr>
                                    <td class="text-center">{{ $loop->iteration }}</td>
                                    <td>{{ $data->kode_barang }}</td>
                                    <td>{{ $data->nama_barang }}</td>
                                    <td>Rp. {{ number_format($data->harga_barang, 0, ',', '.') }}</td>
                                    <td class="text-center">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang.destroy', $data->id) }}" method="POST">
                                            <a href="{{ route('barang.show', $data->id) }}" class="btn btn-sm btn-dark"><i class="fas fa-eye"></i></a>
                                            <a href="{{ route('barang.edit', $data->id) }}" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                              @empty
                                  <div class="alert alert-danger">
                                      Data Barang belum Tersedia.
                                  </div>
                              @endforelse
                            </tbody>
                        </table>
                        <!-- Pagination Information -->
                        <div class="text-center">
                            <p>
                                Showing {{ $dataBarang->firstItem() }} to {{ $dataBarang->lastItem() }} of {{ $dataBarang->total() }} entries
                            </p>
                            <!-- Previous Page Button -->
                            @if ($dataBarang->previousPageUrl())
                            <a href="{{ $dataBarang->previousPageUrl() }}" class="btn btn-sm btn-primary mr-2">&laquo; Previous</a>
                            @endif

                            <!-- Next Page Button -->
                            @if ($dataBarang->nextPageUrl())
                            <a href="{{ $dataBarang->nextPageUrl() }}" class="btn btn-sm btn-primary">Next &raquo;</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>

</body>

@endsection

@section('footer')
<div class="container">
    <h3>Rizqika Ibnu K</h3>
    <p>"And whoever wants to escape them are themselves nothing. The pursuit of great bodily work is often chosen and greatly enjoyed."</p>
    <div class="social-links">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
    </div>
    <div class="copyright">
        &copy; Copyright <strong><span>Budi</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
</div>
@endsection
