{if $msgs->hasErrors()}
    <ol class="message error">
        {foreach  $msgs->getErrors() as $err}
            {strip}
                <li>{$err}</li>
                {/strip}
            {/foreach}
    </ol>
{/if}

{if $msgs->hasInfos()}
    <ol class="message success">
        {foreach  $msgs->getInfos() as $info}
            {strip}
                <li>{$info}</li>
                {/strip}
            {/foreach}
    </ol>
{/if}
