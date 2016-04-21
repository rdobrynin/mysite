<!doctype html>
<html lang="en">
<head>
    {block name="assets"}
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="TODO">
        <meta name="author" content="Roman Dobrynin">
        <title>{$data['meta']}</title>
        <link rel="stylesheet" href="{base_url('stylesheets/styles.css')}">
        <script data-main="{base_url('scripts/app_main.js')}"
                src={base_url('bower_components/requirejs/require.js')}></script>
    {/block}
</head>
<body>
{block name="header"}
    <header id="header" class="nav nav-top">

    </header>
{/block}
<div class="content-wrapper">

    <div class="blankstate blankstate-alt">
        <h1>{$data['title']}</h1>
    </div>
    {block name="content"}
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
    {/block}
    {block name="footer"}
        <footer>
            <div class="content">
                <small class="copyright">&copy; {'Y'|date} by Roman Dobrynin</small>
            </div>
        </footer>
    {/block}
</div>
</body>
</html>