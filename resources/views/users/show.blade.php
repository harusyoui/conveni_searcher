@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-xs-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $user->name }}</h3>
                </div>
            </div>
        </aside>
        <div class="col-xs-8">
            <ul class="nav nav-tabs nav-justified">
                <li><a>検索履歴</a></li>
            </ul>
            aiueo
            @if (count($histories) > 0)
                @include('histories.histories', ['histories' => $histories])
            @endif
        </div>
    </div>
@endsection