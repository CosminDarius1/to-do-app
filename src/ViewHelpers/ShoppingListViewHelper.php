<?php

namespace App\ViewHelpers;

class ShoppingListViewHelper
{
    public static function displayShoppingList(array $shoppinglist): string
    {
        $output = '';
        foreach ($shoppinglist as $list) {
            $output .= '<li>' . $list->getItems() . ' <a class="btn btn-primary" href="/purchased/' . $list->getId() . '" >Purchased</a>' . '</li>';
        }
        return $output;
    }
}