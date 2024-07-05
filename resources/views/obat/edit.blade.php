@extends('layout.main')

@section('title','Ubah Obat')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Obat</h4>
                  <p class="card-description">
                    Ubah Data Obat
                  <form method="POST"action="{{route('obat.update', $obat["id"])}}" class="forms-sample">
                    @method('Put')
                    @csrf
                    <div class="form-group">
                      <label for="nama_obat">Nama Obat</label>
                      <input type="text" class="form-control" name="nama_obat" value="{{old('nama_obat') ? old('nama_obat') : $obat['nama_obat']}}">
                    </div>
                    <div class="form-group">
                      <label for="deskripsi">Deskripsi Obat</label>
                      <input type="text" class="form-control" name="deskripsi" value="{{old('deskripsi') ? old('deskripsi') : $obat['deskripsi']}}">
                    </div>
                    <div class="form-group">
                        <label for="stok">Stok Obat</label>
                        <input type="text" class="form-control" name="stok" value="{{old('stok') ? old('stok') : $obat['stok']}}">
                      </div>
                      <div class="form-group">
                        <label for="dosis">Dosis Obat</label>
                        <input type="text" class="form-control" name="dosis" value="{{old('dosis') ? old('dosis') : $obat['dosis']}}">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('obat')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection