function sper_clientarea_service(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.user = sperStorage.getItem('user');
        console.log($scope.user.listServices);
        if ($scope.user.listServices.length) {
            $scope.service = $scope.user.listServices[0];
            sperApi.business.product.getList({
                serviceid: $scope.service.serviceid,
                token: $scope.user.token 
            }, function(resp) {
                $scope.products = resp.ResponseData;
            });
        }
        $scope.delete = function(product) {
            sperApi.business.product.delete(product, function(resp) {
                console.log(resp);
            });
        }
    }
}