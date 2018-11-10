[{if $oUnitPrice}]
    [{$oDetailsProduct->oxarticles__oxunitquantity->value}] [{$oDetailsProduct->getUnitName()}] | <span id="productPriceUnit">[{oxprice price=$oUnitPrice currency=$currency}]/[{$oDetailsProduct->getBaseUnitName()}]</span>
[{/if}]