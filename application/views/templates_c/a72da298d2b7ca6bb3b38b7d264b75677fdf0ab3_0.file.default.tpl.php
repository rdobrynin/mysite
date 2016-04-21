<?php
/* Smarty version 3.1.29, created on 2016-04-21 16:30:03
  from "/Applications/MAMP/htdocs/mysite/application/views/templates/default.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5718d5db80b382_81748404',
  'file_dependency' => 
  array (
    'a72da298d2b7ca6bb3b38b7d264b75677fdf0ab3' => 
    array (
      0 => '/Applications/MAMP/htdocs/mysite/application/views/templates/default.tpl',
      1 => 1461245396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5718d5db80b382_81748404 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "assets", array (
  0 => 'block_7192162695718d5db7cde27_63556565',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</head>
<body>
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_654491245718d5db7e9b43_33471274',
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
  0 => 'block_15590395915718d5db7f39c1_43986615',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_3894567585718d5db7fd871_26587066',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</div>
</body>
</html><?php }
/* {block 'assets'}  file:default.tpl */
function block_7192162695718d5db7cde27_63556565($_smarty_tpl, $_blockParentStack) {
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
function block_654491245718d5db7e9b43_33471274($_smarty_tpl, $_blockParentStack) {
?>

    <header id="header" class="nav nav-top">

    </header>
<?php
}
/* {/block 'header'} */
/* {block 'content'}  file:default.tpl */
function block_15590395915718d5db7f39c1_43986615($_smarty_tpl, $_blockParentStack) {
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
function block_3894567585718d5db7fd871_26587066($_smarty_tpl, $_blockParentStack) {
?>

        <footer>
            <div class="content">
                <small class="copyright">&copy; <?php echo date('Y');?>
 by Roman Dobrynin</small>
            </div>
        </footer>
    <?php
}
/* {/block 'footer'} */
}
