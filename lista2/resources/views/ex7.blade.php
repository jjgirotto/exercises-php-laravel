@extends('layout')

@section('conteudo')
<form method="post" action="/ex7resp">
    @csrf
    <div class="row mt-3">
        <div class="col-3 mb-3">
            <label for="valor" class="form-label fw-bold">Informe um valor:</label>
            <input type="number" id="valor" name="valor" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($resultado)
            <p>Soma: {{ $resultado }}</p>    
    @endisset

@endsection