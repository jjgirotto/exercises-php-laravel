@extends('layout')

@section('conteudo')
<form method="post" action="/ex7resp">
    @csrf
    <div class="row mt-3">
        <div class="col-4 mb-3">
            <label for="raio" class="form-label fw-bold">Digite o raio do círculo</label>
            <input type="number" id="raio" name="raio" step="0.1" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($perimetro)
        <p class="fw-bold">O valor do perímetro é: {{ $perimetro }}</p>
    @endisset

@endsection