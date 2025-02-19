@extends('layout')

@section('conteudo')
<form method="post" action="/ex15resp">
    @csrf
    <div class="row mt-3">
        <div class="col-4 mb-3">
            <label for="dias" class="form-label fw-bold">Informe o valor em dias</label>
            <input type="number" id="dias" name="dias" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($horas)
        <p class="fw-bold">Valor em horas: {{ $horas }}</p>
        <p class="fw-bold">Valor em minutos: {{ $minutos }}</p>
        <p class="fw-bold">Valor em segundos: {{ $segundos }}</p>
    @endisset

@endsection