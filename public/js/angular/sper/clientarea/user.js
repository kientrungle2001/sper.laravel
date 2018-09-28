function sper_clientarea_user(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.user = sperStorage.getItem('user');
        if(!$scope.user) {
            window.location = '/';
        }
    }
}