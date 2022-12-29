<section class="botton-sections section01">
    <div class="banner-botton">
        <h2>Por que mais de 25.000 empresas <br>escolheram o RD Station?</h2>
        <p>Combinamos nossos produtos de Marketing e Vendas com pessoas que se importam com seus resultados e um ecossistema que apoia o seu negócio do planejamento à prática.</p>
        <a href="#"><img src="/img/g253.png"></a>
    </div>
</section>
<section class="botton-sections section02">
    <div class="info-esquerda">
        <div class="info-video">
            <h3>Entenda melhor como o RD Station Marketing funciona na prática</h3>
            <a href="#"><img src="/img/botao-assistir.svg"></a>
        </div>
    </div>
    <div class="imagem-video"><a href="#"><img src="/img/btn-play.svg"></a></div>
    <div class="info-direita">
    </div>
</section>
<section class="botton-sections section03">
    <div class="info-esquerda">
        <h2>Torne sua operação de Marketing <br>ainda mais poderosa</h2>
        <p>O RD Station Marketing se conecta as principais <br>ferramentas nacionais e internacionais </p>
        <a href="#"><img src="/img/criar-conta-gratuita-azul.svg"></a>
    </div>
    <div class="info-direita">
        <?php
            require_once "data/logos.php";
            foreach($logos as $logo){
                echo '<div class="logo-botton"> 
                        <img src=' . $logo["imagem"] . '>
                        <p>' . $logo["texto"] . '</p>
                    </div>';
            }
        ?>
    </div>
</section>