@extends('admin.main')

@section('title')
@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Studios</h1>
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
                    <strong>Daftar Studios</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('datastudio/addstudio')}}" class="btn btn-success btn-sm">
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
                            <th>id Theaters</th>
                            <th>Name studio</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($datastudios as $item)
                            <tr>
                             <td>{{ $loop->iteration }}</td>  
                             <td>{{ $item->id }}</td>
                             <td>{{ $item->Theater_id }}</td>
                             <td>{{ $item->namaStudio }}</td> 
                             
                             <td class="text-center">
                                <a href="{{ url('datastudio/editstudio/' .$item->id) }}" class="btn btn-primary btn-sm">
                                     <i class="fa fa-pencil"></i>
                                 </a>
                                 <form action="{{ url('datastudio/' .$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Mau Hapus Data? Ciyus?')">
                                     @method('delete')
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