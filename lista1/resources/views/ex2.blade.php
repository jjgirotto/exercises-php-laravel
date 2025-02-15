@extends('layout')

@section('conteudo')
<form method="post" action="/ex2resp">
    @csrf
    <div class="row mt-3">
        <div class="col-4 mb-3">
            <label for="celsius" class="form-label fw-bold">Digite a temperatura em Celsius:</label>
            <input type="number" id="celsius" name="celsius" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($temp)
        <p class="fw-bold">O valor da temperatura em Fahrenheit é: {{ $temp }}</p>
    @endisset

@endsection