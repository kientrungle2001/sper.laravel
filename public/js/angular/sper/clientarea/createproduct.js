function sper_clientarea_createproduct(sperApi, sperStorage, sperMedia) {
    return function($scope) {
        $scope.prodcode = 'Samsung J7 Pro';
        $scope.proddesc = 'Samsung J7 Pro là điện thoại có camera 16MP chụp ảnh rất tuyệt';
        $scope.categoryid = '382ADA97-495A-4EBF-B4E6-1D48E31C17AA';
        $scope.price = '8999000';
        $scope.unit = 'chiếc';
        $scope.create = function() {
            $scope.user = sperStorage.getItem('user');
            $scope.service = $scope.user.listServices[0];
            
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
                        "name": "PRICE",
                        "totalamt": $scope.price,
                        "currency": "VND",
                        "unit": $scope.unit
                    }
                    ]
                },
                "status": 1
            },function(resp) {
                console.log(resp);
            });
        };
    };
}