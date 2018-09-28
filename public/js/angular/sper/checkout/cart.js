function sper_checkout_cart(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        sperMedia.listen('cart_items', function (cart_items) {
            $scope.cart_items = cart_items;
        });

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
                    return false;
                }
            });
            return price;
        };

        $scope.calculateTotal = function() {
            if (!$scope.cart_items) return 0;
            var total = 0;
            $scope.cart_items.forEach(function(item) {
                total += parseInt($scope.getPrice(item.product).price || 0) * item.quantity;
            });
            return total;
        };

        $scope.increaseQuantity = function(item) {
            item.quantity++;
            sperMedia.setCartItems($scope.cart_items);
            sperStorage.setItem('cart_items', $scope.cart_items);
        };

        $scope.decreaseQuantity = function (item) {
            if (item.quantity == 1) return false;
            item.quantity--;
            sperMedia.setCartItems($scope.cart_items);
            sperStorage.setItem('cart_items', $scope.cart_items);
        };

        $scope.remove = function(index) {
            $scope.cart_items.splice(index, 1);
            sperMedia.setCartItems($scope.cart_items);
            sperStorage.setItem('cart_items', $scope.cart_items);
        }
    };
}