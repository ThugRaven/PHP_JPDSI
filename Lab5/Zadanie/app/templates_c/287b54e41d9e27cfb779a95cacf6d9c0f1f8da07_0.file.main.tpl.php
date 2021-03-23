<?php
/* Smarty version 3.1.39, created on 2021-03-23 13:04:38
  from 'C:\xampp\htdocs\PHP\Lab5\Zadanie\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6059d9567af6e6_32782652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '287b54e41d9e27cfb779a95cacf6d9c0f1f8da07' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PHP\\Lab5\\Zadanie\\templates\\main.tpl',
      1 => 1616501075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6059d9567af6e6_32782652 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Kalkulator kredytowy</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.5/build/pure-min.css" integrity="sha384-LTIDeidl25h2dPxrB2Ekgc9c7sEC3CWGM6HeFmuDNUjX76Ert4Z4IY714dhZHPLd" crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/css/style.css"/>
        <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
    </head>

    <body class="is-preload">
        <div id="page-wrapper">

            <!-- Header -->
            <header id="header">
                <h1 id="logo"><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Kalkulator kredytowy</a></h1>
                <nav id="nav">
                    <ul>
                        <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/index.php">Strona główna</a></li>
                            <?php if (!empty($_smarty_tpl->tpl_vars['role']->value)) {?>
                            <li>Zalogowano jako <?php echo $_smarty_tpl->tpl_vars['role']->value;?>
</li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/app/security/logout.php" class="button primary">Wyloguj się</a></li>
                            <?php } else { ?>
                            <li><a href="#" class="button primary">Zaloguj się</a></li>
                            <?php }?>
                    </ul>
                </nav>
            </header>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_410211976059d9567aadc6_41050614', 'content');
?>


            <!-- Footer -->
            <footer id="footer">
                <ul class="icons">
                    <li><a href="https://github.com/ThugRaven/PHP_JPDSI" target="_blank" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
                </ul>
                <ul class="copyright">
                    <li>&copy; Kamil Wesołowski. All rights reserved.</li><li>Design: <a href="http://html5up.net" target="blank">HTML5 UP</a></li>
                </ul>
            </footer>

        </div>

        <!-- Scripts -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.dropotron.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

    </body>
</html><?php }
/* {block 'content'} */
class Block_410211976059d9567aadc6_41050614 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_410211976059d9567aadc6_41050614',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości... <?php
}
}
/* {/block 'content'} */
}
