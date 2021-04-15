{extends file="main.tpl"}

{block name=content}

    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Kalkulator kredytowy</h2>
                <p>{$header_description}</p>
            </header>

            <form action="{$conf->action_url}calcList" method="post">
                <div class="pure-g">
                    <div class="pure-u-2-5">
                        <label for="id_amount" class="label">Kwota: </label>
                        <input id="id_amount" type="text" name="amount" value="{$form->amount}"/>
                        <br />
                        <ul class="actions">
                            <li><input type="submit" value="Filtruj" class="button primary"></li>
                            <!--<li><input type="reset" value="Reset"></li>-->
                        </ul>
                    </div>
                </div>
            </form>

            {include file='messages.tpl'}

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>Kwota</th>
                            <th>Lata</th>
                            <th>Oprocentowanie</th>
                            <th>Miesięczna rata</th>
                            <th>Data obliczenia</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $records as $r}
                            {strip}
                                <tr>
                                    <td>{$r["amount"]} zł</td>
                                    <td>{$r["years"]}</td>
                                    <td>{$r["interest"]}%</td>
                                    <td>{$r["monthly_rate"]} zł</td>
                                    <td>{$r["date"]}</td>
                                    {if inRole('admin')}
                                        <td class="td-button">
                                            <a class="button primary small fit" href="{$conf->action_url}calcDelete&id={$r['id_calc']}">Usuń</a>     
                                        </td>
                                    {/if}
                                </tr>
                            {/strip}
                        {/foreach}
                    </tbody>
                </table>
            </div>

        </div>
    </div>
{/block}