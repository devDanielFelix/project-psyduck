@extends ('layouts.main')

@section ('title', 'Aaron Store - Artigos Esportivos ltda.')

@section('content')

<body>
    <main>
        <div id="text-container" class="row">
            <div class="cards-container">
                <h1>Bem-vindo à Psyduck</h1>
                <p>
                    Explore nossa seleção cuidadosamente escolhida de camisas esportivas de alta qualidade,
                    projetadas para desempenho e estilo. Trabalhamos com marcas renomadas para garantir conforto e durabilidade em cada peça.
                    Navegue em nossa loja hoje e encontre a camisa perfeita para expressar seu estilo enquanto você pratica seu esporte favorito!
                </p>
            </div>
        </div>
        <div id="events-container" class="col-md-12">
            <h3 class="subtitle">Veja os produtos em destaque:</h3>
            <div id="cards-container" class="row">
                <div class="card col-md-3">
                    <img src="img/Kelce_philadelphia_eagles_62.jpg" class="card-image" alt="Jersey Kelce 62 green">
                    <div class="card-body">
                        <p class="card-description">Philadelphia Eagles Kelce 62</p>
                        <h6 class="card-title">Jersey Philadelphia Eagles</h6>
                        <p class="card-price">R$ 299,99</p>
                        <a href="/compra" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
                <div class="card col-md-3">
                    <img src="img/Kelce_philadelphia_eagles_62.jpg" class="card-image" alt="Jersey Kelce 62 green">
                    <div class="card-body">
                        <p class="card-description">Philadelphia Eagles Kelce 62</p>
                        <h6 class="card-title">Jersey Philadelphia Eagles</h6>
                        <p class="card-price">R$ 299,99</p>
                        <a href="/compra" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

        </div>
    </main>
</body>


@endsection
