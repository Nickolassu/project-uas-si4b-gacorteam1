@extends('layout.main')

@section('title','Ubah Kunjungan')

@section('content')
<div class="row">
    <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ubah Kunjungan</h4>
                  <p class="card-description"> </p>
                    Ubah Data Kunjungan
                  <form method="POST"action="{{route('kunjungan.update', $kunjungan["id"])}}" class="forms-sample">
                    @method('Put')
                    @csrf
                    <div class="form-group">
                      <label for="tanggal_kunjungan">Tanggal Kunjungan</label>
                      <input type="date" class="form-control" name="tanggal_kunjungan" value="{{old('tanggal_kunjungan')}}">
                    </div>
                    <div class="form-group">
                      <label for="keluhan">Keluhan Pasien</label>
                      <input type="text" class="form-control" name="keluhan" value="{{old('keluhan')}}">
                    </div>
                    <div class="form-group">
                        <label for="diagnosa">Diagnosis</label>
                        <input type="text" class="form-control" name="diagnosa" value="{{old('diagnosa')}}">
                      </div>
                      <div class="form-group">
                        <label for="no_urut">No Urut Pasien</label>
                        <input type="text" class="form-control" name="no_urut" value="{{old('no_urut')}}">
                      </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('kunjungan')}}" class="btn btn-light">Batal</button>
                  </form>
                </div>
              </div>
            </div>
</div>
@endsection