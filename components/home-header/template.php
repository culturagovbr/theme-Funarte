<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */
?>

<?php
$logo_url = $app->view->asset('img/home/home-header/logo-banner.png', false);
?>

<?php
$mapa_url = $app->view->asset('img/home/home-header/mapa-banner.jpg', false);
?>

<section class="hero">
    <div class="hero-text">
      <img src="<?= $logo_url ?>" alt="Logo Funarte" />
      <h1>Bem-vindo à Plataforma<br>Rede das Artes</h1>
		<p>
			Aqui você encontra e participa de uma rede vibrante de eventos, circuitos, grupos, coletivos e espaços dedicados às <strong>artes visuais, circo, dança, música, teatro e artes integradas</strong>, de todas as regiões do Brasil. Um ambiente artístico onde diferentes expressões e comunidades se encontram, se conectam e fortalecem umas às outras, criando a <strong>Rede das Artes</strong>. É um espaço fértil para criar <strong>parcerias</strong>, reconhecer <strong>oportunidades</strong>, e ofertar a toda a população uma grande <strong>agenda cultural</strong>, contribuindo para uma cena artística mais <strong>inclusiva e colaborativa.</strong>
      </p>
    </div>
    <div class="hero-image">
      <img src="<?= $mapa_url ?>" alt="Mapa com Linhas Culturais" />
    </div>
</section>
