@extends('layout.main')

@section('title','Tambah Pasien')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Pasien</h4>
                  <p class="card-description">
                    Ubah Data Pasien
                  <form method="POST"action="{{route('pasien.update', $pasien["id"])}}" class="forms-sample">
                    @method('Put')
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Pasien</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama') ? old('nama') : $pasien['nama']}}">
                    </div>
                    <div class="form-group">
                      <label for="dokter_id">Dokter</label>
                          <select name="dokter_id"
                          class="form-control">
                                @foreach($dokter as $item)
                                    <option value="{{ $item['id']}}">
                                        {{ $item['nama']}}
                                    </option>
                                @endforeach
                          </select>
                        </div>
                    <div class="form-group">
                      <label for="kelamin">Jenis Kelamin</label>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="kelaminL" value="Laki-laki" required>
                        <label class="form-check-label" for="kelaminL">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="kelaminP" value="Perempuan" required>
                        <label class="form-check-label" for="kelaminP">
                            Perempuan
                        </label>
                    </div>
                </div>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">No Telephone Pasien</label>
                        <input type="text" class="form-control" name="no_hp" value="{{old('no_hp') ? old('no_hp') : $pasien['no_hp']}}">
                      </div>
                      <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir Pasien</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir') ? old('tanggal_lahir') : $pasien['tanggal_lahir']}}">
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat Pasien</label>
                        <input type="text" class="form-control" name="alamat" value="{{old('alamat') ? old('alamat') : $pasien['alamat']}}">
                      </div>    
                      <div class="form-group">
                        <div class="form-group">
                          <label for="keluhan">Keluhan Pasien</label>
                          <input type="text" class="form-control" name="keluhan" value="{{old('keluhan') ? old('keluhan') : $pasien['keluhan']}}">
                        </div>
                        
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('pasien')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection