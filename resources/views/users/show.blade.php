@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}の検索履歴</h3>
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            
        </div>
    </div>
@endsection