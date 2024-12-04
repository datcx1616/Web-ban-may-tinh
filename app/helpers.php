<?php

/**
 * if in day discount (sale)
 * @param array $sale_start
 * @param array $sale_end
 */
if(!function_exists("isDiscount")) {
    function isDiscount($sale_start, $sale_end) {
        if ($sale_start && $sale_end) {
            $currentDate = new DateTime('now');
            return ($currentDate >= new DateTime($sale_start) && $currentDate <= new DateTime($sale_end)) ? true : false;
        }
        return false;
    }
}

/**
 * Calculate price after discount
 * @param Number $priceOld
 * @param Number $discountPercentage
 * @return Number $price
 */
if(!function_exists("calcSalePrice")) {
    function calcSalePrice($priceOld, $discountPercentage) {
        return ($priceOld * (100 - $discountPercentage) / 100);
    }
}
