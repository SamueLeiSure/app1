@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Board</div>

                <div class="panel-body">
                    <form action="{{ url('admin/novel') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <span class="input-group-addon">T</span>
                            <input type="text" name="title" class="form-control" placeholder="Title" required="required">
                        </div>
                        <br>
                        <div class="input-group">
                            <span class="input-group-addon">A</span>
                            <input type="text" name="auther" class="form-control" placeholder="Auther">
                        </div>
                        <br>

                        <div class="input-group pull-right">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>
                        <br><br>
                    </form>

                    @if (count($novels) > 0)
                    <hr>
                    <div class="list-group">
                        @foreach ($novels as $novel)
                        <a href="{{ url('admin/novel/' .$novel->id) }}" class="list-group-item">
                            <strong>{{ $novel->title }}</strong>
                            <span class="label label-info col-md-offset-6">
                                作者：{{ $novel->auther }}
                            </span>
                        </a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
