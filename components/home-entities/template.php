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
        'description' => 'Acesse ou crie oportunidades no campo das artes e divulgue para outros agentes artísticos.'],
    'events' => [
        'icon' => 'event',
        'title' => 'Eventos',
        'route' => 'search/events',
        'description' => 'Descubra uma série de eventos artísticos, de ação pontual ou continuada, presencial e/ou on-line, com programação interestadual e/ou internacional. São festivais, mostras, feiras, painéis e bienais, entre outros formatos.' ],
    'spaces' => [
        'icon' => 'space',
        'title' => 'Espaços',
        'route' => 'search/spaces',
        'description' => 'Encontre espaços artísticos brasileiros, como arenas, ateliês, casas de espetáculos, galerias, galpões, lonas, teatros, entre outros.' ],
    'agents' => [
        'icon' => 'agent-2',
        'title' => 'Agentes',
        'route' => 'search/agents',
        'description' => 'Conheça artistas, grupos, coletivos e outros agentes artísticos cadastrados na Plataforma Rede das Artes.'  ],
    'projects' => [
        'icon' => 'project',
        'title' => 'Projetos',
        'route' => 'search/projects',
        'description' => 'Acompanhe projetos de agentes artísticos, com suas ações e agendas, de atualização contínua.']
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
