/*function Shop($scope, $http) {
    $http.get('https://app.ecwid.com/api/v3/2100043/categories?token=secret_4PRMJLukmP8J5DLHbnMSwDMuFWqLCvLT').
        success(function(data) {
			console.log ("got it");
            $scope.menu = data;
        });
}*/
//Angular JS

(function() {
	
	
	var app = angular.module ('shop', ['ngAnimate']);
	
	var newURLArray = function(array) {
		for (i = 0; i < array.length; i++) { 
			
				  var oldURL = array[i].url;
				  var splitURL = oldURL.split("#!"); 
					  if (splitURL[0] == "http://beaglefreedomproject.nationbuilder.com/shop"){
						  	//console.log ("old URL is in play");
						  	//console.log ( splitURL[0]);
						  
					  		var newURLAddition="../shop/#!";
					  		array[i].url = newURLAddition.concat(splitURL[1]); 
							
						}
					
					}
					
					return array
	}
	
	
	
	
		
	app.directive("menuCategories", function() {
		return {
			restrict: "E",
			templateUrl: "/wp-content/themes/bfp/inc/menu-categories.html",
			controller:[ '$http','$scope', function ($http, $scope) {
	
				var categoriesController = this;
			
				
				//this is $http inside function
				$http.get('https://app.ecwid.com/api/v3/2100043/categories?token=secret_4PRMJLukmP8J5DLHbnMSwDMuFWqLCvLT').
				success (function(data) {
					
					categoriesController.categoryURLArray = data;
					$scope.categories = categoriesController.categoryURLArray.items;
	
				
					//onload
					newURLArray($scope.categories);
					
			});
			
		
				
	
	}],
			controllerAs: 'categories'
		};
	});
	
	
	
})();



