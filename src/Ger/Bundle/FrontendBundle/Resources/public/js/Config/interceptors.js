tFactori.config(function ($httpProvider) {
    $httpProvider.interceptors.push('authInterceptor');
});