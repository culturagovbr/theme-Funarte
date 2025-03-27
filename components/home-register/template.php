<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;
?>
<div class="home-register">
    <div class="home-register__background">
        <div class="home-register__background--mask"></div>
    </div>
    <div class="home-register__content">
        <label class="home-register__content--title"><?= $this->text('title', i::__('Conecte-se à Rede das Artes! ')) ?></label>
        <p class="home-register__content--description"><?= $this->text('description', i::__('Utilize as ferramentas desta plataforma. Divulgue suas atividades, acompanhe ações e fortaleça a rede artística no Brasil.')); ?>
        </p>
        <a href="<?= $app->createUrl('autenticacao', 'register') ?>" class="button button--primary button--large button--icon">
            <?= i::__('Fazer Cadastro')?>
            
        </a>
    </div>
</div>