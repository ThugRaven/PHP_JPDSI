{extends file="$root_path/templates/main.tpl"}

{block name=content}

    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Kalkulator kredytowy</h2>
                <p>{$header_description}</p>
            </header>

            <form action="{$app_url}/app/security/login.php" method="post">
                <div class="pure-g">
                    <div class="pure-u-2-5">
                        <label for="id_login" class="label">Login:</label>
                        <input id="id_login" type="text" name="login" value="{$form['login']}" />
                        <label for="id_pass" class="label">Hasło:</label>
                        <input id="id_pass" type="password" name="pass" />
                        <br />
                        <ul class="actions">
                            <li><input type="submit" value="Zaloguj" class="primary"></li>
                            <!--<li><input type="reset" value="Reset"></li>-->
                        </ul>
                    </div>
                </div>
            </form>	

            {if isset($messages)}
                {if count($messages) > 0} 
                    <ol class="message error-message">
                        {foreach  $messages as $msg}
                            {strip}
                                <li>{$msg}</li>
                                {/strip}
                            {/foreach}
                    </ol>
                {/if}
            {/if}

        </div>
    </div>
{/block}