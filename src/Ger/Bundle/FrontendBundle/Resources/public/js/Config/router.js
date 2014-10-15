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
            .when('/workflows/:workflowId/show', {
                templateUrl: '/bundles/gerfrontend/partials/workflow.show.html',
                controller: 'WorkflowEditCtrl',
                resolve: {
                    workflow: function(WorkflowLoader){
                        return WorkflowLoader();
                    }
                }

            })
            .when('/workflows/:workflowId/edit', {
                templateUrl: '/bundles/gerfrontend/partials/workflow.edit.html',
                controller: 'WorkflowEditCtrl',
                resolve: {
                    workflow: function(WorkflowLoader){
                        return WorkflowLoader();
                    }
                }

            })
        ;
    }
]);
