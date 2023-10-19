<?php

namespace App\Controllers;

use App\Models\ShoppingListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class DisplayShoppingListController
{
    private ShoppingListModel $model;
    private PhpRenderer $views;

    /**
     * @param ShoppingListModel $model
     */
    public function __construct(ShoppingListModel $model, PhpRenderer $views)
    {
        $this->model = $model;
        $this->views = $views;

    }

    public function __invoke(RequestInterface $request,ResponseInterface $response)
    {
        $items = $this->model->getItems();
        return $this->views->render($response,"shoppinglist.php",['shoppinglist'=>$items]);

    }
}