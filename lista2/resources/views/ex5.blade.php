@extends('layout')

@section('conteudo')
<form method="post" action="/ex5resp">
    @csrf
    <div class="row mt-3">
        <div class="col-3 mb-3">
            <label for="valor" class="form-label fw-bold">Informe o valor do mês:</label>
            <input type="number" id="valor" name="valor" class="form-control" required="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>

    @isset($mes)
        <p class="fw-bold">Mês: {{ $mes }}</p>        
    @endisset

@endsection