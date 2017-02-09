@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $novel->title }}</div>

                <div class="panel-body">
                    <form action="{{ url('admin/chapter') }}" method="POST" class="form-horizontal col-md-12">
                        {{ csrf_field() }}
                        <input type="hidden" name="novel_id" value="{{ $novel->id }}">
                        <div class="form-group">
                            <input type="number" name="order" class="form-control" placeholder="Order" required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" name="title" class="form-control" placeholder="Title" required="required">
                        </div>
                        <br>
                        <div class="form-group">
                            <textarea name="content" rows="10" class="form-control" placeholder="Content" required="required"></textarea>
                        </div>
                        <br>

                        <div class="form-group pull-right">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
