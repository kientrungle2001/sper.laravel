function sper_clientarea_editproduct(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        var u = new URL(location.href);
        var prodid = u.searchParams.get('prodid');

        $scope.user = sperStorage.getItem('user');
        $scope.service = $scope.user.listServices[0];
        
        sperApi.business.product.get({
            prodid: prodid,
            token: $scope.user.token
        }, function(resp) {
            $scope.product = resp.ResponseData;
            $scope.$apply();
        });

        sperMedia.listen('categories', function(categories) {
            $scope.categories = categories;
            $scope.categories.forEach(function(category) {
                if(category.categoryid == $scope.service.categoryid) {
                    $scope.category = category;
                    return false;
                }
            });
            $scope.$apply();
        });
        
        $scope.update = function () {
            $scope.product.token = $scope.user.token;
            sperApi.business.product.update($scope.product, function (resp) {
                // console.log(resp);
                window.location = '/clientarea/service';
            });
        };
        $scope.product_images = [];
        $scope.updateProductImg = function() {
            $scope.product_images.push({
                action: 'ADD',
                name: MD5(jQuery('#base64Img').val()),
                path: jQuery('#base64Img').val()
            });
        };

        $scope.removeProductImg = function(index) {
            if(confirm('Bạn có muốn xóa ảnh này?')) {
                if ($scope.product_images[index].action == 'ADD') {
                    $scope.product_images.splice(index, 1);
                }
            }
        };
    };
}