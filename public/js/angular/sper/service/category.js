function sper_service_category(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.selectCategoryTab = function(tab) {
            $scope.selectedTab = tab;
            sperMedia.selectCategoryTab(tab);
        };
        setTimeout(function() {
            $scope.selectCategoryTab('promotion');
        }, 200);
    };
}