@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="{{ route('scores.index') }}">一覧に戻る</a>
                <div>
                <div class="panel-body">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="control-label col-xs-2">Name</label>
                            {{ $user->name }}
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-2">Score</label>
                            <div class="col-xs-5">
                                <input type="text" name="score" class="form-control" value="{{ $user->score }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-offset-2 col-xs-10">
                                <button type="submit" class="btn btn-default">Confirm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
