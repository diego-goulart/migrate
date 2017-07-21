<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Migração de Produtos</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">

    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <button id="copy-paste" class="btn btn-primary pull-right copy-paste-btn">Copiar HTML</button>
                    <h2 class="panel-title">PRODUTOS ENCONTRADOS</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="panel-body" id="table-produtos-container">
                    <table class="table table-giro table-striped table-condensed table-hover dataTable">
                        <thead>
                        <tr>
                            <th>Cod. EAN</th>
                            <th>Cod. Pan</th>
                            <th>Descrição Pan</th>
                            <th>Cod. Novo</th>
                            <th>Descrição Nova</th>
                            <th>Data Alteração</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($res as $k)
                        <tr>
                            <td>{{$k[0]}}</td>
                            <td>{{$k[1]}}</td>
                            <td>{{$k[2]}}</td>
                            <td>{{$k[3]}}</td>
                            <td>{{$k[4]}}</td>
                            <td>{{$k[5]}}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <p id="not-show"></p>
        </div>
    </div>

</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>

<script type="text/javascript">
    $('document').ready(function () {
        var string = $('#table-produtos-container').html().toString();

        $('#not-show').text(string);

    });
</script>
</body>
</html>
