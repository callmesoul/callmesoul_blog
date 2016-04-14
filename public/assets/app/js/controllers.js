/**
 * Created by Administrator on 2016/4/14.
 */
'use strict';

angular.module('myApp.controllers',[])
    .controller('Blog',['$scope','$http','Articles','$sce',function($scope,$http,Articles,$sce){
        $scope.articles={};
        $scope.loading = true;
        Articles.get()
            .success(function(data) {
                $scope.articles = data;
                for(var i=0;i<$scope.articles.data.length;i++){
                    $scope.articles.data[i].content_html=$sce.trustAsHtml($scope.articles.data[i].content_html);
                }
                $scope.loading = false;
            });
    }])
    .controller('MyCtrl2',['$scope',function($scope){

    }])