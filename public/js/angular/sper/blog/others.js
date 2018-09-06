function sper_blog_others(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        sperApi.content.blog.find({}, function (resp) {
            $scope.items = resp.items;
            $scope.$apply();
        });
    };
}
