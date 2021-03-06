function sper_blog_section(sperApi, sperStorage, sperMedia) {
    return function($scope) {
        sperApi.content.blog.find({}, function(resp){
            $scope.blogs = resp.items;
            $scope.$apply();
        });
        $scope.selectOrderBy = function(orderBy) {
            $scope.orderBy = orderBy;
            sperApi.content.blog.find({orderBy: orderBy}, function (resp) {
                $scope.items = resp.items;
                $scope.$apply();
            });
        };
        $scope.selectOrderBy('newest');
        $scope.toDate = function(str) {
            return new Date(str);
        };
    };
}