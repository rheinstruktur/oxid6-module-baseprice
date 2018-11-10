in listitem_grid.tpl / listite_infogrid.tpl / bargainitems.tpl

replace:
[{$product->oxarticles__oxunitquantity->value}] [{$product->getUnitName()}] | [{oxprice price=$oUnitPrice currency=$currency}]/[{$product->getUnitName()}]

with:
[{*RS BASEPRICE - START*}]
[{if $oViewConf->isModuleActive('rs_baseprice')}]
    [{$product->oxarticles__oxunitquantity->value}] [{$product->getUnitName()}] | [{oxprice price=$oUnitPrice currency=$currency}]/[{$product->getBaseUnitName()}]
[{else}]
    [{$product->oxarticles__oxunitquantity->value}] [{$product->getUnitName()}] | [{oxprice price=$oUnitPrice currency=$currency}]/[{$product->getUnitName()}]
[{/if}]
[{*RS BASEPRICE - END*}]