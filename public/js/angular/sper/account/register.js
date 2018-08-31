function sper_account_register(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        jQuery.extend($scope, {
            username: 'kienle',
            fullname: 'Le Trung Kien',
            password: '123456',
            confirmPassword: '123456',
            email: 'kientrungle2001@gmail.com',
            phone: '0123456789'
        });
        $scope.error = {};
        $scope.register = function () {
            $scope.error = {};
            if (!$scope.username) {
                $scope.error.username = true;
                $scope.error.message = 'Bạn phải nhập tên đăng nhập';
                $scope.$apply();
                return false;
            }
            if (!$scope.fullname) {
                $scope.error.fullname = true;
                $scope.error.message = 'Bạn phải nhập tên hiển thị';
                $scope.$apply();
                return false;
            }

            if (!$scope.password) {
                $scope.error.password = true;
                $scope.error.message = 'Bạn phải nhập mật khẩu';
                $scope.$apply();
                return false;
            }
            if (!$scope.confirmPassword) {
                $scope.error.confirmPassword = true;
                $scope.error.message = 'Bạn phải nhập lại mật khẩu';
                $scope.$apply();
                return false;
            }

            if ($scope.confirmPassword !== $scope.password) {
                $scope.error.confirmPassword = true;
                $scope.error.message = 'Mật khẩu nhập lại không khớp';
                $scope.$apply();
                return false;
            }
            if (!$scope.phone) {
                $scope.error.phone = true;
                $scope.error.message = 'Bạn phải nhập số điện thoại';
                $scope.$apply();
                return false;
            }

            if (!$scope.email) {
                $scope.error.email = true;
                $scope.error.message = 'Bạn phải nhập email';
                $scope.$apply();
                return false;
            }

            sperApi.account.register({
                acctype: 1,
                user_identifier: {
                    username: $scope.username,
                    password: MD5($scope.password)
                },
                fullname: $scope.fullname,
                phone: $scope.phone,
                email: $scope.email
            }, function (resp) {
                if (resp.ResponseStatus.Status) {
                    sperStorage.setItem('lastRegisterId', resp.ResponseData);
                    sperStorage.setItem('lastRegisterEmail', $scope.email);
                    sperStorage.setItem('lastRegisterFullName', $scope.fullname);
                    window.location.reload();
                }
            });
        };
    };
}