<section class="sect-geral sect-carousel">
    <h2 class="tittle-carousel">
        A ferramenta de Automação de <br>Marketing líder na América Latina
    </h2>

     <div id="sld-desktop" class="">
        <div class="static-cards">
            <?php
                require_once "data/cards.php";
                foreach($cards as $card){
                    echo 
                    '<div class="card"> 
                        <div class="img-card">
                            <img src=' . $card["imagem"] . '>
                        </div>
                        <h2>' . $card["titulo"] . '</h2>
                        <p>' . $card["paragrafo"] . '</p>
                    </div>';
                }
            ?>
        </div>
    </div>
</section>