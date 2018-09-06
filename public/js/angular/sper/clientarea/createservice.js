function sper_clientarea_createservice(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        sperMedia.listen('cities', function (cities) {
            $scope.cities = cities;
            $scope.$apply();
        });
        var user = $scope.user = sperStorage.getItem('user');
        jQuery.extend($scope, {
            servicename: 'Điện thoại di động 101',
            servicedesc: 'Điện thoại di động 101',
            "address_identifier": {
                "addressname": "Ha Noi",
                "latitude": "21.0501",
                "longitude": "280.2"
            },
            "phone": '0123456789',
            "email": 'kientrungle2001@gmail.com',
            "website": 'http://dtdd101.vn',
            categoryid: "D7B91EAF-5F7B-4E53-9474-8EFAF26F0007"
        });
        $scope.create = function() {
            sperApi.business.service.add({
                "token": user.token,
                "servicename": $scope.servicename,
                "servicedesc": $scope.servicedesc,
                "serviceimg": "", // ảnh dạng base64
                "accid": user.user_identifier.accid,
                "categoryid": $scope.categoryid,
                "address_identifier": {
                    "addressname": "Ha Noi",
                    "latitude": "21.0501",
                    "longitude": "280.2"
                },
                "phone": user.phone,
                "email": $scope.email,
                "website": $scope.website
            }, function(resp) {
                console.log(resp);
            });
        };
    }
}