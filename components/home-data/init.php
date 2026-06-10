<?php

use MapasCulturais\Entities\Opportunity;
use MapasCulturais\Entities\File;

$featured_entity_id = $app->config['funarte.featured_home_entity'] ?? null;
$images = [];
$featured_url = '';

if ($featured_entity_id) {
    $project = $app->repo('Project')->find($featured_entity_id);
    if ($project) {
        $featured_url = $project->singleUrl;

        $opps = $app->repo('ProjectOpportunity')->findBy([
            'ownerEntity' => $project,
            'status' => Opportunity::STATUS_ENABLED,
        ]);

        $fallback_img = $app->view->asset('img/MAPA-DAS-ARTES_PLATAFORMA-REDE-DAS-ASRTES_LAYOUT-09.png', false);

        foreach ($opps as $opp) {
            $s = $opp->simplify('id,name,avatar,files');
            $avatar = $s->avatar ?? null;

            // Cover: header image first, then first gallery image, then fallback
            $cover_url = $fallback_img;
            $header_file = $opp->getFile('header');
            if ($header_file) {
                $cover_url = $header_file->url;
            } else {
                $gallery = $opp->getFiles('gallery');
                if (!empty($gallery)) {
                    $first = reset($gallery);
                    $cover_url = $first->url;
                }
            }

            $images[] = [
                'id' => $s->id,
                'name' => $s->name,
                'coverUrl' => $cover_url,
                'avatarUrl' => $avatar
                    ? ($avatar['avatarMedium']->url ?? $avatar['avatarSmall']->url ?? $fallback_img)
                    : $fallback_img,
                'singleUrl' => $opp->singleUrl,
            ];
        }
    }
}

$this->jsObject['homeData']['images'] = $images;
$this->jsObject['homeData']['featuredUrl'] = $featured_url;
