@extends('layout.main')

@section('title','Tambah Pasien')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah Pasien</h4>
                  <p class="card-description">
                    Data Tambah Pasien
                  <form method="POST"action="{{route('pasien.store')}}" class="forms-sample">
                    @csrf
                    <div class="form-group">
                      <label for="nama">Nama Pasien</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}">
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
                        <input type="text" class="form-control" name="no_hp" value="{{old('no_hp')}}">
                      </div>
                      <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir Pasien</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{old('tanggal_lahir')}}">
                      </div>
                      <div class="form-group">
                        <label for="alamat">Alamat Pasien</label>
                        <input type="text" class="form-control" name="alamat" value="{{old('alamat')}}">
                      </div>    
                      <div class="form-group">
                        <label for="dokter_id">Dokter_Id</label>
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
                        <label for="kunjungan_id">Kunjungan_Id</label>
                        <select name="kunjungan_id"
                        class="form-control">
                              @foreach($kunjungan as $item)
                                  <option value="{{ $item['id']}}">
                                      {{ $item['tanggal_kunjungan']}}
                                  </option>
                              @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="obat_id">Obat_Id</label>
                        <select name="obat_id"
                        class="form-control">
                              @foreach($obat as $item)
                                  <option value="{{ $item['id']}}">
                                      {{ $item['nama_obat']}}
                                  </option>
                              @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" value="{{old('harga')}}">
                      </div>

                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('dokter')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection