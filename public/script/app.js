var app = angular.module('articleApp', ['angularUtils.directives.dirPagination'], function ($interpolateProvider) {
    // To change the default angular expression delimiters
//    $interpolateProvider.startSymbol('<%'); 
//    $interpolateProvider.endSymbol('%>');
});
app.controller('articleCtrl', ['$scope', '$http', function ($scope, $http) {
        $scope.pageLimit = [5, 10, 30];
        $scope.articles = [];
        $scope.totalArticles = 0;
        $scope.articlesPerPage = 10;
        getResultsPage(0);

        $scope.pagination = {
            current: 1
        };

        $scope.pageChanged = function (newPage) {
            getResultsPage(newPage);
        };

        function getResultsPage(pageNumber) {
            $http.get(APP_URL + '/articles/page/' + pageNumber + '/' + $scope.articlesPerPage)
                    .then(function (result) {
                        //console.log(result);
                        $scope.articles = result.data;
                        $scope.totalArticles = result.data.totalarticles;
                    });
        }
        ;
    }]);