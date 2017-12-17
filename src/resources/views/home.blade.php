@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">メニュー</div>

                <div class="panel-body">
                    <div class="list-group">
                        <div class="list-group-item">
                            <a href="{{ route('users.index') }}">社員情報</a>
                        </div>
                        <div class="list-group-item">
                            <a href="{{ route('scores.index') }}">社員の評価</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
