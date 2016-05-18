{extends file="../dashboard/default.tpl"}
{block name=assets append}
    <script src="{site_url("bower_components/angular/angular.min.js")}"></script>
    <script src="{site_url("assets/js/account/script.js")}"></script>
    <link rel="stylesheet" href="{base_url('stylesheets/account.css')}">
{/block}

{block name="content"}
    <div class="container main" ng-app="account" ng-controller="accountData">
        <div class="page-header">
            <h1>{literal}{{title}}{/literal}</h1>
            <a href="javascript:void(0);" class="btn btn-success">Add new +</a>
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
            <tr ng-repeat="rows in myData" data-id="{literal}{{rows.id}}{/literal}" class="{literal}{{rows.credit == 1 ? 'credit' : ''}}{/literal}" >
                <td>{literal}{{$index + 1}}{/literal}</td>
                <td>{literal}{{rows.summa}}{/literal}.-</td>
                <td>{literal}{{rows.desc}}{/literal}</td>
                <td>{literal}{{rows.date_created}}{/literal}</td>
                <td>{literal}{{rows.date_due}}{/literal}</td>
                <td>
                    <a href="javascript:void(0);" class="btn btn-xs btn-success" data-id="{literal}{{rows.id}}{/literal}" ng-click="edit($event);">Edit</a>
                    <a href="javascript:void(0);" class="btn btn-xs btn-info" data-id="{literal}{{rows.id}}{/literal}" ng-click="complete($event);">complete</a>
                    <a href="javascript:void(0);" class="btn btn-xs btn-danger" data-id="{literal}{{rows.id}}{/literal}" ng-click="delete($event);">remove</a>

                </td>
            </tr>
            </tbody>
        </table>
        <div class="total">Total: {literal}{{getTotal()}}{/literal}.- EUR</div>
    </div>
{/block}
