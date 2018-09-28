function sper_service_detail_product_list(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        var u = new URL(location.href);
        var serviceid = u.searchParams.get('serviceid');

        sperApi.business.service.get({
            serviceid: serviceid
        }, function (resp) {
            $scope.service = resp.ResponseData;
            $scope.$apply();
        });

        sperApi.business.product.getList({
            serviceid: serviceid
        }, function (resp) {
            $scope.items = resp.ResponseData;
            $scope.$apply();
        });

        $scope.getPrice = function(item) {
            var price = {
                price: '',
                unit: ''
            };
            item.attributeset_identifier.attrsetvalue.forEach(function(attr) {
                if (attr.attrvaluename == 'PRICE') {
                    price = {
                        price: attr.totalamt,
                        unit: attr.unit
                    };
                }
            });
            return price;
        };

        $scope.getImage = function(item) {
            var image = {
                path: 'https://placehold.it/204x115'
            };
            item.attributeset_identifier.attrsetvalue.forEach(function (attr) {
                if (attr.attrvaluename == 'IMAGE') {
                    image = {
                        path: attr.path
                    };
                    return false;
                }
            });
            return image;
        };


    };
}