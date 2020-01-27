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
                        <table class="table table-bordered table-hover" id="tabela_clientes">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
                                    <th>Endereço</th>
                                    <th>Idade</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $c)
                                <tr>
                            <td>{{ $c->id }}</td>
                            <td>{{ $c->nome }}</td>
                            <td>{{ $c->endereco }}</td>
                            <td>{{ $c->idade }}</td>
                            <td>{{ $c->email }}</td>
                        </tr>    
                            @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

<script src="{{'js/app.js'}}" type="text/javascript"></script>
</body>
</html>