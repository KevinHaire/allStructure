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

allStruct.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider
    	.when('/', {
    		templateUrl: 'views/home.php',
    		controller: ''
    	})
      .otherwise({
        redirectTo: '/'
      });
  }
]);;'use strict';


var allStruct = angular.module('allStructControllers',[]);

allStruct.controller('navigationController',['$scope', function ($scope) {
  $('.burgWrapper').unbind();
	$('.burgWrapper').click(function() {
		console.log('kevin');
		$('.burg').toggleClass('activeBurg');
		$('.mainNav').toggleClass('activeNav');
	})
}]);