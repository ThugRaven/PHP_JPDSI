<?php
/* Smarty version 3.1.39, created on 2021-03-20 21:32:35
  from 'C:\xampp\htdocs\PHP\Lab4\Zadanie_Smarty\app\security\login_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60565be3d20c43_88276812',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '680be4951768eaa85f823f1209433ad0e430c77d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Lab4\\Zadanie_Smarty\\app\\security\\login_view.tpl',
      1 => 1616272259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60565be3d20c43_88276812 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144169232960565be3d13709_66495350', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['root_path']->value)."/templates/main.tpl");
}
/* {block 'content'} */
class Block_144169232960565be3d13709_66495350 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_144169232960565be3d13709_66495350',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <!-- Main -->
    <div id="main" class="wrapper style1">
        <div class="container">
            <header class="major">
                <h2>Kalkulator kredytowy</h2>
                <p><?php echo $_smarty_tpl->tpl_vars['header_description']->value;?>
</p>
            </header>

            <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/security/login.php" method="post">
                <div class="pure-g">
                    <div class="pure-u-2-5">
                        <label for="id_login" class="label">Login:</label>
                        <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['login'];?>
" />
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

            <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
                <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
                    <ol class="message error-message">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                            <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ol>
                <?php }?>
            <?php }?>

        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
