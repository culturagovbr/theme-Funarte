<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\Funarte\Theme $this
 */

use MapasCulturais\i;

$mapa_img = $app->view->asset('img/home/home-description/mapa.svg', false);
?>

<section class="home-network">
    <div class="home-network__container">
        <div class="home-network__text">
            <h2 class="title">EM REDE, AS ARTES BRASILEIRAS<br>SE FORTALECEM!</h2>
            <p class="description">
                Um ambiente artístico onde diferentes expressões e comunidades se encontram, se conectam e fortalecem umas às outras, criando a Rede das Artes. Um espaço fértil para criar parcerias, reconhecer oportunidades, e ofertar a toda a população uma grande agenda cultural, contribuindo para uma cena artística mais inclusiva e colaborativa.
            </p>
        </div>
        <div class="home-network__image">
            <img src="<?= $mapa_img ?>" alt="Mapa do Brasil por regiões" />
        </div>
    </div>
</section>
