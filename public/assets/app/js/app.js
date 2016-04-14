/**
 * Created by Administrator on 2016/4/14.
 */
'use strict';

angular.module('myApp',[
    'ui.router',
    'myApp.filters',
    'myApp.services',
    'myApp.directives',
    'myApp.controllers',
],function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}).config(function ($stateProvider, $urlRouterProvider) {

    $urlRouterProvider.when("", "/");

    $stateProvider
        .state("blog", {
            url: "/",
            templateUrl: "assets/app/partials/blogMain.html",
            controller:"Blog"
        })
        .state("view2", {
            url:"/view2",
            templateUrl: "assets/app/partials/html2.html"
        })

});