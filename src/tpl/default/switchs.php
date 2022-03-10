<script>
    $(function() {
        $("#{$id}_handle > div > input").bind("click", function() {
            $("#" + $(this).attr('id') + "_target").removeClass('d-none').siblings().addClass('d-none')
        });
    });
</script>
<div class="mt-2">
    <label class="form-label">{$label}</label>
    <div id="{$id}_handle">
        {foreach $switchs??[] as $key=>$vo}
        <div class="form-check form-check-inline">
            {if $vo['value'] == $value}
            <input class="form-check-input" type="radio" name="{$name}" id="{$id}_{:md5($key)}" value="{$vo.value}" checked>
            {else}
            <input class="form-check-input" type="radio" name="{$name}" id="{$id}_{:md5($key)}" value="{$vo.value}">
            {/if}
            <label class="form-check-label" for="{$id}_{:md5($key)}">{$vo.label}</label>
        </div>
        {/foreach}
    </div>
    <div class="border bg-light mt-2 p-3">
        {foreach $switchs??[] as $key => $vo}
        <div id="{$id}_{:md5($key)}_target" class="{echo $vo['value']!=$value?'d-none':''}">
            {echo $vo['body']}
        </div>
        {/foreach}
    </div>
    {if isset($help) && $help}
    <div class="form-text text-muted" style="font-size: .8em;">{echo $help}</div>
    {/if}
</div>