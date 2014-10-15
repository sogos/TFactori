tFactori.controller('WorkflowCtrl', function ($scope, workflows, Loading) {
   $scope.workflows = workflows;

   /*
    $scope.getWorkflows = function () {
        Loading.isLoading = true;
       Restangular.query()
            .$promise
            .then(function(data) {
                Loading.isLoading = false;
                $scope.workflows = data;
            });
    };

    $scope.deleteWorkflow = function (workflow) {
        Loading.isLoading = true;
        Workflow.delete({ slug: workflow.slug}, function() {
            Loading.isLoading = false;
            $scope.getWorkflows();
        });

    }
    */
});


tFactori.controller('WorkflowEditCtrl', function ($scope, workflow, Loading) {
    $scope.workflow = workflow;
    /*
    $scope.getWorkflow = function () {
        Loading.isLoading = true;
        Workflow.get({ slug: $scope.workflow.slug})
            .$promise
            .then(function(data) {
                Loading.isLoading = false;
                $scope.workflow = data;
            });
    };
    */
});