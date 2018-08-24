(function() {
    console.log('go here');
    jQuery(document).ready(function(){
        console.log('ready');
        setTimeout(function(){
            jQuery('.dropdown-submenu > a.test').on("click", function (e) {
                console.log('.dropdown-submenu > a.test clicked');
                jQuery(this).next('ul').toggle();
                e.stopPropagation();
                e.preventDefault();
            });
        }, 1000);
        
    });
    var sperStorage = {
        prefix: 'sper_',
        _getItem: function(key) {
            var val = localStorage.getItem(this.prefix + key);
            if(null !== val) {
                return JSON.parse(val);
            } else {
                return null;
            }
        },
        _setItem: function(key, value) {
            if(null !== value)
                return localStorage.setItem(this.prefix + key, JSON.stringify(value));
        },
        _delItem: function(key) {
            return localStorage.removeItem(this.prefix + key);
        },
        _hasItem: function(key) {
            return null !== localStorage.getItem(this.prefix + key);
        },
        getItem: function(key) {
            var timestart = this._getItem('timestart_' + key);
            var timeout = this._getItem('timeout_' + key);
            var currentTime = (new Date()).getTime();
            if(currentTime > timestart + timeout) {
                this.removeItem(key);
                return null;
            } else {
                return this._getItem(key);
            }
        },
        setItem: function(key, value, timeout = 21600000) {
            if(!this._hasItem(key)) {
                this._setItem('timestart_' + key, (new Date()).getTime());
                this._setItem('timeout_' + key, timeout);
            }
            this._setItem(key, value);
        },
        removeItem: function(key) {
            this._delItem(key);
            this._delItem('timestart_' + key);
            this._delItem('timeout_' + key);
        },
        hasItem: function(key) {
            var hasItem = this._hasItem(key);
            var timestart = this._getItem('timestart_' + key);
            var timeout = this._getItem('timeout_' + key);
            var currentTime = (new Date()).getTime();
            if(currentTime > timestart + timeout) {
                this.removeItem(key);
                return false;
            } else {
                return hasItem;
            }
        }
    };
    var idPartner = 2;
    var namePartner = 'web';
    var keyPartner = '3be3b14f25aef540d6617aac86685bb1';
    
    var sperApi = {
        getToken: function() {
            var token = sperStorage.getItem('token');
            if(null !== token) return token;

            var url = 'http://test.sper.com.vn/api/authen/GetAccessToken';
            var APPID = "da3e1502cc678218532b61f0a4d0a31c";
            var KEY_SERCURITY = "e5f92ab61f0a4d0a31c4004afb85c998";
            var data = {
                idPartner: idPartner,
                namePartner: namePartner,
                key: MD5(APPID + idPartner + namePartner + KEY_SERCURITY),
                async: false
            };
            this.get(url, data, function(resp){
                token = resp.ResponseData;
                sperStorage.setItem('token', token);
            });
            return token;
        },
        get: function(url, data, callback) {
            return jQuery.ajax({
                url: '/sper_api.php',
                type: 'post',
                dataType: 'json',
                async: data.async ? data.async: true,
                data: {
                    url: url,
                    data: data,
                    method: 'get'
                },
                success: function (resp) {
                    if(callback)
                        callback(resp);
                }
            });
        },
        post: function(url, data, callback) {
            return jQuery.ajax({
                url: '/sper_api.php',
                type: 'post',
                dataType: 'json',
                data: {
                    url: url,
                    data: data,
                    method: 'post'
                },
                success: function (resp) {
                    if(callback)
                        callback(resp);
                }
            });
        },
        location: {
            getListCities : function(params, callback) {
                var url = 'http://test.sper.com.vn/api/business/GetListCities';
                params.token = token;
                params.idPartner = idPartner;
                params.namePartner = namePartner;
                params.key = MD5(idPartner + namePartner + keyPartner);
                sperApi.get(url, params, callback);
            }
        },
        category: {
            getList: function(params, callback) {
                var url = 'http://test.sper.com.vn/api/business/GetListCateByDate';
                params.token = token;
                params.idPartner = idPartner;
                params.namePartner = namePartner;
                params.key = MD5(idPartner + namePartner + keyPartner);
                sperApi.get(url, params, callback);
            }
        },
        account: {
            register: function(account, callback) {
                var url = 'http://test.sper.com.vn/api/account/RegisterAccount';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.username + idPartner + namePartner + keyPartner);
                return sperApi.post(url, account, callback);
            },
            update: function (account, callback) {
                var url = 'http://test.sper.com.vn/api/account/UpdateAccount';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.accid + idPartner + namePartner + keyPartner);
                return sperApi.post(url, account, callback);
            },
            get: function(account, callback) {
                var url = 'http://test.sper.com.vn/api/account/GetAccount';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.username + idPartner + namePartner + keyPartner);
                account.token = token;
                account.password = MD5(account.password);
                return sperApi.get(url, account, callback);
            },
            authen: function(account, callback) {
                var url = 'http://test.sper.com.vn/api/account/AuthenAccount';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.accid + idPartner + namePartner + keyPartner);
                account.codeAuthen = MD5(MD5(account.codeAuthen));
                return sperApi.get(url, account, callback);
            },
            changePass: function(account, callback) {
                var url = 'http://test.sper.com.vn/api/account/ChangePass';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.username + idPartner + namePartner + keyPartner);
                account.token = token;
                return sperApi.get(url, account, callback);
            },
            changeAvatar: function(account, callback) {
                var url = 'http://test.sper.com.vn/api/account/ChangeAvatar';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.accid + idPartner + namePartner + keyPartner);
                account.token = token;
                return sperApi.post(url, account, callback);
            }
        },
        business: {
            service: {
                add: function(service) {
                    var url = 'http://test.sper.com.vn/api/business/AddService';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(service.accid + idPartner + namePartner + keyPartner);
                    service.token = token;
                    return sperApi.post(url, service, callback);
                },
                get: function(service) {
                    var url = 'http://test.sper.com.vn/api/business/GetService';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(service.serviceid + idPartner + namePartner + keyPartner);
                    service.token = token;
                    return sperApi.get(url, service, callback);
                },
                update: function(service) {
                    var url = 'http://test.sper.com.vn/api/business/UpdateService';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(service.serviceid + idPartner + namePartner + keyPartner);
                    service.token = token;
                    return sperApi.post(url, service, callback);
                },
                searchByCate: function(service, callback) {
                    var url = 'http://test.sper.com.vn/api/business/SearchServiceByCate';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(idPartner + namePartner + keyPartner);
                    service.token = token;
                    return sperApi.post(url, service, callback);
                },
                searchByContent: function(service) {
                    var url = 'http://test.sper.com.vn/api/business/SearchServiceByContent';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(idPartner + namePartner + keyPartner);
                    service.token = token;
                    return sperApi.get(url, service, callback);
                }
            }
        },

    };

    var token = sperApi.getToken();
    
    var sperApp = angular.module('SperApp', ['ngSanitize'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('%%');
        $interpolateProvider.endSymbol('%%');
    });
    
    var sperMedia = {
        cities: false,
        categories: false,
        eventListeners: {},
        setCities: function(cities){
            this.cities = cities;
            this.notify('cities', cities);
        },
        notify: function(evt, data) {
            var handlers = this.eventListeners[evt] || [];
            handlers.forEach(function(handler){
                handler.call(null, data);
            });
        },
        listen: function(evt, handler) {
            if(typeof this.eventListeners[evt] == 'undefined') {
                this.eventListeners[evt] = [];
            }
            this.eventListeners[evt].push(handler);
        }
    };

    sperApp.controller('Sper.Header', ['$scope', function($scope) {

        sperApi.location.getListCities({}, function(resp){
            $scope.cities = resp.ResponseData;
            sperMedia.cities = $scope.cities;
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


        sperApi.category.getList({}, function (resp) {
            $scope.categories = buildCategoryTree(resp.ResponseData.sort(function(a, b) { return a.position - b.position;  }));
            sperMedia.categories = $scope.categories;
            console.log(sperMedia.categories);
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

        $scope.selectCategory = function() {
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
    }]);

    sperApp.controller('Sper.Service.Highlight', ['$scope', function ($scope) {
        
        var categoryIntervalId = setInterval(function(){
            if (sperMedia.categories) {
                $scope.categories = sperMedia.categories;
                $scope.selectCategory($scope.categories[0]);
                $scope.$apply();
                clearInterval(categoryIntervalId);
            }
        }, 10);
        
        $scope.selectCategory = function(category) {
            $scope.selectedCategory = category;
            $scope.selectedSubCategory = null;
            $scope.reloadServices();
        };

        $scope.reloadServices = function() {
            var currentLocation = {
                latitude: 10.823099,
                longitude: 106.629662
            };
            var distance = function(a, b) {
                a.latitude = parseFloat(a.latitude);
                b.latitude = parseFloat(b.latitude);
                a.longitude = parseFloat(a.longitude);
                b.longitude = parseFloat(b.longitude);
                return Math.sqrt((a.latitude - b.latitude) * (a.latitude - b.latitude) + (a.longitude - b.longitude) * (a.longitude - b.longitude));
            };
            sperApi.business.service.searchByCate({
                lstcategoryid: ($scope.selectedSubCategory && $scope.selectedSubCategory.categoryid) || $scope.selectedCategory.categoryid,
                latitude: 10.823099,
                longitude: 106.629662
            }, function (resp) {
                var services = resp.ResponseData;
                if($scope.selectedOrderBy.index === 'newest') {
                    services.sort(function(a, b){
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
        $scope.selectOrderBy = function(orderBy){
            $scope.selectedOrderBy = orderBy;
            $scope.reloadServices();
        };
        $scope.selectedOrderBy = $scope.orderBys[0];

        $scope.selectSubCategory = function(subCategory) {
            $scope.selectedSubCategory = subCategory;
            $scope.reloadServices();
        };
    }]);

    sperApp.controller('Sper.Banner.Top', ['$scope', function ($scope) {
        $scope.banners = [
            {
                bannerimg: '/images/top/1.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/top/2.png',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/top/3.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/top/4.jpg',
                bannerlink: '/'
            }
        ];
    }]);

    sperApp.controller('Sper.Banner.Slideshow', ['$scope', function ($scope) {
        $scope.banners = [
            {
                bannerimg: '/images/slideshow/1.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/slideshow/2.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/slideshow/3.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/slideshow/4.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/slideshow/5.jpg',
                bannerlink: '/'
            }
        ];
    }]);
    sperApp.controller('Sper.Account.Login', ['$scope', function ($scope) {
        $scope.error = {};
        $scope.login = function() {
            $scope.error = {};
            if(!$scope.username) {
                $scope.error.username = true;
                $scope.error.message = 'Bạn phải nhập tên đăng nhập';
                $scope.$apply();
                return false;
            }
            if (!$scope.password) {
                $scope.error.password = true;
                $scope.error.message = 'Bạn phải nhập mật khẩu';
                $scope.$apply();
                return false;
            }
            sperApi.account.get({
                username: $scope.username,
                password: $scope.password
            }, function(resp) {
                console.log(resp);
                if(!resp.ResponseStatus.Status) {
                    $scope.error.message = resp.ResponseStatus.Message;
                    if(3 === resp.ResponseStatus.ReturnCode) {
                        $scope.error.username = true;
                    }
                    $scope.$apply();
                }
            });
        };
    }]);
    sperApp.controller('Sper.Account.Register', ['$scope', function ($scope) {
    }]);
})();