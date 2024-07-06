@extends('layout.main')

@section('title','Dokter')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Dokter</h4>
                  <p class="card-description">
                    List data Dokter
                  </p>
                  @can('create',App\dokter::class)
                  <a href="{{ route('dokter.create')}}" class="btn btn-primary">tambah</a>
                  @endcan
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Id Dokter</th>
                          <th>Spesialis</th>
                          <th>Biaya 1X Cek Up</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dokter as $item)
                        <tr>
                            <td>{{$item["user_id"]}}</td>
                            <td>{{$item["spesialis"]}}</td>
                            <td>{{$item["harga"]}}</td>

                            <td>
                              @can('delete',$item)
                              <form action="{{ route('dokter.destroy', $item["id"]) }}" method="post" style="display: inline">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-rounded btn-danger show_confirm" data-name="{{ $item["nama"]}}">Hapus</button>
                              </form>
                              @endcan
                            </td>
                            <td>
                              @can('update',$item)
                            <a href="{{ route('dokter.edit', $item["id"])}}"
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