<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */
?>

<?php
$image_url = $app->view->asset('img/home/home-header/logo-banner.png', false);
?>

<div class="home-header" style="height: 576px">
  <div class="home-header__background">
    <div class="img">
      <img :src="background" alt="Imagem de fundo" />
    </div>
  </div>
  <div class="home-header__overlay">
    <img src="<?= $image_url ?>" alt="Logo Funarte" />
  </div>

</div>
