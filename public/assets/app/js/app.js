/**
 * Created by Administrator on 2016/4/14.
 */
'use strict';

angular.module('myApp',[
    'ui.router',
    'me-pageloading',
    'myApp.filters',
    'myApp.services',
    'myApp.directives',
    'myApp.controllers',
],function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
}).config(['$stateProvider', '$urlRouterProvider','$locationProvider','mePageLoadingProvider',function ($stateProvider, $urlRouterProvider,$locationProvider,mePageLoadingProvider) {

    $urlRouterProvider.when("", "/index");

    $stateProvider
        .state("index", {
            url:"/index",
            templateUrl: "assets/app/partials/blog/index.html",
            controller:"BlogIndex"
        })

}]);