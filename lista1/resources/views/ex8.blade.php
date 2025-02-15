@extends('layout')

@section('conteudo')
<form method="post" action="/ex8resp">
    @csrf
    <div class="row mt-3">
        <div class="col mb-3">
            <label for="base" class="form-label fw-bold">Informe a base:</label>
            <input type="number" id="base" name="base" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="expoente" class="form-label fw-bold">Informe o expoente</label>
            <input type="number" id="expoente" name="expoente" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($resultado)
        <p class="fw-bold">O resultado é: {{ $resultado }}</p>
    @endisset

@endsection