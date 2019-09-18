<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cliente</title>
  </head>
  <style>
  body{
      background: #eaeaea !important;
  }
  
  </style>
<body >
    <div class="container ">
        <div class="row mt-5 ">
            <div class="col-md-3"></div>
            <div class="col-md-6 bg-white shadow p-3 mb-5 rounded">
                <h2 class="text-center  ">Cliente</h2>
                <div class=" col-md-12 p-2">
                  @if($status == 1)
                     <p>Nome:  {{ $cliente->nome }}</p>
                     <p>Data de nascimento: {{ date('d/m/Y', strtotime($cliente->nascimento)) }}</p>
                     <p>Idade:  {{ $cliente->idade }}</p>
                     <p>Signo: {{ $cliente->signo }}</p>
                     <p>status: {{ $cliente->status }}</p>
                     <p>maeNome: {{ $cliente->maeNome }}</p>
                    @elseif($status == 0)
                      <p class="text-center">Nenhum Cliente Encontrado!</p>
                  @endif
                </div>

                <div class="text-center">
                    <a  class="btn btn-primary" href="{{url('/')}}">Voltar</a>
                </div> 



            </div>
            
            

        </div>
    </div>
    






    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>