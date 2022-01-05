@extends('layouts.main')

@section('title', 'Eventer - Contatos')
@section('content')

    <div class="uk-container">
        <div class="uk-row">           
            @if( $busca != '' )
            <h1>Página de contatos buscando por {{ $busca }}</h1>
            @endif          
        </div>
    </div>
@endsection