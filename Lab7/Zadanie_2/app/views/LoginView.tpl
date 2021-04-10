{extends file="main.tpl"}

{block name=content}

    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Kalkulator kredytowy</h2>
                <p>{$header_description}</p>
            </header>

            <form action="{$conf->action_url}login" method="post">
                <div class="pure-g">
                    <div class="pure-u-2-5">
                        <label for="id_login" class="label">Login: </label>
                        <input id="id_login" type="text" name="login" value="{$form->login}"/>
                        <label for="id_pass" class="label">Hasło: </label>
                        <input id="id_pass" type="password" name="pass" value="{$form->pass}" />
                        <br />
                        <ul class="actions">
                            <li><input type="submit" value="Zaloguj" class="primary"></li>
                            <!--<li><input type="reset" value="Reset"></li>-->
                        </ul>
                    </div>
                </div>
            </form>

            {include file='messages.tpl'}

        </div>
    </div>
{/block}