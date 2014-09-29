tFactori.provider("Loading", function() {
    this.$get = function() {
        return {
            "isLoading": false
        }
    }
});

tFactoriControllers.controller('LoadingCtrl', function ($scope, $http, $window, Loading) {
    $scope.Loading = Loading;
});
