@extends('admin.main')

@section('title')
@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Iklan</h1>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Daftar Iklan</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('dataiklan/addiklan')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>id</th>
                            <th>judul</th>
                            <th>gambar</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataiklans as $item)
                            <tr>
                             <td>{{ $loop->iteration }}</td>  
                             <td>{{ $item->id }}</td> 
                             <td>{{ $item->judul }}</td>
                             <td>{{ $item->uploadgambar }}</td>
                             <td class="text-center">
                                <a href="{{ url('dataiklan/editiklan/' .$item->id) }}" class="btn btn-primary btn-sm">
                                     <i class="fa fa-pencil"></i>
                                 </a>
                                 <form action="{{ url('dataiklan/' .$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Mau Hapus Data? Ciyus?')">
                                     @method('deleteiklan')
                                     @csrf
                                     <button class="btn btn-danger btn-sm">
                                         <i class="fa fa-trash"></i>
                                     </button>
                                 </form>

                             </td>
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection