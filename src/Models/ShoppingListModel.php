<?php

namespace App\Models;

use App\Entities\ShoppingListEntity;

class ShoppingListModel
{
    private \PDO $db;

    /**
     * @param \PDO $db
     */
    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getItems()
    {
        $query = $this->db->prepare('SELECT `id`,`items` FROM `shoppinglist` WHERE `purchased` = 0');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS,ShoppingListEntity::class);
        return $query->fetchAll();
    }
    public function addItem(string $item)
    {
        $query = $this->db->prepare('INSERT INTO `shoppinglist` (`items`) VALUES (?)');
       return  $query->execute([$item]);
    }
    public function markAsPurchased($itemId): bool
    {
        $query = $this->db->prepare('UPDATE `shoppinglist` SET `purchased` = 1 WHERE `id` = ?');
        return $query->execute([$itemId]);
    }
    public function getPurchasedItems(): array
    {
        $query = $this->db->prepare('SELECT `id`,`items` FROM `shoppinglist` WHERE `purchased` = 1');
        $query->execute();
        $query->setFetchMode(\PDO::FETCH_CLASS,ShoppingListEntity::class);
        return $query->fetchAll();
    }
}