@extends('layout.main')

@section('title','Pasien')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Pasien</h4>
                  <p class="card-description">
                    List data pasien
                  </p>
                 @can('create',App\pasien::class)
                  <a href="{{ route('pasien.create')}}" class="btn btn-primary">tambah</a>
                  @endcan
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Pasien</th>
                          <th>Kelamin</th>
                          <th>Nomor telepon</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Keluhan</th>
                          <th>Tempat Lahir</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pasien as $item)
                        <tr>
                            <td>{{$item["nama_pasien"]}}</td>
                            <td>{{$item["kelamin"]["nama"]}}</td>
                            <td>{{$item["no_hp"]}}</td>
                            <td>{{$item["tanggal_lahir"]}}</td>
                            <td>{{$item["tempat_lahir"]}}</td>
                            <td>{{$item["alamat"]}}</td>
                            <td>
                              @can('delete',$item)
                              <form action="{{ route('pasien.destroy', $item["id"]) }}" method="post" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-rounded btn-danger show_confirm" data-name="{{ $item["nama"]}}">Hapus</button>
                              </form>
                              @endcan
                            </td>
                            @can('update',$item)
                            <td>
                              <a href="{{ route('pasien.edit', $item["id"])}}"
                                class="btn btn-sm btn-rounded btn-warning">Edit</a>
                              </td>
                            @endcan
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
@endsection