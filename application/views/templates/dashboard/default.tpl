<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Dashboard</title>
    {block name="assets"}
        <!-- Bootstrap -->
        <link href="{site_url("assets/css/bootstrap.min.css")}" rel="stylesheet">
        <link href="{site_url("assets/css/custom.css")}" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{site_url("assets/js/bootstrap.min.js")}"></script>
    {/block}
</head>
<body>
{block name="header"}
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">To main</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li {if $data['section'] == 'dashboard'}class="active"{/if}><a href="{site_url('dashboard')}">Dashboard</a></li>
                <li {if $data['section'] == 'admin'}class="active"{/if}><a href="{site_url("admin")}">Admin</a></li>
                <li {if $data['section'] == 'editor'}class="active"{/if}><a href="{site_url("editor")}">Editor</a></li>
                <li {if $data['section'] == 'author'}class="active"{/if}><a href="{site_url("author")}">Author</a></li>
                <li {if $data['section'] == 'account'}class="active"{/if}><a href="{site_url("account") }">Account App</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{site_url("auth/logout")}">logout</a></li>
            </ul>
        </div>
    </div>
</nav>
{/block}
{block name="content"}
<div class="container main">
    <div class="page-header">
        <h1>Dashboard</h1>
    </div>
</div>
{/block}
{block name="footer"}
<footer>
    <p class="text-center">&copy; 2016 Roman Dobrynin</p>
</footer>
{/block}
</body>
</html>
