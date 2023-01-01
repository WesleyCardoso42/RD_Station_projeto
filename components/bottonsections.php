<section class="botton-section01">
    <div class="banner-botton">
        <h2>Por que mais de 25.000 empresas <br>escolheram o RD Station?</h2>
        <p>Combinamos nossos produtos de Marketing e Vendas com pessoas que se importam com seus resultados e um ecossistema que apoia o seu negócio do planejamento à prática.</p>
        <a href="#"><img src="/img/g253.png"></a>
    </div>
</section>
<section class="botton-section02">
    <div class="info-esquerda">
        <div class="info-video">
            <h3>Entenda melhor como o RD Station Marketing funciona na prática</h3>
            <a class="open-modal"><img src="/img/botao-assistir.svg"></a>
        </div>
    </div>
    <div class="imagem-video">
        <a class="open-modal"><img src="/img/btn-play.svg"></a>
    </div>
    <div class="info-direita">
    </div>
    <?php require_once "components/videopopup.php" ?>
</section>
<section class="botton-section03">
    <div class="info-esquerda">
        <h2>Torne sua operação de Marketing ainda mais poderosa</h2>
        <p>O RD Station Marketing se conecta as principais ferramentas nacionais e internacionais </p>
    </div>
    <div class="info-direita">
        <a class="btn-azul" href="#"><img src="/img/criar-conta-gratuita-azul.svg"></a>
        <div class="logos">
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
    </div>
</section>