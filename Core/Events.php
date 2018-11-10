<?php

namespace Rheinstruktur\BasePrice\Core;

use OxidEsales\Eshop\Core\DatabaseProvider;
use OxidEsales\DatabaseViewsGenerator\ViewsGenerator;

/**
 * Class defines what module does on Shop events.
 */
class Events
{

    /**
     * Add necesary field to article table
     */
    public static function addFieldToArticleTable()
    {
        try {
            DatabaseProvider::getDb()->execute(
                    "ALTER TABLE `oxarticles` ADD COLUMN `RS_UNIT_BASE` DOUBLE NOT NULL DEFAULT 1;"
                );
        } catch (\Exception $e) {
            echo 'Exception abgefangen: ',  $e->getMessage(), "\n";
        }
    }

    /**
     * Execute action on activate event
     */
    public static function onActivate()
    {
        self::addFieldToArticleTable();
        self::regenerateViews();
    }

    /**
     * Execute action on deactivate event
     *
     * @return null
     */
    public static function onDeactivate()
    {

    }

    private static function regenerateViews() {
        $viewsGenerator = new ViewsGenerator();
        $viewsGenerator->generate();
    }
}
