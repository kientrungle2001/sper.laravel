function sper_banner_top(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.email = sperStorage.getItem('lastRegisterEmail');
        $scope.registerId = sperStorage.getItem('lastRegisterId');
        $scope.fullname = sperStorage.getItem('lastRegisterFullName');
        $scope.error = {};
        $scope.authenticate = function () {
            $scope.error = {};
            sperApi.account.authen({
                accid: $scope.registerId,
                codeAuthen: $scope.codeAuthen
            }, function (resp) {
                if (resp.ResponseStatus.Status) {
                    sperStorage.removeItem('lastRegisterEmail');
                    sperStorage.removeItem('lastRegisterId');
                    sperStorage.removeItem('lastRegisterFullName');
                    window.location.reload();
                }
            });
        };
        $scope.banners = [
            {
                bannerimg: '/images/top/1.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/top/2.png',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/top/3.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/top/4.jpg',
                bannerlink: '/'
            }
        ];
    };
}