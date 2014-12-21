'use strict';

/**
 * @ngdoc overview
 * @name allStruct
 * @description
 * # allStruct
 *
 * Main module of the application.
 */
var allStruct = angular.module('allStruct', [
  'ngSanitize',
  'ngRoute', 
  'allStructControllers'
  ]
);

allStruct.config(['$routeProvider', '$locationProvider',
  function($routeProvider, $locationProvider) {
    $routeProvider
    	.when('/', {
    		templateUrl: 'views/home.php',
    		controller: ''
    	})
      .when('/contact', {
        templateUrl: 'views/contact.php',
        controller: ''
      })
      .otherwise({
        redirectTo: '/'
      });
      $locationProvider.html5Mode(true);
  }
]);