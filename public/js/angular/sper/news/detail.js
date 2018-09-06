function sper_news_detail(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        var u = new URL(window.location.href);
        var article_id = parseInt(u.searchParams.get('article_id'));
        sperApi.content.article.get(article_id, function (resp) {
            $scope.article = resp;
            $scope.$apply();
        });
    };
}
