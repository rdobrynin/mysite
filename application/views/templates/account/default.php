
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Dashboard</title>
        <!-- Bootstrap -->
        <link href="<?php print(site_url());?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php print(site_url());?>assets/css/custom.css" rel="stylesheet">
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
    <script src="<?php print(site_url());?>assets/js/bootstrap.min.js"></script>
    <script src="<?php print(site_url());?>bower_components/angular/angular.min.js"></script>
    <script src="<?php print(site_url());?>assets/js/account/script.js"></script>
        <link rel="stylesheet" href="<?php print(site_url());?>stylesheets/account.css">
</head>
<body>
<pre>
    </pre>
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
                    <li><a href="<?php print(site_url());?>dashboard">Dashboard</a></li>
                    <li><a href="<?php print(site_url());?>admin">Admin</a></li>
                    <li><a href="<?php print(site_url());?>editor">Editor</a></li>
                    <li><a href="<?php print(site_url());?>author">Author</a></li>
                    <li class="active"><a href="<?php print(site_url());?>account">Account App</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php print(site_url());?>auth/logout">logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container main" ng-app="account" ng-controller="accountData">
        <div class="page-header">
            <h1>{{title}}</h1>
            <a href="javascript:void(0);" class="btn btn-success" ng-click="addNew()">Add new +</a>
        </div>
        <table class="table table-striped" id="account-table">
            <thead>
            <tr>
                <th>#</th>
                <th>Summa</th>
                <th>Description</th>
                <th>Date created</th>
                <th>Due to</th>
                <th>Edit</th>
            </tr>
            </thead>
            <tbody>
            <tr ng-repeat="rows in myData" data-id="{{rows.id}}" class="{{rows.credit == 1 ? 'credit' : ''}}" >
                <td>{{$index + 1}}</td>
                <td>{{rows.summa}}.-</td>
                <td>{{rows.desc}}</td>
                <td>{{rows.date_created | date:'fullDate'}}</td>
                <td>{{rows.date_due ? (rows.date_due | date:'fullDate') : '-'}}</td>
                <td>
                    <a href="javascript:void(0);" class="btn btn-xs btn-success" data-id="{{rows.id}}" ng-click="edit($event);">Edit</a>
                    <a href="javascript:void(0);" class="btn btn-xs btn-info" data-id="{{rows.id}}" ng-click="complete($event);">complete</a>
                    <a href="javascript:void(0);" class="btn btn-xs btn-danger" data-id="{{rows.id}}" ng-click="delete($event);">remove</a>
                </td>
            </tr>
            </tbody>
        </table>
        <div class="total">Total: {{getTotal()}}.- EUR</div>
    </div>
    <footer>
        <p class="text-center">&copy; 2016 Roman Dobrynin</p>
    </footer>
</body>
</html>























