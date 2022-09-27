@extends ('layouts.main')

@section ('title', 'Catalogo')

@section ('content')

<div id="cards-container1" class="row" class="justify-content-center">    
    <div class="card col-md-4">
        <div class="card-body">
            <h5 class="card-title">Prestadores de Serviço</h5>
            <p class="card-text">Selecionando essa opção você poderá cadastrar serviços como: bar, limpeza, segurança etc.</p>
        </div>
    </div>
    <div class="card col-md-4">
        <div class="card-body">
            <h5 class="card-title">Casas de Evento</h5>
            <p class="card-text">Selecionando essa opção você poderá cadastrar seu espaço para eventos</p>
        </div>
    </div>
    <div class="card col-md-4">
        <div class="card-body">
            <h5 class="card-title">Produtores de Evento</h5>
            <p class="card-text">Selecionando essa opção você poderá contratar espaços e prestadores de serviço para seu evento</p>
        </div>
    </div>
</div>


@endsection