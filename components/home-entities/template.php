<?php

/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

$this->import('mc-link');

$entities = [
    'opportunities' => [
        'icon' => 'opportunity',
        'title' => 'Oportunidades',
        'route' => 'search/opportunities',
        'description' => 'Acesso a inúmeras possibilidades de conexão com a Rede das Artes. Aqui você encontra atividades com inscrições abertas, como convocatórias, oficinas, intercâmbios e residências artísticas, editais, eventos e demais oportunidades acessíveis. Você também pode criar e ofertar oportunidades para outros agentes da Rede.'],
    'events' => [
        'icon' => 'event',
        'title' => 'Eventos',
        'route' => 'search/events',
        'description' => 'Aqui você pode inscrever o seu evento e também se conectar com propostas curatoriais diversas, programações artísticas de abrangência local, interestadual e/ou internacional. São festivais, bienais, encontros, feiras, mostras, salões, fóruns que propõem apresentações artísticas, exibições públicas, ações de formação, articulação e difusão.'
    ],
    'spaces' => [
        'icon' => 'space',
        'title' => 'Espaços',
        'route' => 'search/spaces',
        'description' => 'Aqui você encontra espaços culturais e artísticos situados no território nacional que atuam de forma contínua e estruturada e conheça as ações ofertadas e possibilidades de parcerias. São casas de espetáculos e shows, galpões, centros coreográficos, salas de concertos, centros de referência, teatros, lonas circenses e centros culturais. Cadastre também os espaços onde desenvolve suas atividades.'
    ],
    'agents' => [
        'icon' => 'agent-2',
        'title' => 'Agentes',
        'route' => 'search/agents',
        'description' => 'Conheça artistas, grupos, coletivos e outros agentes artísticos cadastrados na Plataforma Rede das Artes. Aqui você conhece os participantes da Rede das Artes e pode se inscrever para fazer parte. São agentes das artes, realizadores de festivais, grupos e coletivos de artes visuais, circo,  dança, música, teatro e artes integradas.'],
    'projects' => [
        'icon' => 'project',
        'title' => 'Projetos',
        'route' => 'search/projects',
        'description' => 'Aqui você pode acompanhar as ações da Rede das Artes: apresentações artísticas, ações de pesquisa, reflexão, intercâmbios, criação, oficinas, cursos, entre outras. Uma agenda cultural que integra iniciativas artísticas de todo o Brasil.'
    ]
];

?>

<div class="home-entities">
    <div class="home-entities__content">
        <div class="home-entities__content--cards">
            <?php foreach ($entities as $key => $entity) : ?>
                <div v-if="global.enabledEntities.<?= $key ?>" class="card <?= $key ?>">
                    <div class="tag">
                        <div class="icon">
                            <mc-icon name="<?= $entity['icon'] ?>"></mc-icon>
                        </div>
                    </div>
                    <div class="right">
                        <div class="header">
                            <h3><?= i::__($entity['title']) ?></h3>
                            <mc-link route="<?= $entity['route'] ?>">
                                <?= i::__('Ver todos') ?>
                                <mc-icon name="access"></mc-icon>
                            </mc-link>
                        </div>
                        <p><?= i::__($entity['description']) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>