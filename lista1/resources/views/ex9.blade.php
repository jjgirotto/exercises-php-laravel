@extends('layout')

@section('conteudo')
<form method="post" action="/ex9resp">
    @csrf
    <div class="row mt-3">
        <div class="col-4 mb-3">
            <label for="metros" class="form-label fw-bold">Informe o valor em metros</label>
            <input type="number" id="metros" name="metros" step="0.01" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($centimetros)
        <p class="fw-bold">O valor em centímetros é de: {{ $centimetros }}cm</p>
    @endisset

@endsection