@extends('layout.main')

@section('title','Ubah Dokter')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Dokter</h4>
                  <p class="card-description">
                    Data Ubah Dokter
                  </p>
                  <form method="POST"action="{{route('dokter.update', $dokter["id"])}}" class="forms-sample">
                    @method('Put')
                    @csrf
                    <div class="form-group">
                      <label for="user_id">Id Dokter</label>
                      <input type="text" class="form-control" name="user_id" value="{{old('user_id') ? old('user_id') : $dokter['user_id']}}">
                      @error('user_id')
                            <span class="text-danger"> {{$message}} </span>
                      @enderror
                    <div class="form-group">
                        <label for="spesialis">Spesialis Dokter</label>
                        <input type="text" class="form-control" name="spesialis" value="{{old('spesialis') ? old('spesialis') : $dokter['spesialis']}}" placeholder="specialis saraf, specialis bedah, ....">
                      </div>
                      <div class="form-group">
                        <label for="harga">Biaya 1X Cek Up</label>
                        <input type="number" class="form-control" name="harga" value="{{old('harga') ? old('harga') : $dokter['harga']}}">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ route('dokter') }}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection