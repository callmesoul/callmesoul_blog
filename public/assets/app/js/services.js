/**
 * Created by Administrator on 2016/4/14.
 */
'use strict';

/* Services */


// Demonstrate how to register services
// In this case it is a simple value service.
angular.module('myApp.services', [])
    .factory('Articles', function($http) {
        return {
            // get all the comments
            get: function (page) {
                return $http.get('/blogall?page='+page);
            },

            // save a comment (pass in comment data)
            save: function (commentData) {
                return $http({
                    method: 'POST',
                    url: '/api/comments',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(commentData)
                });
            },

            // destroy a comment
            destroy: function (id) {
                return $http.delete('/api/comments/' + id);
            }
        }
    });