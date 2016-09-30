var app = angular.module('myApp', ['ui.bootstrap']);

app.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });

// ----------------- DEALERS ----------------------

var dealers = angular.module('appDealers', ['ui.bootstrap']);

dealers.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


dealers.controller('dealersCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/dealers/').success(function(data){
        $scope.list = data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 50; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;

    });
   
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() { 
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };

});


// ----------------- automoviles ----------------------

var automoviles = angular.module('appAutomoviles', ['ui.bootstrap']);

automoviles.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


automoviles.controller('automovilesCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/automoviles/').success(function(data){
        $scope.list = data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 50; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;

    });
   
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() { 
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };

});


// ----------------- Bitacora ----------------------

var bitacora = angular.module('appBitacora', ['ui.bootstrap']);

bitacora.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


bitacora.controller('bitacoraCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/bitacora/').success(function(data){
        $scope.list = data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 50; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;

    });
   
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() { 
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };

});


// ----------------- Cancelacion bo ----------------------

var cancelacionbo = angular.module('appCancelacionbo', ['ui.bootstrap']);

cancelacionbo.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


cancelacionbo.controller('cancelacionboCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/cancelacionbo/').success(function(data){
        $scope.list = data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 50; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;

    });
   
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() { 
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };

});


// ----------------- VOR ----------------------

var unidadInmApp = angular.module('appUnidadInm', ['ui.bootstrap']);

unidadInmApp.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


unidadInmApp.controller('unidadInmCtrl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/dealers/').success(function(data){
        $scope.list = data;
        $scope.currentPage = 1; //current page
        $scope.entryLimit = 10; //max no of items to display in a page
        $scope.filteredItems = $scope.list.length; //Initially for no filter  
        $scope.totalItems = $scope.list.length;

    });
   
    $scope.setPage = function(pageNo) {
        $scope.currentPage = pageNo;
    };
    $scope.filter = function() {
        $timeout(function() { 
            $scope.filteredItems = $scope.filtered.length;
        }, 10);
    };
    $scope.sort_by = function(predicate) {
        $scope.predicate = predicate;
        $scope.reverse = !$scope.reverse;
    };

    console.log('aqui');
});



// ----------------- backorder ----------------------

    var backorder = angular.module('mybo', ['ngRoute','ui.bootstrap']); 

    backorder.filter('startFrom', function(){
        return function(input, start){
            if(input){
                start = +start;
                return input.slice(start);
            }
            return[];
        }
    });


    backorder.controller('backorderCrtl', function ($scope, $http, $timeout) {
        $http.get('http://localhost/~programacion2/sad/index.php/dealers/').success(function(data){
            $scope.list = data;
            $scope.currentPage = 1; //current page
            $scope.entryLimit = 30; //max no of items to display in a page
            $scope.filteredItems = $scope.list.length; //Initially for no filter  
            $scope.totalItems = $scope.list.length;

        });
       
        $scope.setPage = function(pageNo) {
            $scope.currentPage = pageNo;
        };
        $scope.filter = function() {
            $timeout(function() { 
                $scope.filteredItems = $scope.filtered.length;
            }, 10);
        };
        $scope.sort_by = function(predicate) {
            $scope.predicate = predicate;
            $scope.reverse = !$scope.reverse;
        };
    });

     backorder.config(function($routeProvider) {
        $routeProvider.
          when('/', {
            templateUrl: 'index.html',
            controller: 'backorderCrtl'
          }).
          when('/:NoTicket', {
            templateUrl: 'backorder-detail.html',
            controller: 'backorderCrtl'
          }).
          otherwise({
            redirectTo: '/'
          });
      });

     backorder.factory('boTicket', function($http){

        var cachedData;

        function getData(callback)
        {
          if(cachedData) {
            callback(cachedData);
          } else {
            $http.get('').success(function(data){
              cachedData = data;
              callback(data);
            });
          }
        }

        return {
          list: getData,
          find: function(name, callback){
            getData(function(data) {
              var country = data.filter(function(entry){
                return entry.name === name;
              })[0];
              callback(country);
            });
          }
        };
      });

      backorder.controller('CountryListCtrl', function ($scope, countries){
        countries.list(function(countries) {
          $scope.countries = countries;
        });
      });

      backorder.controller('CountryDetailCtrl', function ($scope, $routeParams, countries){
        countries.find($routeParams.countryName, function(country) {
          $scope.country = country;
        });
      });
