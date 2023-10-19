<?php

namespace App\Controllers;

use App\Models\ShoppingListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class AddItemShoppingListController
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

    public function __invoke(RequestInterface $request,ResponseInterface $response)
    {
        $data = $request->getParsedBody();
        $this->model->addItem($data['item']);
        return $response->withStatus(302)->withHeader('Location','/shoppinglist');
    }

}