function sper_clientarea_createproduct(sperApi, sperStorage, sperMedia) {
    return function($scope) {

        $scope.user = sperStorage.getItem('user');
        $scope.service = $scope.user.listServices[0];

        $scope.prodcode = 'Samsung J7 Pro';
        $scope.proddesc = 'Samsung J7 Pro là điện thoại có camera 16MP chụp ảnh rất tuyệt';
        $scope.categoryid = '382ADA97-495A-4EBF-B4E6-1D48E31C17AA';
        $scope.price = '8999000';
        $scope.unit = 'chiếc';

        sperMedia.listen('categories', function (categories) {
            $scope.categories = categories;
            $scope.categories.forEach(function (category) {
                if (category.categoryid == $scope.service.categoryid) {
                    $scope.category = category;
                    return false;
                }
            });
            $scope.$apply();
        });

        $scope.create = function() {            
            sperApi.business.product.add({
                "token": $scope.user.token,
                "prodcode": $scope.prodcode,
                "proddesc": $scope.proddesc,
                "serviceid": $scope.service.serviceid,
                "categoryid": $scope.categoryid,
                "attributeset_identifier": {
                    "entityname": "PRODUCTS",
                    "attrsetvalue": [
                        {
                            "name": "IMAGE_1",
                            "path": "" // ảnh định dạng base64
                        },
                        {
                            "name": "PRICE",
                            "totalamt": parseFloat($scope.price),
                            "currency": "VND",
                            "unit": $scope.unit
                        }
                    ]
                },
                "status": 1
            },function() {
                window.location = '/clientarea/service';
            });
        };
    };
}