@extends('layout')

@section('conteudo')
<form method="post" action="/ex10resp">
    @csrf
    <div class="row mt-3">
        <div class="col-4 mb-3">
            <label for="km" class="form-label fw-bold">Informe o valor em km</label>
            <input type="number" id="km" name="km" step="0.01" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($milhas)
        <p class="fw-bold">O valor em milhas é de: {{ $milhas }} milhas</p>
    @endisset

@endsection