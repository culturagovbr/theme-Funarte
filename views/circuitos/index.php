<?php
use MapasCulturais\i;

$this->import('
    create-project
    search
    search-filter-project
    search-list
    search-map
    mc-tabs
    mc-tab
    project-table
');

// search-filter-event
// search-map-event
$this->breadcrumb = [
    ['label' => i::__('Inicio'), 'url' => $app->createUrl('site', 'index')],
    ['label' => i::__('Circuitos'), 'url' => $app->createUrl('circuitos')],
];
?>

<search entity-type="project" page-title="<?= htmlspecialchars($this->text('title', i::__('Circuitos'))) ?>" :initial-pseudo-query="{type:[]}">
    <template #default="{pseudoQuery}">
        <mc-tabs class="search__tabs" sync-hash>
            <template #before-tablist>
                <label class="search__tabs--before">
                    <?= i::_e('Visualizar como:') ?>
                </label>
            </template>
            <mc-tab icon="list" label="<?php i::esc_attr_e('Lista') ?>" slug="list">
                <div class="tabs-component__panels">
                    <div class="search__tabs--list">
                        <search-list :pseudo-query="pseudoQuery" type="project" select="name,type,shortDescription,files.avatar,seals,terms" >
                            <template #filter>
                                <search-filter-project :pseudo-query="pseudoQuery"></search-filter-project>
                            </template>
                        </search-list>
                    </div>
                </div>
            </mc-tab>
    </template>
</search>