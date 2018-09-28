function sper_service_product_detail(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        var u = new URL(location.href);
        var serviceid = u.searchParams.get('serviceid');
        var prodid = u.searchParams.get('prodid');

        sperMedia.listen('categories', function (categories) {
            $scope.categories = categories;
            $scope.$apply();
        });

        $scope.getCategory = function (categoryid) {
            var rs = {
                categoryname: ''
            };
            if ($scope.categories) {
                $scope.categories.forEach(function (category) {
                    if (category.categoryid == categoryid) {
                        rs = category;
                        return false;
                    }
                });
            }
            return rs;
        };

        sperApi.business.service.get({
            serviceid: serviceid
        }, function (resp) {
            $scope.service = resp.ResponseData;
            $scope.$apply();
        });

        sperApi.business.product.get({
            prodid: prodid
        }, function (resp) {
            $scope.product = resp.ResponseData;
            $scope.$apply();
        });

        $scope.getPrice = function (item) {
            var price = {
                price: '',
                unit: ''
            };
            item.attributeset_identifier.attrsetvalue.forEach(function (attr) {
                if (attr.attrvaluename == 'PRICE') {
                    price = {
                        price: attr.totalamt,
                        unit: attr.unit
                    };
                }
            });
            return price;
        };

        $scope.getImage = function (item) {
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

        $scope.addToCart = function() {
            sperMedia.addToCart($scope.product, $scope.service);
            var items = sperMedia.getCartItems();
            sperStorage.setItem('cart_items', items);
        };

        $scope.checkout = function() {
            $scope.addToCart();
            window.location = '/cart';
        };
    };
}