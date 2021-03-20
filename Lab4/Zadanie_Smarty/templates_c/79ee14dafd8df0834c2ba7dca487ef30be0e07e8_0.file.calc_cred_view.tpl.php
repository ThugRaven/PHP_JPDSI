<?php
/* Smarty version 3.1.39, created on 2021-03-20 21:32:18
  from 'C:\xampp\htdocs\PHP\Lab4\Zadanie_Smarty\app\calc_cred_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60565bd2b0a245_34911841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '79ee14dafd8df0834c2ba7dca487ef30be0e07e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Lab4\\Zadanie_Smarty\\app\\calc_cred_view.tpl',
      1 => 1616272257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60565bd2b0a245_34911841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134043204560565bd2afb8c9_95995145', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['root_path']->value)."/templates/main.tpl");
}
/* {block 'content'} */
class Block_134043204560565bd2afb8c9_95995145 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134043204560565bd2afb8c9_95995145',
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
/app/calc_cred.php" method="post">
                <div class="pure-g">
                    <div class="pure-u-2-5">
                        <label for="id_amount" class="label">Kwota: </label>
                        <input id="id_amount" type="text" name="amount" value="<?php echo $_smarty_tpl->tpl_vars['form_calc']->value['amount'];?>
"/>
                        <label for="id_years" class="label">Liczba lat: </label>
                        <input id="id_years" type="text" name="years" value="<?php echo $_smarty_tpl->tpl_vars['form_calc']->value['years'];?>
" />
                        <label for="id_interest" class="label">Oprocentowanie: </label>
                        <input id="id_interest" type="text" name="interest" value="<?php echo $_smarty_tpl->tpl_vars['form_calc']->value['interest'];?>
" />
                        <br />
                        <ul class="actions">
                            <li><input type="submit" value="Oblicz" class="primary"></li>
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

            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                <div class="message success-message">
                    Miesięczna rata: <?php echo round($_smarty_tpl->tpl_vars['result']->value,2);?>
 zł
                </div>
            <?php }?>

        </div>
    </div>
<?php
}
}
/* {/block 'content'} */
}
