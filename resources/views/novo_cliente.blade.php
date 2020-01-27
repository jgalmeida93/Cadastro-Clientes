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
                            <a href="" role="button" class="btn btn-primary btn-sm">Salvar</a>
                            <a href="" role="button" class="btn btn-primary btn-sm">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

<script src="{{'js/app.js'}}" type="text/javascript"></script>
</body>
</html>