<?php

namespace Rheinstruktur\BasePrice\Core;

class Price extends Price_parent
{

    /**
     * Multiplies price by given value depending on price entering mode,
     * and recalculates price
     *
     * @param double $dValue value for multiplying price
     */
    public function multiplyUnrounded($dValue)
    {
        $dPrice = $this->getPriceUnrounded();
        $this->setPrice($dPrice * $dValue);
    }

    /**
     * Returns price depending on mode brutto or netto
     *
     * @return double
     */
    public function getPriceUnrounded()
    {
        if ($this->isNettoMode()) {
            return $this->getNettoPriceUnrounded();
        } else {
            return $this->getBruttoPriceUnrounded();
        }
    }


    /**
     * Returns brutto price
     *
     * @return double
     */
    public function getBruttoPriceUnrounded()
    {
        if ($this->isNettoMode()) {
            return $this->getNettoPriceUnrounded() + $this->getVatValue();
        } else {
            return $this->_dBrutto;
        }
    }

    /**
     * Returns netto price
     *
     * @return double
     */
    public function getNettoPriceUnrounded()
    {
        if ($this->isNettoMode()) {
            return $this->_dNetto;
        } else {
            return $this->getBruttoPriceUnrounded() - $this->getVatValue();
        }
    }

}
