function sper_news_board(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        sperApi.content.article.find({}, function (resp) {
            $scope.articles = resp.items;
            $scope.$apply();
        });
    };
}