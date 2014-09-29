tFactori.controller('WorkflowCtrl', function ($scope, workflows, Loading, Workflow) {
    $scope.workflows = workflows;
   $scope.getWorkflows = function () {
        Loading.isLoading = true;
       Workflow.query()
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
});