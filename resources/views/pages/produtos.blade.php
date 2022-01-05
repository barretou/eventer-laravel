@extends('layouts.main')

@section('content')
    <div class="uk-container">
        <div class="uk-row">            
            @if( $id != null )
            <h1>Página de produtos {{ $id }}</h1>
            @endif
        </div>
    </div>
@endsection