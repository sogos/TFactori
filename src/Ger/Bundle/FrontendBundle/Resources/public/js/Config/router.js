tFactori.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider
            .when('/workflows', {
                templateUrl: '/bundles/gerfrontend/partials/workflow.list.html',
                controller: 'WorkflowCtrl',
                resolve: {
                    workflows: function(MultiWorkflowLoader){
                        return MultiWorkflowLoader();
                    }
                }

            })
            .when('/workflows/:slug', {
                templateUrl: '/bundles/gerfrontend/partials/workflow.show.html',
                controller: 'WorkflowCtrl',
                resolve: {
                    workflows: function(WorkflowLoader){
                        return WorkflowLoader();
                    }
                }

            }

        );
    }
]);
