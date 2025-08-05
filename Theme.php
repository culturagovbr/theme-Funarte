<?php

namespace Funarte;

use MapasCulturais\App;
use MapasCulturais\API;

// class Theme extends \Subsite\Theme {
class Theme extends \MapasCulturais\Themes\BaseV2\Theme
{
    static function getThemeFolder()
    {
        return __DIR__;
    }

    function __construct($config = [])
    {
        $app = App::i();
        $app->config['Metabase']['enabled'] = env('METABASE_FUNARTE_ENABLED', true);

        parent::__construct($config);
    }

    function _init()
    {
        parent::_init();
        $app = App::i();

        $app->hook('template(<<*>>.head):end', function () {
            $this->part('google-analytics--script');
        });
        $app->hook("ApiQuery(<<project|opportunity|event|space>>).params", function(&$api_params) use($app) {
            if($subsite = $app->subsite){
                $api_params['_subsiteId'] = API::EQ($subsite->id);
            }
        });

        $app->hook('template(<<*>>.<<*>>.body):begin', function(){
            /** @var \MapasCulturais\Theme $this */
            $this->part('glpi-form');
        });

        /**
         * Validação do Captcha
         */
        $app->hook('POST(site.valida-captcha)', function() use($app) {
            $recaptcha_response = $_POST['g-recaptcha-response'] ?? '';
            
            if (empty($recaptcha_response)) {
                $this->json(['success' => false, 'error' => 'Captcha não fornecido. Tente novamente.']);
                return;
            }

            // Usar a verificação nativa do App.php
            if (!$app->verifyCaptcha($recaptcha_response)) {
                $this->json(['success' => false, 'error' => 'Captcha inválido. Tente novamente.']);
                return;
            }

            $this->json(['success' => true, 'message' => 'Captcha válido']);
        });
    }
}
