<?php
/* Smarty version 3.1.29, created on 2016-03-11 17:27:47
  from "/Applications/MAMP/htdocs/mysite/application/views/templates/example.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56e2e3f365e6e2_98705620',
  'file_dependency' => 
  array (
    'bb55850411b84ceecf7694483cf9e1d16be4e606' => 
    array (
      0 => '/Applications/MAMP/htdocs/mysite/application/views/templates/example.tpl',
      1 => 1457710065,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56e2e3f365e6e2_98705620 ($_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bondora home exercise">
    <meta name="author" content="Roman Dobrynin">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo base_url('stylesheets/styles.css');?>
">
    <!--[if !IE]><!-->
    <?php echo '<script'; ?>
 src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js');?>
"><?php echo '</script'; ?>
>
    <!--<![endif]-->

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
</head>
<body>

</body>
</html><?php }
}
