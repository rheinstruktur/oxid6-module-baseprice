<?php

namespace Rheinstruktur\BasePrice\Application\Model;

use OxidEsales\Eshop\Core\Price;

class Article extends Article_parent
{

    /**
     * Returns price per unit
     *
     * @return string
     */
    public function getUnitPrice()
    {
        /** @var Price $oPrice */
        $oPrice = parent::getUnitPrice();

        if ($oPrice !== null) {
            $dUnitBaseAmount = $this->oxarticles__rs_unit_base->value;
            if($dUnitBaseAmount) {
                $oPrice->multiplyUnrounded((double) $dUnitBaseAmount);
            }
        }

        return $oPrice;
    }

    /**
     * @return string
     */
    public function getBaseUnitName()
    {
        $sUnitName = parent::getUnitName();

        if($sUnitName) {
            if($this->oxarticles__rs_unit_base->value > 1) {
                return $this->oxarticles__rs_unit_base . $sUnitName;
            }
            else {
                return $sUnitName;
            }
        }
    }

}
