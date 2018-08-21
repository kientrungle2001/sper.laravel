(function() {
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
                searchByCate: function(service) {
                    var url = 'http://test.sper.com.vn/api/business/SearchServiceByCate';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(idPartner + namePartner + keyPartner);
                    service.token = token;
                    return sperApi.get(url, service, callback);
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
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
    sperApp.controller('Sper.Header', ['$scope', function($scope) {

        sperApi.location.getListCities({}, function(resp){
            $scope.cities = resp.ResponseData;
            $scope.$apply();
        });

        $scope.categories = [{
            categoryid: 1,
            categoryname: 'Cong ty'
        },
        {
            categoryid: 2,
            categoryname: 'To doi'
        }];
        
        $scope.getCategory = function(categoryid) {
            var selectedCategory = null;
            $scope.categories.forEach(function(category) {
                if(category.categoryid == categoryid) {
                    selectedCategory = category;
                }
            });
            return selectedCategory;
        };
        
        $scope.loadSelectedCategory = function() {
            var selectedCategoryId = sperStorage.getItem('selectedCategoryId');
            console.log(selectedCategoryId);
            if(!selectedCategoryId) {
                selectedCategoryId = $scope.categories[0].categoryid;
                sperStorage.setItem('selectedCategoryId', selectedCategoryId);
            }
            var selectedCategory = $scope.getCategory(selectedCategoryId);
            $scope.selectedCategory = selectedCategory;
        };
        $scope.loadSelectedCategory();
        console.log($scope.selectedCategory);
        $scope.setSelectedCategory = function(category) {
            sperStorage.setItem('selectedCategoryId', category.categoryid);
            $scope.selectedCategory = category;
        };
    }]);

})();