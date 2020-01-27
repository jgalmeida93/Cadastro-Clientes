<!DOCTYPE html>
<html lang="en">
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cadastro de Cliente</title>
<link rel="stylesheet" href="{{'css/app.css'}}">

<style>
    body {
        padding: 20px;
    }
</style>
</head>
<body>

    <main role="main">
        <div class="row">
            <div class="container col-md-8 offset-md-2">
                <div class="card border">
                    <div class="card-header">
                        <div class="card-title">
                            Cadastro de cliente
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="/cliente" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" class="form-control" name="nome" placeholder="Nome do cliente">
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade</label>
                                <input type="numer" id="idade" class="form-control" name="idade" placeholder="Idade do cliente">
                            </div>
                            <div class="form-group">
                                <label for="enderec">Endereço</label>
                                <input type="text" id="endereco" class="form-control" name="endereco" placeholder="Endereço do cliente">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="form-control" name="email" placeholder="Email do cliente">
                            </div>

                            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
                            <button type="submit" class="btn btn-secondary btn-sm">Cancelar</button>

                        </form>
                    </div>
                    @if ($errors->any())
                        <div class="card-footer">
                            @foreach ($errors->all() as $err)
                                <div class="alert alert-danger" role="alert">
                                    {{ $err }}
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
    
    @if (isset($errors))
    {{ var_dump($errors) }}
    @endif

    <script src="{{'js/app.js'}}" type="text/javascript"></script>
</body>
</html>