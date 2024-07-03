@extends('layout.main')

@section('title','Kunjungan')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kunjuungan</h4>
                  <p class="card-description">
                    Data Kunjungan
                  <form method="POST"action="{{route('kunjungan.store')}}" class="forms-sample">
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
                      <input type="date" class="form-control" name="tanggal_kunjungan" value="{{old('tanggal_kunjungan')}}">
                    </div>
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
                        <label for="obat_id">Obat</label>
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
                        <label for="no_urut">No Urut Pasien</label>
                        <input type="text" class="form-control" name="no_urut" value="{{old('no_urut')}}">
                      </div>
                      <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" class="form-control" name="harga" value="{{old('harga')}}">
                      </div>
                      <div class="form-group">
                        <label for="no_urut">Nomor Urut</label>
                        <input type="number" class="form-control" name="harga" value="{{old('no_urut')}}">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('dokter')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection