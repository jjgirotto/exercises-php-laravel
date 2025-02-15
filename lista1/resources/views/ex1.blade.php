@extends('layout')

@section('conteudo')
<form method="post" action="/ex1resp">
    @csrf
    <div class="row mt-3">
        <div class="col mb-3">
            <label for="valor1" class="form-label fw-bold">Informe a nota 1:</label>
            <input type="number" id="valor1" name="valor1" class="form-control" step="0.01" required="">
        </div>
        <div class="col mb-3">
            <label for="valor2" class="form-label fw-bold">Informe a nota 2:</label>
            <input type="number" id="valor2" name="valor2" class="form-control" step="0.01" required="">
        </div>
        <div class="col mb-3">
            <label for="valor3" class="form-label fw-bold">Informe a nota 3:</label>
            <input type="number" id="valor3" name="valor3" class="form-control" step="0.01" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($media)
        <p class="fw-bold">O valor da média é: {{ $media }}</p>
    @endisset

@endsection