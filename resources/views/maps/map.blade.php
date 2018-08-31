@extends('layouts.app')

@section('content')
    
    @if (Auth::id() == $user->id)
    
        
        {!! Form::open(['route' => 'histories.store']) !!}
            <div class="form-group">
                <!--原因はこの1行-->
                <!--{!! Form::textarea('content', null, ['class' => 'form-control', 'size' => '10x5', 'id'=> 'search']) !!}-->
                {!! Form::textarea('content', null, ['class' => 'controls', 'size' => '10x5', 'id'=> 'pac-input', 'type' => 'text', 'placeholder' => 'Search Box']) !!}
                <!---->
                {!! Form::submit('検索', ['class' => 'btn btn-primary btn-block', 'onClick' => 'SearchGo()']) !!}
            </div>
            <div id="map" style="height: 500px; width: 50%; margin: 2rem auto 0;"></div>
            <button id="getcurrentlocation">getcurrentlocation</button>
        {!! Form::close() !!}

    @endif
    
@endsection

@section('content1')
    <script src="https://maps.googleapis.com/maps/api/js?v=3.33&key=AIzaSyB9JEBMiAo_CGBNNlgwmX0RArH10AdWVeM&libraries=places"></script>
    <script src="{{ secure_asset('js/map.js') }}"></script>
@endsection