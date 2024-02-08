@extends('padrao')
@section('content')
<body style="background-color:darkgray">
<h1 class="text-center">Hospital Brasil</h1>
<div class="card-footer">

<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <img src="../images/BRASIL1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Registro</h5>
          <p class="card-text">O Hospital e Maternidade Brasil foi inaugurado em 1970 em Santo André, por um grupo de médicos cujo objetivo foi oferecer, às famílias da região do ABC Paulista.</p>
          <div class="col-12">
            <a type="submit" class="btn btn-secondary" href="/cadastrar">Register</a>
        </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="../images/BRASIL2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Buscar</h5>
          <p class="card-text">Em 2010 o Hospital Brasil passou a fazer parte da Rede D’Or, maior rede de hospitais privados do país, nos últimos anos foram realizados investimentos nos serviços de Cardiologia.</p>
            <div class="col-12">
              <a type="submit" class="btn btn-secondary" href="/todosContato">Search</a>
          </div>
           </div>
          </div>
      </div>
    </div>
  </div>
</body>

<div class="card-footer">
@endSection




