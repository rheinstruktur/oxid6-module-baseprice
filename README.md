# oxid6-module-baseprice
Module for OXID ESHOP 6.x to calculate the base price to a reference quantity

# Installation

## manually

1. download and rename directory "oxid6-module-baseprice" to "BasePrice"

2. copy BasePrice to [shoproot]/source/modules/rs/BasePrice

3. Add following to you composer.json:
```
"autoload": {
    "psr-4": {
      "Rheinstruktur\\": "./source/modules/rs/"
    }
}
```

## via composer

composer require rheinstruktur/oxid6-module-baseprice (NOT CONFIGURED YET!)

## flow-theme

Because of missing blocks in flow-theme, some templates need to be adjusted manually.

Please see instructions in install/install.tpl


