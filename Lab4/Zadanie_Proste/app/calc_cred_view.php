<?php require_once dirname(__FILE__) .'/../config.php';?>

<?php
include _ROOT_PATH.'/templates/top.php';
?>

            <!-- Main -->
            <div id="main" class="wrapper style1">
                <div class="container">
                    <header class="major">
                        <h2>Kalkulator kredytowy</h2>
                        <p>Proste szablonowanie</p>
                    </header>

                    <form action="<?php print(_APP_ROOT); ?>/app/calc_cred.php" method="post">
                        <div class="pure-g">
                            <div class="pure-u-2-5">
                                <label for="id_amount" class="label">Kwota: </label>
                                <input id="id_amount" type="text" name="amount" value="<?php out($form_calc['amount']) ?>"/>
                                <label for="id_years" class="label">Liczba lat: </label>
                                <input id="id_years" type="text" name="years" value="<?php out($form_calc['years']) ?>" />
                                <label for="id_interest" class="label">Oprocentowanie: </label>
                                <input id="id_interest" type="text" name="interest" value="<?php out($form_calc['interest']) ?>" />
                                <br />
                                <ul class="actions">
                                    <li><input type="submit" value="Oblicz" class="primary"></li>
                                    <!--<li><input type="reset" value="Reset"></li>-->
                                </ul>
                            </div>
                        </div>
                    </form>

                    <?php
                    if (isset($messages)) {
                        if (count($messages) > 0) {
                            echo '<ol class="message error-message">';
                            foreach ($messages as $key => $msg) {
                                echo '<li>' . $msg . '</li>';
                            }
                            echo '</ol>';
                        }
                    }
                    ?>

                    <?php if (isset($result)) { ?>
                        <div class="message success-message">
                            <?php echo 'Miesięczna rata: ' . round($result, 2) . ' zł' ?>
                        </div>
                    <?php } ?>

                </div>
            </div>
            
            <?php
            include _ROOT_PATH.'/templates/bottom.php';
            ?>