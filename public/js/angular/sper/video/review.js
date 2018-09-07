function sper_video_review(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.currentLocation = sperMedia.getCurrentLocation();
        sperMedia.listen('location', function (coords) {
            $scope.currentLocation = coords;
            $scope.reloadReviews();
        });

        sperMedia.listen('categories', function(categories) {
            $scope.categories = categories;
            $scope.$apply();
        });

        sperMedia.listen('cities', function(cities) {
            $scope.cities = cities;
            $scope.$apply();
        });

        $scope.selectCategory = function (category) {
            $scope.selectedCategory = category;
            $scope.selectedSubCategory = null;
            $scope.reloadReviews();
        };

        $scope.reloadReviews = function () {
            var currentLocation = $scope.currentLocation || {
                latitude: 10.823099,
                longitude: 106.629662
            };
            sperApi.content.review.find({
                review_category_id: '',
                latitude: currentLocation.latitude,
                longitude: currentLocation.longitude,
                page_size: 8
            }, function (resp) {
                var items = resp.items;
                $scope.items = items;
                
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
            $scope.reloadReviews();
        };
        $scope.selectedOrderBy = $scope.orderBys[0];

        $scope.selectSubCategory = function (subCategory) {
            $scope.selectedSubCategory = subCategory;
            $scope.reloadReviews();
        };

        $scope.reloadReviews();
        $scope.selectedDistrictIds = {};
        $scope.selectedDistricts = {};
        $scope.selectDistrict = function(district) {
            if ($scope.selectedDistrictIds[district.addmunicipalityid]) {
                $scope.selectedDistricts[district.addmunicipalityid] = district;
            } else {
                delete $scope.selectedDistricts[district.addmunicipalityid];
            }
            console.log($scope.selectedDistricts);
        };
        $scope.selectedCityIds = {};
        $scope.selectedCities = {};
        $scope.selectCity = function(city) {
            if ($scope.selectedCityIds[city.addcityid]) {
                $scope.selectedCities[city.addcityid] = city;
                city.districts.forEach(function(district) {
                    $scope.selectedDistrictIds[district.addmunicipalityid] = true;
                    $scope.selectDistrict(district);
                });
            } else {
                delete $scope.selectedCities[city.addcityid];
                city.districts.forEach(function (district) {
                    $scope.selectedDistrictIds[district.addmunicipalityid] = false;
                    $scope.selectDistrict(district);
                });
            }
            console.log($scope.selectedCities);
        };
    };
}