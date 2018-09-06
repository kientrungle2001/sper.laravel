function sper_news_others(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        sperApi.content.article.find({}, function (resp) {
            $scope.items = resp.items;
            $scope.$apply();
        });
    };
}
