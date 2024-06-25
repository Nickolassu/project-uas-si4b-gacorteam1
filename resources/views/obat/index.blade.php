@extends('layout.main')

@section('title','Obat')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Obat</h4>
                  <p class="card-description">
                    List data obat
                  </p>
                  @can('create',App\Obat::class)
                    <a href="{{ route('obat.create')}}" class="btn btn-primary">tambah</a>
                  @endcan
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Obat</th>
                          <th>Deskripsi</th>
                          <th>Stok</th>
                          <th>Dosis</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($obat as $item)
                        <tr>
                            <td>{{$item["nama_obat"]}}</td>
                            <td>{{$item["deskripsi"]}}</td>
                            <td>{{$item["stok"]}}</td>
                            <td>{{$item["dosis"]}}</td>
                            <td>
                              @can('delete',$item)
                              <form action="{{ route('obat.destroy', $item["id"]) }}" method="post" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-rounded btn-danger show_confirm" data-name="{{ $item["nama_obat"]}}">Hapus</button>
                              </form>
                              @endcan
                            </td>
                            <td>
                              @can('update',$item)
                              <a href="{{ route('obat.edit', $item["id"])}}"
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