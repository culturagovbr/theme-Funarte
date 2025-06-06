<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\Funarte\Theme $this
 */

use MapasCulturais\i;

?>

<div class="circuits" style="background-image: url('<?php $image_circuits = $app->view->asset("img/home/home-circuits/home-circuits2.jpg")?>');">
        <div class="circuits--text">
        <h1>
            Circuitos Artísticos
        </h1>
        <p>
            Dos pampas gaúchos ao sertão nordestino, os <strong>Circuitos Artísticos</strong> percorrem o país levando música, teatro, dança, literatura e muito mais. São eventos que integram projetos contemplados pelos editais da Rede das Artes, promovendo encontros entre territórios, saberes e linguagens.
        </p>
        <ul>
            <li>Atividades gratuitas em diferentes cidades</li>
            <li>Programação diversa e itinerante</li>
            <li>Projetos selecionados via edital da Funarte</li>

        </ul>

        <button>
            <a href="<?= $app->createUrl("search","events")?>">Ver Circuitos Artísticos</a>
        </button>
    </div>
</div>