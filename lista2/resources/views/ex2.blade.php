@extends('layout')

@section('conteudo')
<form method="post" action="/ex2resp">
    @csrf
    <div class="row mt-3">
        <div class="col mb-3">
            <label for="valor1" class="form-label fw-bold">Informe o valor de A:</label>
            <input type="number" id="valor1" name="valor1" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="valor2" class="form-label fw-bold">Informe o valor de B:</label>
            <input type="number" id="valor2" name="valor2" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($mensagem)
        <p class="fw-bold">{{ $mensagem }}</p>
    @endisset

@endsection