<?php
declare(strict_types=1);

use App\Controllers\CoursesAPIController;
use Slim\App;
use Slim\Views\PhpRenderer;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $container = $app->getContainer();

    //demo code - two ways of linking urls to functionality, either via anon function or linking to a controller

    $app->get('/', function ($request, $response, $args) use ($container) {
        $renderer = $container->get(PhpRenderer::class);
        return $renderer->render($response, "shoppinglist.php", $args);
    });

    $app->get('/courses', CoursesAPIController::class);
    $app->get('/shoppinglist',\App\Controllers\DisplayShoppingListController::class);
    $app->post('/addItem', \App\Controllers\AddItemShoppingListController::class);
    $app->get('/purchased/{itemId}',\App\Controllers\HideItemWhenPurchasedController::class);
    $app->get('/purchaseditems',\App\Controllers\PurchasedItemsController::class);

};
