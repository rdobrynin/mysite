<?php
/* Smarty version 3.1.29, created on 2016-03-17 15:42:18
  from "/Applications/MAMP/htdocs/mysite/application/views/templates/default.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56eab43a478501_80107679',
  'file_dependency' => 
  array (
    'a72da298d2b7ca6bb3b38b7d264b75677fdf0ab3' => 
    array (
      0 => '/Applications/MAMP/htdocs/mysite/application/views/templates/default.tpl',
      1 => 1458222137,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56eab43a478501_80107679 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "assets", array (
  0 => 'block_94101336956eab43a453d34_14005892',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</head>
<body>
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_121255336856eab43a46dd72_27584188',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_56305646756eab43a4740a4_96646851',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</body>
</html><?php }
/* {block 'assets'}  file:default.tpl */
function block_94101336956eab43a453d34_14005892($_smarty_tpl, $_blockParentStack) {
?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Bondora home exercise">
        <meta name="author" content="Roman Dobrynin">
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="stylesheet" href="<?php echo base_url('stylesheets/styles.css');?>
">
        <?php echo '<script'; ?>
 data-main="<?php echo base_url('scripts/app_main.js');?>
" src=<?php echo base_url('bower_components/requirejs/require.js');?>
><?php echo '</script'; ?>
>
    <?php
}
/* {/block 'assets'} */
/* {block 'header'}  file:default.tpl */
function block_121255336856eab43a46dd72_27584188($_smarty_tpl, $_blockParentStack) {
?>

<header id="header">

</header>
<?php
}
/* {/block 'header'} */
/* {block 'footer'}  file:default.tpl */
function block_56305646756eab43a4740a4_96646851($_smarty_tpl, $_blockParentStack) {
?>

    <footer>

    </footer>
<?php
}
/* {/block 'footer'} */
}
