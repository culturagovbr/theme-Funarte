<?php

namespace Funarte;

use MapasCulturais\App;

class SearchController extends \MapasCulturais\Controller
{

    function GET_agents() {
        $app = App::i();
        $initial_pseudo_query = [];

        if ($subsite = $app->subsite) {
            $initial_pseudo_query['_subsiteId'] = $subsite->id;
        }

        $this->render('agent', ['initial_pseudo_query' => $initial_pseudo_query]);
    }
}
