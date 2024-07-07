@extends('layout.main')

@section('title','Ubah Kunjungan')

@section('content')
<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Kunjungan</h4>
                  <p class="card-description"> </p>
                    Ubah Data Kunjungan
                  <form method="POST"action="{{route('kunjungan.update', $kunjungan["id"])}}" class="forms-sample">
                    @method('PUT')
                    @csrf

                    <div class="form-group">
                      <label for="pasien_id">Nama pasien</label>
                      <select name="pasien_id"
                      class="form-control">
                            @foreach($pasien as $item)
                                <option value="{{ $item['id']}}">
                                    {{ $item['nama']}}
                                </option>
                            @endforeach
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                      <input type="date" class="form-control" name="tanggal_kunjungan" value="{{old('tanggal_kunjungan') ? old('kunjungan') : $kunjungan['tanggal_kunjungan']}}">
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
                        <label for="jumlah">Jumlah Obat</label>
                        <input type="number" class="form-control" name="jumlah" value="{{old('jumlah')}}">
                      </div>
                      <div class="form-group">
                        <label for="diagnosa">Diagnosa</label>
                        <input type="text" class="form-control" name="diagnosa" value="{{old('diagnosa') ? old('diagnosa') : $kunjungan['diagnosa']}}">
                      </div>
                      <div class="form-group">
                        <label for="no_urut">Nomor Urut</label>
                        <input type="number" class="form-control" name="no_urut" value="{{old('no_urut') ? old('no_urut') : $kunjungan['no_urut']}}">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('kunjungan')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection