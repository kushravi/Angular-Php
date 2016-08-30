var app = angular.module("myApp",["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "views/main.html",
        controller : "AuthCtrl"
    })
    .when("/views/login", {
        templateUrl : "views/login.html",
        controller : "AuthCtrl"
    })
});