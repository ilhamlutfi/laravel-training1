@extends('main')

@section('title', 'Edulevels')

@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Edulevels</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="{{ url('home') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Edulevels</li>
                </ol>
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
                    <strong>Edit Jenjang</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('edulevels') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <form action="{{ url('edulevels/update', $data_edit->id) }}" method="post">
                            @method('patch')
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" autofocus required value="{{ $data_edit->name }}">
                            </div>

                            <div class="form-group">
                                <label for="desc">Description</label>
                                <textarea name="desc" id="desc" class="form-control" required>{{ $data_edit->desc }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Update</button>

                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
