<?php

namespace App\Entities;

class ShoppingListEntity implements \JsonSerializable
{
    private int $id;
    private string $items;

    private bool $purchased;

    public function getId(): int
    {
        return $this->id;
    }



    public function getItems(): string
    {
        return $this->items;
    }

    public function isPurchased():bool
    {
        return $this->purchased;
    }

    public function jsonSerialize(): array
    {
        return [
            "id" => $this->id,
            "items"=>$this->items,
            "purchased"=>$this->purchased
        ];
    }
}