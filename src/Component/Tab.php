<?php

declare(strict_types=1);

namespace DigPHP\Form\Component;

use DigPHP\Form\ItemInterface;

class Tab implements ItemInterface
{

    private $items = [];
    private $label = [];

    public function __construct(string $label)
    {
        $this->label = $label;
    }

    public function addItem(TabItem ...$items): self
    {
        foreach ($items as $item) {
            $this->items[] = [
                'label' => $item->getLabel(),
                'body' => $item->getBody(),
            ];
        }
        return $this;
    }

    public function __toString()
    {

        $tpl = <<<'str'
<?php
$_id = 'nav_' . uniqid();
?>
<ul class="{$class??'nav nav-tabs'}" role="tablist">
    {foreach $tabs as $key => $vo}
    <li class="nav-item" role="presentation">
        <a class="nav-link {if !$key}active{/if}" id="tab_{$_id}{$key}" data-toggle="tab" href="#{$_id}{$key}" role="tab" aria-controls="{$_id}{$key}" aria-selected="{if !$key}true{else}false{/if}">{$vo.label}</a>
    </li>
    {/foreach}
</ul>
<div class="tab-content">
    {foreach $tabs as $key => $vo}
    <div class="tab-pane fade py-2 {if !$key}show active{/if}" id="{$_id}{$key}" role="tabpanel" aria-labelledby="{$_id}{$key}-tab">{echo $vo['body']}</div>
    {/foreach}
</div>
str;
        return Builder::getTemplate()->renderFromString($tpl, [
            'label' => $this->label,
            'items' => $this->items,
        ]);
    }
}
