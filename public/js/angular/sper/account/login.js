function sper_account_login(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.error = {};
        $scope.login = function () {
            $scope.error = {};
            if (!$scope.username) {
                $scope.error.username = true;
                $scope.error.message = 'Bạn phải nhập tên đăng nhập';
                $scope.$apply();
                return false;
            }
            if (!$scope.password) {
                $scope.error.password = true;
                $scope.error.message = 'Bạn phải nhập mật khẩu';
                $scope.$apply();
                return false;
            }
            sperApi.account.get({
                username: $scope.username,
                password: $scope.password
            }, function (resp) {
                if (!resp.ResponseStatus.Status) {
                    $scope.error.message = resp.ResponseStatus.Message;
                    if (3 === resp.ResponseStatus.ReturnCode) {
                        $scope.error.username = true;
                    }
                    $scope.$apply();
                } else {
                    sperStorage.setItem('user', resp.ResponseData);
                    window.location.reload();
                }
            });
        };
    };
}