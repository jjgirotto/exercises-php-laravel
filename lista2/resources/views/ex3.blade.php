@extends('layout')

@section('conteudo')
<form method="post" action="/ex3resp">
    @csrf
    <div class="row mt-3">
        <div class="col-3 mb-3">
            <label for="valor" class="form-label fw-bold">Informe o valor do produto:</label>
            <input type="number" id="valor" name="valor" step="0.01" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($valor)
        <p class="fw-bold">Valor final: R$ {{ number_format($valor, 2) }} reais.</p>
    @endisset

@endsection