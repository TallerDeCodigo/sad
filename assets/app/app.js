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


// ----------------- Cancelacion bo partes----------------------

var cancelacionbo_partes = angular.module('appCancelacionbo_partes', ['ui.bootstrap']);

cancelacionbo_partes.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


cancelacionbo_partes.controller('cancelacionbo_partesCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/cancelacionbo_partes/').success(function(data){
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


// ----------------- Cancelacion bo resp----------------------

var cancelacionbo_resp = angular.module('appCancelacionbo_resp', ['ui.bootstrap']);

cancelacionbo_resp.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


cancelacionbo_resp.controller('cancelacionbo_respCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/cancelacionbo_resp/').success(function(data){
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


// -----------------Control----------------------

var control = angular.module('appControl', ['ui.bootstrap']);

control.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


control.controller('controlCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/control/').success(function(data){
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




// -----------------Estadisticas----------------------

var estadisticas = angular.module('appEstadisticas', ['ui.bootstrap']);

estadisticas.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


estadisticas.controller('estadisticasCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/estadisticas/').success(function(data){
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



// -----------------Graficas----------------------

var graficas = angular.module('appGraficas', ['ui.bootstrap']);

graficas.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


graficas.controller('graficasCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/graficas/').success(function(data){
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




// -----------------Infotech----------------------

var infotech = angular.module('appInfotech', ['ui.bootstrap']);

infotech.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


infotech.controller('infotechCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/infotech/').success(function(data){
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



// -----------------Modelos----------------------

var modelos = angular.module('appModelos', ['ui.bootstrap']);

modelos.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


modelos.controller('modelosCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/modelos/').success(function(data){
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

// -----------------Perfiles----------------------

var perfiles = angular.module('appPerfiles', ['ui.bootstrap']);

perfiles.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


perfiles.controller('perfilesCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/perfiles/').success(function(data){
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



// -----------------tkt Backorder----------------------

var tktBackorder = angular.module('appTktBackorder', ['ui.bootstrap']);

tktBackorder.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


tktBackorder.controller('tktBackorderCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/backorder/').success(function(data){
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





// -----------------tkt hrr----------------------

var tkthrr = angular.module('appTkthrr', ['ui.bootstrap']);

tkthrr.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


tkthrr.controller('tkthrrCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/tkthrr/').success(function(data){
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



// -----------------tkt infotech----------------------

var tktinfotech = angular.module('appTktinfotech', ['ui.bootstrap']);

tktinfotech.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


tktinfotech.controller('tktinfotechCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/tktinfotech/').success(function(data){
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




// -----------------tkt otros----------------------

var tktotros = angular.module('appTktotros', ['ui.bootstrap']);

tktotros.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


tktotros.controller('tktotrosCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/tktotros/').success(function(data){
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



// -----------------tkt Seg Pedido----------------------

var tktsegPedido = angular.module('appTktsegPedido', ['ui.bootstrap']);

tktsegPedido.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


tktsegPedido.controller('tktsegPedidoCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/segpedido/').success(function(data){
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




// -----------------tkt Precios----------------------

var tktprecios = angular.module('appTktprecios', ['ui.bootstrap']);

tktprecios.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


tktprecios.controller('tktpreciosCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/precios/').success(function(data){
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

// -----------------tkt unidad inmovilizada----------------------

var tktunidadinm = angular.module('appTktunidadinm', ['ui.bootstrap']);

tktunidadinm.filter('startFrom', function() {
    return function(input, start) {
        if(input) {
            start = +start; //parse to int
            return input.slice(start);
        }
        return [];
    }
  });


tktunidadinm.controller('tktunidadinmCrtl', function ($scope, $http, $timeout) {
    $http.get('http://localhost/~programacion2/sad/index.php/unidadinm/').success(function(data){
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
