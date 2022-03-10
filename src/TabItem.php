<?php

declare(strict_types=1);

namespace DigPHP\Form;

class TabItem
{

    private $label;
    private $items = [];

    public function __construct(string $label)
    {
        $this->label = $label;
    }

    public function addItem(ItemInterface ...$items): self
    {
        array_unshift($this->items, ...$items);
        return $this;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getBody(): string
    {
        return implode('', $this->items);
    }
}
