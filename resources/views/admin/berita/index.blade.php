@extends('layouts.appadmin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="card-title">Artikel</h3>
                        </div>
                        <div class="col-md-6">
                            <a href="/artikel/create" class="btn btn-primary btn-sm float-right">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('status'))
                    <div class="alert alert-success">
                        {{session('status')}}
                    </div>
                    @endif
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Judul</th>
                                <th>Foto</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datas as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$item->judul}}</td>
                                <td>
                                    @if ($item->gambar)
                                    <img src="{{asset('storage/'.$item->gambar)}}" width="100px" />
                                    @endif
                                </td>
                                <td>
                                    <a class="btn btn-info text-white btn-sm" href="/artikel/{{ $item->id}}/edit">Edit</a>
                                    <form onsubmit="return confirm('Delete this candidate permanently ?')" class="d-inline" action="#" method="POST">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        <tfoot>
                            <tr>
                                <td colspan=10>
                                    {{$datas->appends(Request::all())->links()}}
                                </td>
                            </tr>
                        </tfoot>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection