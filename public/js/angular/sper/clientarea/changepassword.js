function sper_clientarea_changepassword(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        var user = sperStorage.getItem('user');
        $scope.showMessage = false;
        $scope.update = function() {
            if(!$scope.oldPassword) {
                $scope.showMessage = true;
                $scope.success = false;
                $scope.message = 'Bạn phải nhập mật khẩu cũ';
                return fasle;
            }
            if (!$scope.newPassword) {
                $scope.showMessage = true;
                $scope.success = false;
                $scope.message = 'Bạn phải nhập mật khẩu mới';
                return fasle;
            }
            if (!$scope.confirmNewPassword) {
                $scope.showMessage = true;
                $scope.success = false;
                $scope.message = 'Bạn phải nhập lại mật khẩu mới';
                return fasle;
            }
            if ($scope.confirmNewPassword != $scope.newPassword) {
                $scope.showMessage = true;
                $scope.success = false;
                $scope.message = 'Nhập lại mật khẩu mới không trùng khớp';
                return fasle;
            }
            $scope.showMessage = false;
            sperApi.account.changePass({
                username: user.user_identifier.username,
                password: $scope.newPassword,
                token: user.token
            }, function(resp) {
                if (resp.ResponseStatus.Status) {
                    $scope.success = true;
                    $scope.message = resp.ResponseStatus.Message;
                    user.user_identifier = resp.ResponseData;
                    sperStorage.setItem('user', user);
                } else {
                    $scope.success = false;
                    $scope.message = resp.ResponseStatus.Message;
                }
                $scope.status = resp.ResponseStatus.Status;
                $scope.showMessage = true;
                $scope.$apply();
            });
        }
    }
}