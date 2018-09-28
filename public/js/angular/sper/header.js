function sper_header(sperApi, sperStorage, sperMedia) {
    return function ($scope) {

        $scope.user = sperStorage.getItem('user');
        sperMedia.listen('cities', function(cities) {
            $scope.cities = cities;
            $scope.loadSelectedCity();
            $scope.$apply();
        });

        $scope.loadSelectedCity = function () {
            var selectedCityId = sperStorage.getItem('selectedCityId');
            if (!selectedCityId) {
                selectedCityId = $scope.cities[0].addcityid;
            }
            $scope.selectedCityId = selectedCityId;
            $scope.selectCity();
        };

        $scope.selectCity = function () {
            var city = $scope.getCity($scope.selectedCityId);
            $scope.setSelectedCity(city);
        }

        $scope.setSelectedCity = function (city) {
            sperStorage.setItem('selectedCityId', city.addcityid);
            $scope.selectedCity = city;
            $scope.selectedCityId = city.addcityid;
        };

        $scope.getCity = function (addcityid) {
            var selectedCity = null;
            $scope.cities.forEach(function (city) {
                if (city.addcityid == addcityid) {
                    selectedCity = city;
                }
            });
            return selectedCity;
        };

        sperMedia.listen('categories', function (categories) {
            $scope.categories = categories;
            $scope.loadSelectedCategory();
            $scope.$apply();
        });

        $scope.loadSelectedCategory = function () {
            var selectedCategoryId = sperStorage.getItem('selectedCategoryId');
            if (!selectedCategoryId) {
                selectedCategoryId = $scope.categories[0].categoryid;
            }
            $scope.selectedCategoryId = selectedCategoryId;
            $scope.selectCategory();
        };

        $scope.selectCategory = function () {
            var category = $scope.getCategory($scope.selectedCategoryId);
            $scope.setSelectedCategory(category);
        }

        $scope.setSelectedCategory = function (category) {
            sperStorage.setItem('selectedCategoryId', category.categoryid);
            $scope.selectedCategory = category;
            $scope.selectedCategoryId = category.categoryid;
        };

        $scope.getCategory = function (categoryid) {
            var selectedCategory = null;
            $scope.categories.forEach(function (category) {
                if (category.categoryid == categoryid) {
                    selectedCategory = category;
                }
            });
            return selectedCategory;
        };

        $scope.logout = function() {
            sperStorage.removeItem('user');
            window.location.reload();
        };

        $scope.selectTab = function(tab) {
            $scope.selectedTab = tab;
        };
    };
}