{{-- {{dd($admin)}} --}}
@extends('admin.main')

@section('title')
@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Theaters</h1>
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
                    <strong>Edit Theaters</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('datatheater')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('datatheater/' .$admin->id)}}" method="post">
                            @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label>nama theater</label>
                                    <input type="text" name="namaTheater" value="{{ $admin->namaTheater }}" class="form-control @error('namaSeat') 
                                    is-invalid @enderror" autofocus>
                                    @error('namaTheater')
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