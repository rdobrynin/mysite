<?php
/* Smarty version 3.1.29, created on 2016-04-20 11:36:32
  from "/Applications/MAMP/htdocs/mysite/application/views/templates/default.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57173f9018e489_70120727',
  'file_dependency' => 
  array (
    'a72da298d2b7ca6bb3b38b7d264b75677fdf0ab3' => 
    array (
      0 => '/Applications/MAMP/htdocs/mysite/application/views/templates/default.tpl',
      1 => 1461141390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57173f9018e489_70120727 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "assets", array (
  0 => 'block_39762917757173f90151fd0_42922938',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</head>
<body>
<a class="github-fork-ribbon" href="https://github.com/rdobrynin/mysite" title="Fork me on GitHub">Fork me on GitHub</a>
<?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "header", array (
  0 => 'block_38232148257173f9016da63_04236584',
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
  0 => 'block_135883160057173f901779e8_49826920',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

    <?php 
$_smarty_tpl->ext->_inheritance->processBlock($_smarty_tpl, 0, "footer", array (
  0 => 'block_184709458057173f901811b5_48835383',
  1 => false,
  3 => 0,
  2 => 0,
));
?>

</div>
</body>
</html><?php }
/* {block 'assets'}  file:default.tpl */
function block_39762917757173f90151fd0_42922938($_smarty_tpl, $_blockParentStack) {
?>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="TODO">
        <meta name="author" content="Roman Dobrynin">
        <title><?php echo $_smarty_tpl->tpl_vars['data']->value['meta'];?>
</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.0/gh-fork-ribbon.min.css" />
        <!--[if lt IE 9]>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.0/gh-fork-ribbon.ie.min.css" />
        <![endif]-->
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
function block_38232148257173f9016da63_04236584($_smarty_tpl, $_blockParentStack) {
?>

    <header id="header" class="nav nav-top">

    </header>
<?php
}
/* {/block 'header'} */
/* {block 'content'}  file:default.tpl */
function block_135883160057173f901779e8_49826920($_smarty_tpl, $_blockParentStack) {
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
function block_184709458057173f901811b5_48835383($_smarty_tpl, $_blockParentStack) {
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
