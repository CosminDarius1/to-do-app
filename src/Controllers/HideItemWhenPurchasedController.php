<?php

namespace App\Controllers;

use App\Models\ShoppingListModel;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Slim\Views\PhpRenderer;

class HideItemWhenPurchasedController
{
    private ShoppingListModel $model;
    private PhpRenderer $view;

    /**
     * @param ShoppingListModel $model
     * @param PhpRenderer $view
     */
    public function __construct(ShoppingListModel $model, PhpRenderer $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    public function __invoke(RequestInterface $request,ResponseInterface $response, array $args)
    {
        $this->model->markAsPurchased($args['itemId']);
        return $response->withStatus(302)->withHeader('Location','/shoppinglist');
    }


}