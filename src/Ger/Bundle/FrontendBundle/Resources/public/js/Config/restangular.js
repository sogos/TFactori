tFactori.config(function(RestangularProvider) {
    RestangularProvider.setBaseUrl(Routing.generate('api_root'));
    RestangularProvider.setRequestSuffix('.json');
});