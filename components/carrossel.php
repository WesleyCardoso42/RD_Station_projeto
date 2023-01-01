<section class="sect-carousel">
    <h2 class="tittle-carousel">
        A ferramenta de Automação de Marketing líder na América Latina
    </h2>

     <div id="sld-desktop" class="dp-none">
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

    <div id="sld-mobile" class="">
        <div class="slide-container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper">
                    <?php
                        require_once "data/cards.php";
                        foreach($cards as $card){
                            echo 
                            '<div class="card swiper-slide"> 
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

            <div class="swiper-button-next swiper-navBtn dp-none"></div>
            <div class="swiper-button-prev swiper-navBtn dp-none"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>