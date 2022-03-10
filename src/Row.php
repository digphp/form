<?php

declare(strict_types=1);

namespace DigPHP\Form;

class Row implements ItemInterface
{
    private $body;

    public function __construct(Col ...$cols)
    {
        $this->body .= implode('', $cols);
    }

    public function __toString()
    {
        return '<div class="row">' . $this->body . '</div>';
    }
}
