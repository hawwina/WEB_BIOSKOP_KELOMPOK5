{{-- {{dd($admin)}} --}}
@extends('admin.main')

@section('title')
@section('breadcrumbs')

<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Data Time Release</h1>
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
                    <strong>Edit Time Release</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('datatime')}}" class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('datatime/' .$admin->id)}}" method="post">
                            @method('patch')
                                @csrf
                                <div class="form-group">
                                    <label>time release</label>
                                    <input type="text" name="time" value="{{ $admin->time }}" class="form-control @error('time') 
                                    is-invalid @enderror" autofocus>
                                    @error('time')
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