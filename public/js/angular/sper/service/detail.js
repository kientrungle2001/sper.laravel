function sper_service_detail(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        var u = new URL(location.href);
        var serviceid = u.searchParams.get('serviceid'); 
        
        sperMedia.listen('categories', function(categories) {
            $scope.categories = categories;
            $scope.$apply();
        });

        $scope.getCategory = function(categoryid) {
            var rs = {
                categoryname: ''
            };
            if ($scope.categories) {
                $scope.categories.forEach(function(category) {
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
        }, function(resp) {
            $scope.service = resp.ResponseData;
            $scope.$apply();
        });


    };
}