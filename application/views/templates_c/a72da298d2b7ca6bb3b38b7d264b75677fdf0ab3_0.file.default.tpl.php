<?php
/* Smarty version 3.1.29, created on 2016-03-11 17:49:25
  from "/Applications/MAMP/htdocs/mysite/application/views/templates/default.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e2e905467d23_48709367',
  'file_dependency' => 
  array (
    'a72da298d2b7ca6bb3b38b7d264b75677fdf0ab3' => 
    array (
      0 => '/Applications/MAMP/htdocs/mysite/application/views/templates/default.tpl',
      1 => 1457711360,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e2e905467d23_48709367 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "assets", array (
  0 => 'block_127477123356e2e9054345d8_10951113',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</head>
<body>
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_149729499556e2e90545c8b9_91653901',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_210638930256e2e905463285_82341844',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</body>
</html><?php }
/* {block 'assets'}  file:default.tpl */
function block_127477123356e2e9054345d8_10951113($_smarty_tpl, $_blockParentStack) {
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
 src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>
"><?php echo '</script'; ?>
>
        <!--[if lte IE 8]>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
        <!--[if gt IE 8]>
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
        <?php echo '<script'; ?>
 src="<?php echo base_url('bower_components/jquery-ui/jquery-ui.min.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('bower_components/jquery-validation/dist/jquery.validate.min.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript"
                src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript"
                src="<?php echo base_url('bower_components/jquery-html5-placeholder-shim/jquery.html5-placeholder-shim.js');?>
"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo base_url('scripts/script.js');?>
"><?php echo '</script'; ?>
>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    <?php
}
/* {/block 'assets'} */
/* {block 'header'}  file:default.tpl */
function block_149729499556e2e90545c8b9_91653901($_smarty_tpl, $_blockParentStack) {
?>

<header id="header">

</header>
<?php
}
/* {/block 'header'} */
/* {block 'footer'}  file:default.tpl */
function block_210638930256e2e905463285_82341844($_smarty_tpl, $_blockParentStack) {
?>

    <footer>

    </footer>
<?php
}
/* {/block 'footer'} */
}
