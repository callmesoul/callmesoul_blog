/**
 * Created by Administrator on 2016/4/14.
 */
'use strict';

angular.module('myApp.controllers',[])
    .controller('BlogMain',['$scope','$http','Articles','$sce','mePageLoading',function($scope,$http,Articles,$sce,mePageLoading){
        mePageLoading.show();

    }])
    .controller('BlogIndex',['$scope','$http','Articles','$sce','mePageLoading',function($scope,$http,Articles,$sce,mePageLoading){
        $scope.url=window.location.host;
        $scope.articles={};
        Articles.get()
            .success(function(data) {
                $scope.articles = data;
                for(var i=0;i<$scope.articles.data.length;i++){
                    $scope.articles.data[i].content_html=$sce.trustAsHtml($scope.articles.data[i].content_html);
                }
                mePageLoading.hide();
            });
    }])