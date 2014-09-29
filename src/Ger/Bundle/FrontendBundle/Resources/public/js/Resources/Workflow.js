tFactori.factory("Workflow", function($resource) {
    var promise = $resource(Routing.generate('api_get_workflows')+'/:slug', { slug: '@slug'});
    return promise;
});


tFactori.factory('MultiWorkflowLoader', ['Workflow', '$q',
    function(Workflow, $q) {
        return function () {
            var delay = $q.defer();
            Workflow.query(function(workflows) {
                delay.resolve(workflows);
            }, function () {
                delay.reject('Impossible de récupérer les workflows');
            });
            return delay.promise;
        };
    }
]);

tFactori.factory('WorkflowLoader', ['Workflow', '$route', '$q',
    function(Workflow, $route, $q) {
        return function () {
            var delay = $q.defer();
            Workflow.get({slug: $route.current.params.slug}, function(workflow) {
                delay.resolve(workflow);
            }, function () {
                delay.reject('Impossible de récupérer le workflow ' + $route.current.params.slug);
            });
            return delay.promise;
        };
    }
]);