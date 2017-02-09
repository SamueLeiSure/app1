@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div>
            <div class="panel panel-default">
                <div class="panel-heading">{{ $novel->title }}</div>

                <div class="panel-body">
                    <div class="row">
                        @foreach ($novel->hasManyChapters as $chapter)
                        <div class="col-xs-6 col-lg-4">
                            <p><a class="btn btn-link" href="{{ url('chapter/' .$chapter->id) }}" role="button">{{ $chapter->title }}</a></p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
