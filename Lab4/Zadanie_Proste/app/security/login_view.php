<?php require_once dirname(__FILE__) .'/../../config.php';?>

<?php
include _ROOT_PATH.'/templates/top.php';
?>

            <!-- Main -->
            <div id="main" class="wrapper style1">
                <div class="container">
                    <header class="major">
                        <h2>Kalkulator kredytowy</h2>
                        <p>Logowanie</p>
                    </header>

                    <form action="<?php print(_APP_ROOT); ?>/app/security/login.php" method="post">
                        <div class="pure-g">
                            <div class="pure-u-2-5">
                                <label for="id_login" class="label">Login:</label>
                                <input id="id_login" type="text" name="login" value="<?php out($form['login']); ?>" />
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

                </div>
            </div>

            <?php
            include _ROOT_PATH.'/templates/bottom.php';
            ?>