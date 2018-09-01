@extends('layouts.app')

@section('content')
    
    @if (Auth::id() == $user->id)
        
        {!! Form::open(['route' => 'histories.store']) !!}
            <div class="form-group">
                {!! Form::textarea('content', null, ['class' => 'controls', 'size' => '10x5', 'id'=> 'pac-input', 'type' => 'text', 'placeholder' => 'Memo Box']) !!}
                {!! Form::submit('メモを残す', ['class' => 'btn btn-primary btn-block', 'onClick' => 'SearchGo()']) !!}
            </div>
        {!! Form::close() !!}
        <div id="map" style="height: 500px; width: 50%; margin: 2rem auto 0;"></div>
        <button id="getcurrentlocation">現在地を取得</button>

    @endif
    
@endsection

@section('content1')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.33&key=AIzaSyB9JEBMiAo_CGBNNlgwmX0RArH10AdWVeM&libraries=places"></script>
    <script src="{{ secure_asset('js/map.js') }}"></script>
@endsection