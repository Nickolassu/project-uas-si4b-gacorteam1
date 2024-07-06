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
              <label for="user_id">Id Dokter</label>
              <input type="text" class="form-control" name="user_id" value="{{old('user_id')}}">
              @error('user_id')
              <span class="text-danger"> {{$message}} </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="spesialis">Spesialis Dokter</label>
              <input type="text" class="form-control" name="spesialis" value="{{old('spesialis')}}">
            </div>
            <div class="form-group">
              <label for="harga">Biaya 1X Cek Up</label>
              <input type="number" class="form-control" name="harga" value="{{old('harga')}}" placeholder="harga saraf, specialis bedah, ....">
            </div>
              <button type="submit" class="btn btn-primary mr-2">Simpan</button>
              <a href="{{ url('dokter.index') }}" class="btn btn-light">Batal</a>
          </form>
        </div>
    </div>
  </div>
</div>
@endsection