/**
 * Created by Administrator on 2016/4/14.
 */
'use strict';

/* Filters */

angular.module('myApp.filters', []).
filter('toHtml', ['$sec', function($sce) {
    return function (text) {
        return $sce.trustAsHtml(text);
    };
}]);