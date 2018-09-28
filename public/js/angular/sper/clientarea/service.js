function sper_clientarea_service(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.loadProducts = function () {
            sperApi.business.product.getList({
                serviceid: $scope.service.serviceid,
                token: $scope.user.token
            }, function (resp) {
                $scope.products = resp.ResponseData;
            });
        };
        
        $scope.user = sperStorage.getItem('user');
        if ($scope.user.listServices.length) {
            $scope.service = $scope.user.listServices[0];
            $scope.loadProducts();
            console.log('service', $scope.service);
        }
        
        $scope.delete = function(product) {
            if(confirm('Bạn có muốn xóa sản phẩm "' + product.prodcode +'" không?')) {
                product.token = $scope.user.token;
                sperApi.business.product.delete(product, function() {
                    $scope.loadProducts();
                });
            }
        };

        $scope.updateServiceImg = function() {
            $scope.service.serviceimg = jQuery('#base64Img').val();
            sperApi.business.service.update({ 
                token: $scope.user.token,
                serviceid: $scope.service.serviceid, serviceimg: $scope.service.serviceimg.split(',')[1]}, function(resp) {
                    console.log(resp);
                    $scope.user.listServices[0] = resp.ResponseData;
                    sperStorage.setItem('user', $scope.user);
                alert('Cập nhật thành công');
            });
        }
    }
}