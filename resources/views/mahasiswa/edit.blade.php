@extends('layout.main')

@section('title','Ubah')
    
@section('content')
<div class="row">
    {{-- formulir tambah fakultas --}}
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Formulir ubah mahasiswa</h4>
            <p class="card-description">
              Basic form layout
            </p>
            <form method="POST" action="{{route('mahasiswa.update', $mahasiswa["id"])}}" class="forms-sample" enctype="multipart/form-data">
                @method('PUT')
                @csrf
              <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" class="form-control" name="nama" value="{{ old ('nama') ? old('nama') : $mahasiswa["nama"]}}" placeholder="Nama Mahasiswa">
                @error('nama')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="npm">Nomor Pokok Mahasiswa</label>
                <input type="text" class="form-control" name="npm" value="{{ old ('npm') ? old('npm') : $mahasiswa["npm"]}}" placeholder="Npm.." readonly>
                @error('npm')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" value="{{ old ('alamat') ? old ('alamat') : 
                $mahasiswa["alamat"]}}" placeholder="Alamat..">
                @error('alamat')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" value="{{ old ('tanggal_lahir') ? old ('tanggal_lahir') :
                 $mahasiswa["tanggal_lahir"]}}" placeholder="Tanggal lahir">
                @error('tanggal_lahir')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" value="{{ old ('tempat_lahir') ? old ('tempat_lahir') :
                 $mahasiswa["tempat_lahir"]}}" placeholder="Tanggal lahir">
                @error('tempat_Lahir')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
              </div>
              <div class="form-group">
                  <label for="url_foto">Url Foto</label>
                  <input type="file" class="form-control" name="url_foto">
                  @error('url_foto')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
              <div class="form-group">
                  <label for="prodi_id">Nama Program Studi</label>
                  <select name="prodi_id" class="form-control">
                      @foreach ($prodi as $item)
                      <option value="{{ $item['id']}}"{{(old("prodi_id") == $item["id"])? "selected" : ($mahasiswa['prodi_id'] == $item ["id"] ? "selected" : null)}}>
                          {{$item['nama']}}
                      </option>
                          
                      @endforeach
                  </select>    
                  @error('prodi_id')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
            </div>
            
              <button type="submit" class="btn btn-primary mr-2">Submit</button>
              <a href="{{url('mahasiswa')}}" class="btn btn-light"> Batal</a>
            </form>
          </div>
        </div>
      </div>
</div>
   
@endsection