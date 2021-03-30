{extends file=$conf->root_path|cat:"/templates/main.tpl"}

{block name=content}

    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Kalkulator kredytowy</h2>
                <p>{$header_description}</p>
            </header>

            <form action="{$conf->action_root}calcCompute" method="post">
                <div class="pure-g">
                    <div class="pure-u-2-5">
                        <label for="id_amount" class="label">Kwota: </label>
                        <input id="id_amount" type="text" name="amount" value="{$form_calc->amount}"/>
                        <label for="id_years" class="label">Liczba lat: </label>
                        <input id="id_years" type="text" name="years" value="{$form_calc->years}" />
                        <label for="id_interest" class="label">Oprocentowanie: </label>
                        <input id="id_interest" type="text" name="interest" value="{$form_calc->interest}" />
                        <br />
                        <ul class="actions">
                            <li><input type="submit" value="Oblicz" class="primary"></li>
                            <!--<li><input type="reset" value="Reset"></li>-->
                        </ul>
                    </div>
                </div>
            </form>

            {if $messages->hasErrors()}
                <ol class="message error-message">
                    {foreach  $messages->getErrors() as $err}
                        {strip}
                            <li>{$err}</li>
                            {/strip}
                        {/foreach}
                </ol>
            {/if}

            {if isset($result)}
                <div class="message success-message">
                    Miesięczna rata: {round($result, 2)} zł
                </div>
            {/if}

        </div>
    </div>
{/block}