<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Novo Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">

    <h1>Novo Produto</h1>
    
    <form method="post" action="/produtos" enctype="multipart/form-data">
        @csrf
                        
        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição: </label>
            <textarea id="descricao" name="descricao" class="form-control" rows="4" required=""></textarea>
        </div>

        <div class="mb-3">
            <label for="preco" class="form-label">Preço: </label>
            <input type="number" id="preco" name="preco" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="estoque" class="form-label">Estoque: </label>
            <input type="number" id="estoque" name="estoque" class="form-control" required="">
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoria: </label>
            <select id="categoria_id" name="categoria_id" class="form-select" required="">
                @foreach ($categorias as $c)
                    <option value="{{ $c->id }}">
                        {{ $c->nome }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Foto do produto</label>
            <input type="file" name="foto" id="foto" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>