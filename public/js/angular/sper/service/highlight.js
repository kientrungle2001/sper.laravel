function sper_service_highlight(sperApi, sperStorage, sperMedia) {
    return function ($scope) {

        $scope.currentLocation = sperMedia.getCurrentLocation();
        sperMedia.listen('location', function (coords) {
            $scope.currentLocation = {
                latitude: 10.823099,
                longitude: 106.629662
            };
            //$scope.currentLocation = coords;
            $scope.reloadServices();
        });

        sperMedia.listen('categories', function (categories) {
            $scope.categories = categories;
            $scope.selectCategory(categories[0]);
            $scope.$apply();
        });

        $scope.selectCategory = function (category) {
            $scope.selectedCategory = category;
            $scope.selectedSubCategory = null;
            $scope.reloadServices();
        };

        $scope.reloadServices = function () {
            if (!$scope.currentLocation) {
                return false;
            }
            if (!$scope.selectedCategory) {
                return false;
            }
            var currentLocation = $scope.currentLocation || {
                latitude: 10.823099,
                longitude: 106.629662
            };
            var distance = function (a, b) {
                a.latitude = parseFloat(a.latitude);
                b.latitude = parseFloat(b.latitude);
                a.longitude = parseFloat(a.longitude);
                b.longitude = parseFloat(b.longitude);
                return Math.sqrt((a.latitude - b.latitude) * (a.latitude - b.latitude) + (a.longitude - b.longitude) * (a.longitude - b.longitude));
            };
            sperApi.business.service.searchByCate({
                lstcategoryid: ($scope.selectedSubCategory && $scope.selectedSubCategory.categoryid) || $scope.selectedCategory.categoryid,
                latitude: currentLocation.latitude,
                longitude: currentLocation.longitude
            }, function (resp) {
                var services = resp.ResponseData;
                if ($scope.selectedOrderBy.index === 'newest') {
                    services.sort(function (a, b) {
                        return a.createddate > b.createddate ? 1 : -1;
                    });
                }
                if ($scope.selectedOrderBy.index === 'nearest') {
                    services.sort(function (a, b) {
                        return distance(a.address_identifier
                            , currentLocation) - distance(b.address_identifier
                                , currentLocation);
                    });
                }
                $scope.services = services;
                $scope.$apply();
            });
        };

        $scope.orderBys = [{
            label: 'Tất cả',
            index: 'all'
        },
        {
            label: 'Gần nhất',
            index: 'nearest'
        },
        {
            label: 'Mới nhất',
            index: 'newest'
        },
        {
            label: 'Khuyến mại',
            index: 'promotion'
        }];
        $scope.selectOrderBy = function (orderBy) {
            $scope.selectedOrderBy = orderBy;
            $scope.reloadServices();
        };
        $scope.selectedOrderBy = $scope.orderBys[0];

        $scope.selectSubCategory = function (subCategory) {
            $scope.selectedSubCategory = subCategory;
            $scope.reloadServices();
        };
    };
}