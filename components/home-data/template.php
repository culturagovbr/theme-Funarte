<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\Funarte\Theme $this
 */

use MapasCulturais\i;

$img_layout_08 = $app->view->asset('img/MAPA-DAS-ARTES_PLATAFORMA-REDE-DAS-ASRTES_LAYOUT-08.png', false);
$img_layout_09 = $app->view->asset('img/MAPA-DAS-ARTES_PLATAFORMA-REDE-DAS-ASRTES_LAYOUT-09.png', false);
?>

<section class="home-data">
    <div class="home-data__container">
        <div class="home-data__text">
            <h2 class="title">PRODUZIR DADOS PARA<br>FORTALECER O BRASIL DAS ARTES</h2>
            <p class="description">
                O <strong>Mapa das Artes</strong> é uma ferramenta estratégica para compreender, de forma ampla e sistemática, as dinâmicas dos campos artísticos no Brasil. 
                <br> <br>
                Ao reunir informações sobre artistas, grupos, coletivos e outras formas de organização da criação e da produção artística, a iniciativa busca fortalecer as políticas públicas para as artes, contribuindo para reduzir desigualdades territoriais, ampliar a visibilidade das redes de produção e orientar decisões institucionais.
            </p>
            <a class="button button--primary button--large button--icon" href="https://rededasartes.cultura.gov.br/oportunidade/7164" >Ver Mapa das Artes</a>
        </div>
        <div class="home-data__images">
            <img src="<?= $img_layout_09 ?>" alt="Imagem ilustrativa do Mapa das Artes" />
            <img src="<?= $img_layout_08 ?>" alt="Imagem ilustrativa do Mapa das Artes" />
        </div>
    </div>
</section>
