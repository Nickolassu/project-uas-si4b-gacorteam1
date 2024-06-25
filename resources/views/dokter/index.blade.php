@extends('layout.main')

@section('title','Dokter')

@section('content')
<div class="row">
    <div class="col-lg-6 grid-margin stretch-card">
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
                          <th>Nama Dokter</th>
                          <th>No Telephone</th>
                          <th>Spesialis</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($dokter as $item)
                        <tr>
                            <td>{{$item["nama"]}}</td>
                            <td>{{$item["no_hp"]}}</td>
                            <td>{{$item["spesialis"]}}</td>
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