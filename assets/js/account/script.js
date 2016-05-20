'use strict';

var app = angular.module('account', []);

// Account controller
app.controller('accountData', function ($scope, $http) {

    $http.get('account/getDataAjax', {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    }).
    success(function (response, status, headers, config) {
        $scope.title = response.header;
        $scope.myData = response.data.account;
        $scope.getTotal = function(){
            var total = 0;
            for(var i = 0; i < response.data.account.length; i++){
                if(response.data.account[i].credit == false) {
                    total += parseInt(response.data.account[i].summa);

                }
                if(response.data.account[i].credit == true) {
                    total -= parseInt(response.data.account[i].summa);
                }
            }
            return total;
        };


        $scope.refresh = function(){
            $http.get('account/getDataAjax', {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            }).success(function(response, status, headers, config){
                $scope.myData = response.data.account;
                $scope.getTotal = function(){
                    var total = 0;
                    for(var i = 0; i < response.data.account.length; i++){
                        if(response.data.account[i].credit == false) {
                            total += parseInt(response.data.account[i].summa);
                        }
                        if(response.data.account[i].credit == true) {
                            total -= parseInt(response.data.account[i].summa);
                        }
                    }
                    return total;
                };
            }).error(function(data){

            });
        };

        $scope.delete = function(e) {
            if (confirm('Are you sure to delete?')) {
                var id = $(e.target).data('id');
                $http.delete('account/removeItem/' + id);
                $scope.refresh();
            }
        };

        $scope.complete = function(e) {
            var id = $(e.target).data('id');
            console.log(id);
        };

        $scope.edit = function(e) {
            var id = $(e.target).data('id');
            console.log(id);
        };

        $scope.addNew = function() {
            console.log('add new');
        };
    }).
    error(function (data, status, headers, config) {
        // log error
    });
});


