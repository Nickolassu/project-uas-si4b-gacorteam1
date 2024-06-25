@extends('layout.main')

@section('title','Tambah Dokter')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">tambah Dokter</h4>
                  <p class="card-description">
                    Data Tambah Dokter
                  </p>
                  <form method="POST"action="{{route('dokter.store')}}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Dokter</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
                      @error('nama')
                            <span class="text-danger"> {{$message}} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="no_hp">No Telephone Dokter</label>
                      <input type="text" class="form-control" name="no_hp" value="{{old('no_hp')}}">
                    </div>
                    <div class="form-group">
                        <label for="spesialis">Specialis Dokter</label>
                        <input type="text" class="form-control" name="spesialis" value="{{old('spesialis')}}" placeholder="specialis saraf, specialis bedah, ....">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('dokter')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection