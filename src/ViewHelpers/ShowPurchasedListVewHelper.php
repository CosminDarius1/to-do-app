<?php

namespace App\ViewHelpers;

class ShowPurchasedListVewHelper
{

    public static function showPurchased(array $purchasedlist): string
    {
        $output = '';
        foreach ($purchasedlist as $list) {
            $output .= '<li>' . $list->getItems() . '</li>';
        }
        return $output;
    }

}