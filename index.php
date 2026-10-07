<?php
function verificarURL($url) {
    return $url == parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

}

function verificarMetodo($metodo){
    return $metodo == $_SERVER ['REQUEST_METHOD'];

}
$rotas = [
    [
        "url" => "/",
        "metodo" => "GET",
        "conteudo" => "centro do parque"
    ],
    [
        "url" => "/parque/Montanha-russa",
        "metodo" => "GET",
        "conteudo" => "Montanha-russa"
    ],
    [
        "url" => "/parque/Roda-gigante",
        "metodo" => "GET",
        "conteudo" => "Roda-gigante"
    ],
    [
        "url" => "/parque/Carrossel",
        "metodo" => "GET",
        "conteudo" => "Carrossel"
    ],
    [
        "url" => "/parque/Navio Pirata",
        "metodo" => "GET",
        "conteudo" => "Navio Pirata"
    ],
    [
        "url" => "/parque/Carrinho de bate-bate",
        "metodo" => "GET",
        "conteudo" => "Carrinho de bate-bate"
    ],
    [
        "url" => "/parque/Cadeiraora Voadora",
        "metodo" => "GET",
        "conteudo" => "Cadeiraora Voadora"
    ],
    [
        
    ]
    ];
foreach ($rotas as $rota) {
    if(verificarURL($rota['url']) && verificarMetodo($rota['metodo'])) {
        echo $rota['conteudo'];
    }
}