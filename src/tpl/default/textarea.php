<div class="mt-2">
    <label for="{$id}_field" class="form-label">{$label}</label>
    <textarea name="{$name}" class="form-control" id="{$id}_field" rows="{$rows??'3'}">{$value}</textarea>
    {if isset($help) && $help}
    <div class="form-text text-muted" style="font-size: .8em;">{echo $help}</div>
    {/if}
</div>