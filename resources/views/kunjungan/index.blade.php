@extends('layout.main')

@section('title','Kunjungan')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Kunjungan</h4>
                  <p class="card-description">
                    List data Kunjungan
                  </p>
                  @can('create',App\kunjungan::class)
                  <a href="{{ route('kunjungan.create')}}" class="btn btn-primary">tambah</a>
                  @endcan
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Tanggal Kunjungan</th>
                          <th>Keluhan</th>
                          <th>Diagnosa</th>
                          <th>No Urut</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($kunjungan as $item)
                        <tr>
                            <td>{{$item["tanggal_kunjungan"]}}</td>
                            <td>{{$item["keluhan"]}}</td>
                            <td>{{$item["diagnosa"]}}</td>
                            <td>{{$item["no_urut"]}}</td>
                            <td>
                              @can('delete',$item)
                              <form action="{{ route('kunjungan.destroy', $item["id"]) }}" method="post" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-rounded btn-danger show_confirm" data-name="{{ $item["tanggal_kunjungan"]}}">Hapus</button>
                              </form>
                              @endcan
                            </td>
                            <td>
                              @can('update',$item)
                              <a href="{{ route('kunjungan.edit', $item["id"])}}"
                                class="btn btn-sm btn-rounded btn-warning">Edit</a>
                                @endcan
                              </td>
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