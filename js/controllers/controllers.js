'use strict';


var allStruct = angular.module('allStructControllers',[]);

allStruct.controller('navigationController',['$scope', function ($scope) {
  $('.burgWrapper').unbind();
	$('.burgWrapper').click(function() {
		console.log('kevin');
		$('.burg').toggleClass('activeBurg');
		$('.mainNav').toggleClass('activeNav');
	})
}]);