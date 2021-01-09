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

        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Tambah Studios</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('datastudio')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('datastudio' ) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>id Theater</label>
                                <input type="text" name="Theater_id" class="form-control @error('Theater_id') 
                                is-invalid @enderror" autofocus>
                                @error('Theater_id')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>nama studio</label>
                                <input type="text" name="namaStudio" class="form-control @error('namaStudio') 
                                is-invalid @enderror" autofocus>
                                @error('namaStudio')
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