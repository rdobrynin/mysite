<?php
/* Smarty version 3.1.29, created on 2016-05-10 10:53:32
  from "/Applications/MAMP/htdocs/mysite/application/views/templates/default.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5731937c3a44a2_31104955',
  'file_dependency' => 
  array (
    'a72da298d2b7ca6bb3b38b7d264b75677fdf0ab3' => 
    array (
      0 => '/Applications/MAMP/htdocs/mysite/application/views/templates/default.tpl',
      1 => 1462866589,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5731937c3a44a2_31104955 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "assets", array (
  0 => 'block_5115532935731937c3452b9_44128387',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</head>
<body>
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_13509791215731937c361b75_37445530',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

<div class="content-wrapper">

    <div class="blankstate blankstate-alt">
        <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>
</h1>
    </div>
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "content", array (
  0 => 'block_21173695185731937c38d156_10986048',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        <footer>
            <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_5046872925731937c397171_57336022',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

        </footer>
</div>
</body>
</html><?php }
/* {block 'assets'}  file:default.tpl */
function block_5115532935731937c3452b9_44128387($_smarty_tpl, $_blockParentStack) {
?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="TODO">
        <meta name="author" content="Roman Dobrynin">
        <title><?php echo $_smarty_tpl->tpl_vars['data']->value['meta'];?>
</title>
        <link rel="stylesheet" href="<?php echo base_url('stylesheets/styles.css');?>
">
        <?php echo '<script'; ?>
 data-main="<?php echo base_url('scripts/app_main.js');?>
"
                src=<?php echo base_url('bower_components/requirejs/require.js');?>
><?php echo '</script'; ?>
>
    <?php
}
/* {/block 'assets'} */
/* {block 'header'}  file:default.tpl */
function block_13509791215731937c361b75_37445530($_smarty_tpl, $_blockParentStack) {
?>

    <header id="header" class="nav nav-top">
      <span><?php if ($_smarty_tpl->tpl_vars['data']->value['session'] == true) {
if ($_smarty_tpl->tpl_vars['user']->value) {?>Hello, <?php echo $_smarty_tpl->tpl_vars['user']->value['first_name'];?>
&nbsp;<?php }?><a href="<?php echo site_url("dashboard");?>
">My dashboard</a>&nbsp;|&nbsp;<a href="<?php echo site_url("auth/logout");?>
">logout</a><?php } else { ?><a href="<?php echo site_url("auth");?>
">login</a><?php }?></span>
    </header>
<?php
}
/* {/block 'header'} */
/* {block 'content'}  file:default.tpl */
function block_21173695185731937c38d156_10986048($_smarty_tpl, $_blockParentStack) {
?>

        <div class="main">
            <p>Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue. Integer
                posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit
                sit amet non magna. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia
                bibendum nulla sed consectetur. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Praesent commodo cursus magna, vel
                scelerisque nisl consectetur et. Curabitur blandit tempus
                porttitor. Maecenas faucibus mollis interdum. Lorem ipsum dolor sit amet, consectetur adipiscing
                elit.</p>
        </div>
    <?php
}
/* {/block 'content'} */
/* {block 'footer'}  file:default.tpl */
function block_5046872925731937c397171_57336022($_smarty_tpl, $_blockParentStack) {
?>

            <div class="content">
                <small class="copyright">&copy; <?php echo date('Y');?>
 by Roman Dobrynin</small>
            </div>
            <?php
}
/* {/block 'footer'} */
}
