function sper_clientarea_editservice(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        sperMedia.listen('cities', function (cities) {
            $scope.cities = cities;
            $scope.$apply();
        });
        sperMedia.listen('categories', function (categories) {
            $scope.categories = categories;
            $scope.$apply();
        });
        var user = $scope.user = sperStorage.getItem('user');
        $scope.service = $scope.user.listServices[0];
        if(null === $scope.service.address_identifier) {
            $scope.service.address_identifier = {
                countryid: 1,
                addcityid: 0,
                addmunicipalityid: 0,
                addstateid: 0,
                latitude: 10.8309925,
                longitude: 106.71136328125002,
                addressname: ''
            };
        }
        $scope.selectCity = function() {
            var addcityid = $scope.service.address_identifier.addcityid;
            $scope.cities.forEach(function(city) {
                if (city.addcityid == addcityid) {
                    $scope.selectedCity = city;
                    return false;
                }
            });
        };
        $scope.service.token = user.token;
        console.log($scope.service);
        
        $scope.updateServiceImg = function () {
            $scope.service.serviceimg = jQuery('#base64Img').val();
            console.log($scope.service);
        }
        
        $scope.update = function () {
            var service = jQuery.extend({}, $scope.service);
            if (service.serviceimg.indexOf('base64') != -1) {
                service.serviceimg = service.serviceimg.split(',')[1];
            }
            sperApi.business.service.update(service, function (resp) {
                console.log(resp);
                user.listServices[0] = resp.ResponseData;
                sperStorage.setItem('user', user);
                console.log(user);
                window.location = '/clientarea/service';
            });
        };

        
    }
}