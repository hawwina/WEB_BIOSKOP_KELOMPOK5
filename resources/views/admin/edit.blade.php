{{-- {{dd($admin)}} --}}
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

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Daftar Movie</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('datamovie')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('datamovie/' .$admin->id)}}" method="post">
                            @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label>movie cover</label>
                                    <input type="file" name="cover" class="form-control @error('cover') 
                                    is-invalid @enderror" value="{{ $admin->movieCover }}" autofocus required>
                                    @error('cover')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>movie title</label>
                                    <input type="text" name="title" value="{{ $admin->movieTitle }}" class="form-control @error('title') 
                                    is-invalid @enderror" autofocus>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>movie synopsis</label>
                                    <textarea name="synopsis" class="form-control @error('synopsis') 
                                    is-invalid @enderror" value="{{ $admin->movieSynopsis}}" autofocus></textarea>
                                    @error('synopsis')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>movie genre</label>
                                    <input type="text" name="genre" value="{{ $admin->movieGenre}}" class="form-control @error('genre') 
                                    is-invalid @enderror" autofocus>
                                    @error('genre')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>movie duration</label>
                                    <input type="text" name="duration" value="{{ $admin->movieDuration}}" class="form-control @error('duration') 
                                    is-invalid @enderror" autofocus>
                                    @error('duration')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>movie realdate</label>
                                    <input type="date" name="realdate" value="{{ $admin->movieRealdate}}" class="form-control @error('realdate') 
                                    is-invalid @enderror" autofocus>
                                    @error('realdate')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>movie director</label>
                                    <input type="text" name="director" value="{{ $admin->movieDirector}}"class="form-control @error('director') 
                                    is-invalid @enderror" value="{{ old('director') }}" autofocus>
                                    @error('director')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>movie actors</label>
                                    <textarea name="actors" class="form-control @error('actors') 
                                    is-invalid @enderror" value="{{ old('actors') }}" value="{{ $admin->movieActors}}" autofocus></textarea>
                                    @error('actors')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>movie Trailer</label>
                                    <textarea name="trailer" class="form-control @error('trailer') 
                                    is-invalid @enderror" value="{{ old('trailer') }}" value="{{ $admin->movieTrailer}}" autofocus></textarea>
                                    @error('trailer')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-success">Save</button>
                        </form>
                    </div>

                </div>
                
            </div>
        </div>
    </div>

</div>
@endsection