<?php

namespace Funarte;

use MapasCulturais\App;
use MapasCulturais\i;

class CircuitosController extends \MapasCulturais\Controller
{
    /**
     * Custom route handler for the Funarte theme
     */
    public function ALL_index()
    {
        $app = App::i();

        // Filtrar projetos que possuem qualquer um destes selos (operador OR)
        $initial_pseudo_query = [
            '@seals' => ['106,107,108,109,110']
            // '@seals' => ['2']
        ];

        $app->applyHookBoundTo($this, 'search-projects-initial-pseudo-query', [&$initial_pseudo_query]);

        $this->render('index', ['initial_pseudo_query' => $initial_pseudo_query]);
    }
}
