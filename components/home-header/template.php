<?php
/**
 * @var MapasCulturais\App $app
 * @var MapasCulturais\Themes\BaseV2\Theme $this
 */

use MapasCulturais\i;

$this->import('
    home-search
');

?>
<div :class="['home-header', {'home-header--withBanner' : banner}] ">
    <div class="home-header__content">

        <div class="home-header__main">
            <label class="home-header__title">
                <?= $this->text('title', i::__('Boas-vindas à Plataforma Rede das Artes')) ?>
            </label>
            <p class="home-header__description">
                <?= $this->text('description', i::__('Aqui você encontra e participa de uma rede artística de eventos, circuitos, grupos, coletivos e espaços, entre outros elos das artes visuais, do circo, da dança, da música, do teatro e das artes integradas, de todas as regiões do Brasil.')) ?>
            </p>
            <p class="home-header__beta-title">
                <?= $this->text('beta-title', i::__('🚧 Versão Beta – Teste e Avalie 🚧')) ?>
            </p>
            <p class="home-header__beta-description">
                <?= $this->text('beta-description', i::__('Esta é uma versão preliminar da plataforma, disponível para testes. Se encontrar qualquer divergência ou tiver dúvidas, entre em contato com o suporte. Seu feedback é essencial para melhorias!')) ?>
            </p>
        </div>
        
        <div v-if="banner || secondBanner" class="home-header__banners">
            <div v-if="banner" class="home-header__banner">
                <a v-if="bannerLink" :href="bannerLink" :download="downloadableLink ? '' : undefined"  :target="!downloadableLink ? '_blank' : null">
                    <img :src="banner" />
                </a>
                <img v-if="!bannerLink" :src="banner" />
            </div>

            <div v-if="secondBanner" class="home-header__banner">
                <a v-if="secondBannerLink" :href="secondBannerLink" :download="secondDownloadableLink ? '' : undefined"  :target="!secondDownloadableLink ? '_blank' : null">
                    <img :src="secondBanner" />
                </a>
                <img v-if="!secondBannerLink" :src="secondBanner" />
            </div>

            <div v-if="thirdBanner" class="home-header__banner">
                <a v-if="thirdBannerLink" :href="thirdBannerLink" :download="thirdDownloadableLink ? '' : undefined"  :target="!thirdDownloadableLink ? '_blank' : null">
                    <img :src="thirdBanner" />
                </a>
                <img v-if="!thirdBannerLink" :src="thirdBanner" />
            </div>
        </div>
  
    </div>
    <div class="home-header__background">
        <div class="img">
            <img :src="background" />
        </div>
    </div>
    <!-- <home-search></home-search> -->
</div>