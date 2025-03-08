@extends('layout')

@section('conteudo')
<form method="post" action="/ex1resp">
    @csrf
    <div class="row mt-3">
        <div class="col mb-3">
            <label for="valor1" class="form-label fw-bold">Informe o valor 1:</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="valor2" class="form-label fw-bold">Informe o valor 2:</label>
            <input type="number" id="valor2" name="valor2" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($soma)
        <p class="fw-bold">O resultado é: {{ $soma }}</p>
    @endisset

@endsection