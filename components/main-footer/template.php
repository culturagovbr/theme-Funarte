<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\Funarte\Theme $this
 */

use MapasCulturais\i;

$this->import('theme-logo');
$config = $app->config['social-media'];

$image_url_funarte   = $app->view->asset('img/logo-funarte.png', false);
$image_url_governo   = $app->view->asset('img/logo-governo-federal.png', false);
$image_white_mapas   = $app->view->asset('svg/mapas.svg', false);
$image_github        = $app->view->asset('svg/github.svg', false);
$entities = [
    'opportunities' => ['label' => 'Editais e Oportunidades', 'icon' => 'opportunity'],
    'events' => ['label' => 'Eventos', 'icon' => 'event'],
    'agents' => ['label' => 'Artistas', 'icon' => 'agent'],
    'spaces' => ['label' => 'Espaços', 'icon' => 'space'],
    'projects' => ['label' => 'Iniciativas', 'icon' => 'project'],
];
?>

<?php $this->applyTemplateHook("main-footer", "before") ?>
<div v-if="globalState.visibleFooter" class="main-footer">
    <?php $this->applyTemplateHook("main-footer", "begin") ?>
    <div class="main-footer__content">
        <?php $this->applyTemplateHook("main-footer-logo", "before") ?>
        <div class="main-footer__support">
            <?php $this->part('footer-support-message') ?>
        </div>

        <div class="main-footer__content--logo-group">
            <div class="main-footer__logo-item"><img src="<?= $image_url_funarte ?>" alt="Logo Funarte" /></div>
            <div class="main-footer__logo-item"><theme-logo href="<?= $app->createUrl('site', 'index') ?>"></theme-logo></div>
            <div class="main-footer__logo-item"><img src="<?= $image_url_governo ?>" alt="Logo Governo Federal" /></div>
        </div>
        <?php $this->applyTemplateHook("main-footer-logo", "after") ?>

        <?php $this->applyTemplateHook("main-footer-links", "before") ?>
        <div class="main-footer__links-wrapper">
            <div class="main-footer__content--links">

                <ul class="main-footer__content--links-group">
                    <li><a><?php i::_e("Descubra"); ?></a></li>
                    <?php foreach ($entities as $entity => $data): ?>
                        <li v-if="global.enabledEntities.<?= $entity ?>">
                            <a href="<?= $app->createUrl('search', $entity) ?>">
                                <mc-icon name="<?= $data['icon'] ?>"></mc-icon> <?php i::_e($data['label']); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <ul class="main-footer__content--links-group">
                    <li><a><?php i::_e('Painel de controle'); ?></a></li>
                    <?php foreach (['opportunities', 'events', 'agents', 'spaces', 'projects'] as $entity): ?>
                        <li v-if="global.enabledEntities.<?= $entity ?>">
                            <a href="<?= $app->createUrl('panel', $entity) ?>"><?php i::_e('Minhas ' . $entity); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>

                <ul class="main-footer__content--links-group">
                    <li><a><?php i::_e('Ajuda e privacidade'); ?></a></li>
                    <li><a href="<?= $app->createUrl('faq') ?>"><?php i::_e('Ajuda e perguntas frequentes (FAQ)'); ?></a></li>
                    <li><a href="<?= $app->createUrl('terms') ?>"><?php i::_e('Termos de uso e Política de privacidade'); ?></a></li>
                    <li><a href="<?= $app->createUrl('lgpd', 'view', ['autorizacao-uso-imagem']) ?>"><?php i::_e('Autorização de uso de imagem'); ?></a></li>
                    <li><a href="<?= $app->createUrl('lgpd') ?>"><?php i::_e('Entenda a LGPD'); ?></a></li>
                    <div class="main-footer__content--logo-share">
                        <?php foreach ($config as $conf): ?>
                            <a target="_blank" href="<?= $conf['link'] ?>">
                                <mc-icon style="font-size: 25px;" name="<?= $conf['title'] ?>"></mc-icon>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </ul>
            </div>
        </div>
        <?php $this->applyTemplateHook("main-footer-links", "after") ?>
    </div>

    <?php $this->applyTemplateHook("main-footer-reg", "before") ?>
    <?php $this->applyTemplateHook("main-footer-reg", "after") ?>
    <?php $this->applyTemplateHook("main-footer", "end") ?>

    <div class="main-footer__beta-alert">
        <p>
            <strong>Versão Beta</strong>
            Você está em uma versão de teste da plataforma. Se encontrar qualquer divergência ou tiver dúvidas, entre em contato com o
            <a href="mailto:suporte@exemplo.gov.br">suporte</a>.
        </p>
    </div>

    <div class="main-footer__community">
        <div class="main-footer__community-content">
            <p>
                plataforma criada pela comunidade
                <img src="<?= $image_white_mapas ?>" alt="Ícone mapas culturais" />
                <strong>mapas culturais</strong> e desenvolvida por <strong>hacklab<span class="highlight-slash">/</span></strong>
            </p>
            <a href="https://github.com/redeMapas/mapas" target="_blank" rel="noopener noreferrer">
                visite o repositório
                <img src="<?= $image_github ?>" alt="Ícone github" />
            </a>
        </div>
    </div>
</div>
<?php $this->applyTemplateHook("main-footer", "after") ?>
