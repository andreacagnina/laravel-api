@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="content">
                    <h1 class="text-center">Hai una richiesta da trattare!</h1>
                </div>
            </div>
            <div class="col-12">
                <div class="content">
                    <p><strong>Nome Completo: </strong> {{ $contact->name }} {{ $contact->surname }}</p>
                    <p> <strong>Email: </strong> {{ $contact->email }}</p>
                    <p> <strong>Messaggio: </strong> {{ $contact->message }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
