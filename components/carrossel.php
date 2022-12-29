<section class="sect-geral sect-carousel">
    <h2 class="tittle-carousel">
        A ferramenta de Automação de Marketing líder na América Latina
    </h2>

     <div id="slider" class="slider">
        <div class="wrapper">
            <div id=slides class="slides">
                <?php
                require_once "data/cards.php";
                foreach($cards as $card){
                    echo '<div class="slide card"> 
                        <img src=' . $card["imagem"] . '>
                        <h2>' . $card["titulo"] . '</h2>
                        <p>' . $card["paragrafo"] . '</p>
                    </div>';
                }
            ?>
            </div>
            <a id="prev" class="control prev"></a>
            <a id="next" class="control next"></a>
        </div>
    </div>
</section>