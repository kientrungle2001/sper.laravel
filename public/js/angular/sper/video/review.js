function sper_video_review(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.currentLocation = sperMedia.getCurrentLocation();
        sperMedia.listen('location', function (coords) {
            $scope.currentLocation = coords;
            $scope.reloadReviews();
        });

        var categoryIntervalId = setInterval(function () {
            if (sperMedia.categories) {
                $scope.categories = sperMedia.categories;
                //$scope.selectCategory($scope.categories[0]);
                $scope.$apply();
                clearInterval(categoryIntervalId);
            }
        }, 10);

        var cityIntervalId = setInterval(function () {
            if (sperMedia.cities) {
                $scope.cities = sperMedia.cities;
                $scope.$apply();
                clearInterval(cityIntervalId);
            }
        }, 10);

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
    };
}