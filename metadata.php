<?php

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = array(
    'id' => 'rs_baseprice',
    'title' => '<strong style="color:#1E477F;">rheinstruktur.de</strong>:  <i>Grundpreisberechnung Erweiterung</i>',
    'description' => array(
        'de' => 'Einstellbare Basismenge für Grundpreisberechnung',
    ),
    'thumbnail' => 'rheinstruktur.png',
    'version' => '1.0',
    'author' => 'Daniel Speckhardt',
    'url' => '',
    'email' => 'speckhardt@rheinstruktur.de',
    'extend' => array(
        \OxidEsales\Eshop\Application\Model\Article::class => \Rheinstruktur\BasePrice\Application\Model\Article::class,
        \OxidEsales\Eshop\Core\Price::class => \Rheinstruktur\BasePrice\Core\Price::class
    ),
    'events' => array(
        'onActivate' => '\Rheinstruktur\BasePrice\Core\Events::onActivate',
        'onDeactivate' => '\Rheinstruktur\BasePrice\Core\Events::onDeactivate'
    ),
    'blocks' => array(
        array(
            'template' => 'article_extend.tpl',
            'block' => 'admin_article_extend_form',
            'file' => '/Application/views/tpl/blocks/admin/rs_baseprice_admin_article_extend_form.tpl'),
        array(
            'template' => 'page/details/inc/productmain.tpl',
            'block' => 'details_productmain_priceperunit',
            'file' => '/Application/views/tpl/blocks/rs_baseprice_details_productmain_priceperunit.tpl'),
    )
);