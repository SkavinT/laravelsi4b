@extends('layout.main')

@section('title','Mahasiswa')
    
@section('content')
    <h1>UMDP</h1>
    <h2>Mahasiswa</h2>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Mahasiswa</h4>
                <p class="card-description">
                  List data Mahasiswa
                </p>
                {{-- Tombol Tambah --}}
                <a href="{{ route('mahasiswa.create') }}" class="btn btn-rounded btn-primary">Tambah</a>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Nama Mahasiswa</th>
                        <th>Npm</th>
                        <th>Alamat</th>
                        <th>Tempat lahir</th>
                        <th>Tanggal lahir</th>
                        <th>Program Studi</th>
                        <th>Url Foto</th>
                      </tr>
                    </thead>
                    <tbody>
                        
                        @foreach ($mahasiswa as $item)
                        <tr>
                            <td>{{ $item ["nama"] }} </td>
                            <td>{{ $item ["npm"] }}</td>
                            <td>{{ $item ["alamat"] }} </td>
                            <td>{{ $item ["tempat_lahir"] }} </td>
                            <td>{{ $item ["tanggal_lahir"] }} </td>
                            <td>{{ $item ["prodi"] ["nama"]}}</td>
                            <td>{{ $item ["url_foto"]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
    </div>
@if (session('Success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>   
  <script>
      Swal.fire({
        title: "Good job!",
        text: "{{session('Success')}}",
        icon: "success"
    });
  </script>
@endif

@endsection