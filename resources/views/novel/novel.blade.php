@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Board</div>

                <div class="panel-body">
                    <form action="{{ url('novel') }}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Go!</button>
                            </span>
                        </div>
                    </form>

                    @if (count($novels) > 0)
                    <hr>
                    <div class="list-group">
                        @foreach ($novels as $novel)
                        <a href="{{ url('novel/' .$novel->id) }}" class="list-group-item">
                            {{ $novel->title }}
                        </a>
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
