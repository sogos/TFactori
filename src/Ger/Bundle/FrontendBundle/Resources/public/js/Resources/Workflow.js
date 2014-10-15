/*tFactori.factory("Workflow", function($resource) {
    var promise = $resource(Routing.generate('api_get_workflows')+'/:slug', { slug: '@slug'});
    return promise;
});

*/

tFactori.factory('Workflows', function(Restangular) {
    return Restangular.service('workflows');
});

tFactori.factory('MultiWorkflowLoader', ['Workflows', '$route', '$q',
    function(Workflows, $route, $q) {
        return function () {
            var delay = $q.defer();
            Workflows.getList().then(function(workflows) {
                delay.resolve(workflows);
            });
            return delay.promise;
        };
    }
]);

tFactori.factory('WorkflowLoader', ['Workflows', '$route', '$q',
    function(Workflows, $route, $q) {
        return function () {
            var delay = $q.defer();
            Workflows.one($route.current.params.workflowId).get().then(function(workflow) {
                delay.resolve(workflow);
            });
            return delay.promise;
        };
    }
]);

