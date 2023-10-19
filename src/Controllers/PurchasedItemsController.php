<?php

namespace App\Controllers;

use App\Models\ShoppingListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class PurchasedItemsController
{
    private ShoppingListModel $model;

    private PhpRenderer $views;

    /**
     * @param ShoppingListModel $model
     * @param PhpRenderer $views
     */
    public function __construct(ShoppingListModel $model, PhpRenderer $views)
    {
        $this->model = $model;
        $this->views = $views;
    }

    public function __invoke(RequestInterface $request, ResponseInterface $response)
    {
        $items = $this->model->getPurchasedItems();
        return $this->views->render($response,"purchaseditems.php",['shoppinglist'=>$items]);

    }

}