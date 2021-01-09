@extends('admin.main')

@section('title')
@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Movie</h1>
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
                    <strong>Daftar Movie</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('datamovie/add')}}" class="btn btn-success btn-sm">
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
                            <th>movie cover</th>
                            <th>movie title</th>
                            <th>movie synopsis</th>
                            <th>movie genre</th>
                            <th>movie duration</th>
                            <th>movie realdate</th>
                            <th>movie director</th>
                            <th>movie actors</th>
                            <th>movie trailer</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftar_movies as $item)
                            <tr>
                             <td>{{ $loop->iteration }}</td>  
                             <td>{{ $item->id }}</td> 
                             <td>{{ $item->upload }}</td>
                             <td>{{ $item->movieTitle }}</td>
                             <td>{{ $item->movieSynopsis}}</td>
                             <td>{{ $item->movieGenre }}</td>
                             <td>{{ $item->movieDuration }}</td>
                             <td>{{ $item->movieRealdate }}</td>
                             <td>{{ $item->movieDirector }}</td>
                             <td>{{ $item->movieActors }}</td>
                             <td>{{ $item->movieTrailer}}</td>
                             
                             <td class="text-center">
                                <a href="{{ url('datamovie/edit/' .$item->id) }}" class="btn btn-primary btn-sm">
                                     <i class="fa fa-pencil"></i>
                                 </a>
                                 <form action="{{ url('datamovie/' .$item->id) }}" method="post" class="d-inline" onsubmit="return confirm('Yakin Mau Hapus Data? Ciyus?')">
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