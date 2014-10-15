tFactoriControllers.controller('UserCtrl', function ($scope, $http, $window, Loading, User) {
    $scope.user = User;
    $scope.message = '';
    $scope.hasError = false;
    $scope.submit = function () {
        $http
            .post(Routing.generate('login_check'), { "username": $scope.user.username , "password" : $scope.user.password } )
            .success(function (data, status, headers, config) {
                $window.sessionStorage.setItem('token', data.token);
                User.roles = data.data.roles;
                $scope.message = 'Welcome';
                $scope.user.isAuthenticated = true;
                $scope.hasError = false;
                var encodedProfile = data.token.split('.')[1];
                var profile = JSON.parse(url_base64_decode(encodedProfile));
                User.username = profile.username;
                User.ttl = profile.exp;
            })
            .error(function (data, status, headers, config) {
                // Erase the token if the user fails to log in
                delete $window.sessionStorage.token;
                $scope.user.isAuthenticated = false;
                // Handle login errors here
                $scope.message = 'Identifiants incorrects';
                $scope.hasError = true;
            });
    };
    $scope.logout = function () {
        $scope.welcome = '';
        $scope.message = '';
        $scope.user.username = '';
        $scope.user.password = '';
        $scope.user.isAuthenticated = false;
        delete $window.sessionStorage.token;
    };


});