@extends('layout')

@section('conteudo')
<form method="post" action="/ex6resp">
    @csrf
    <div class="row mt-3">
        <div class="col mb-3">
            <label for="comp" class="form-label fw-bold">Informe a largura do retângulo:</label>
            <input type="number" id="comp" name="comp" class="form-control" required="">
        </div>
        <div class="col mb-3">
            <label for="larg" class="form-label fw-bold">Informe o comprimento do retângulo:</label>
            <input type="number" id="larg" name="larg" class="form-control" required="">
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