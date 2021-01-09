 {{-- {{dd($admin)}} --}}
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

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Edit Daftar Iklan</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('dataiklan')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('dataiklan/' .$admin->id)}}" method="post">
                            @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label>judul</label>
                                    <input type="text" name="judul" value="{{ $admin->judul }}" class="form-control @error('judul') 
                                    is-invalid @enderror" autofocus>
                                    @error('judul')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>gambar</label>
                                    <input type="file" name="uploadgambar" class="form-control @error('uploadgambar') 
                                    is-invalid @enderror" value="{{ $admin->gambar }}" autofocus required>
                                    @error('uploadgambar')
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