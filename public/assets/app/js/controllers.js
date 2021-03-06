/**
 * Created by Administrator on 2016/4/14.
 */
'use strict';

angular.module('myApp.controllers',[])
    .controller('BlogMain',['$scope','$http','Articles','$sce','mePageLoading',function($scope,$http,Articles,$sce,mePageLoading){
        mePageLoading.show();

    }])
    .controller('BlogIndex',['$scope','$http','Articles','$sce','mePageLoading',function($scope,$http,Articles,$sce,mePageLoading){
        $scope.pageLoading=true;
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
        $scope.endScroll=function(){
            if ($scope.articles.current_page<$scope.articles.last_page){
                Articles.get($scope.articles.current_page+1)
                    .success(function(data) {
                        $scope.articles.current_page = data.current_page;
                        for (var i=0;i<data.data.length;i++){
                            $scope.articles.data.push(data.data[i]);
                        }
                        alert($scope.articles.data.length);
                        $scope.pageLoading=false;
                    });
            }else if($scope.articles.current_page=$scope.articles.last_page){
                $scope.notmore=true;
            }

        }

    }])