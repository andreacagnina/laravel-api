{{-- GLI STILI VANNO MESSI INLINE --}}
<div class="container my-3">
    <div class="row">
        <div class="col-12">
            <div class="content">
                <h1 class="text-center">Hai una richiesta da trattare!</h1>
            </div>
        </div>
        <div class="col-12">
            <div class="content">
                <p><strong>Nome Completo: </strong> {{ $lead->name }} {{ $lead->surname }}</p>
                <p> <strong>Email: </strong> {{ $lead->email }}</p>
                <p> <strong>Messaggio: </strong> {{ $lead->message }}</p>
            </div>
        </div>
    </div>
</div>
