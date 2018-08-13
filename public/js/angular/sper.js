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
    var sperApp = angular.module('SperApp', ['ngSanitize'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    });
    sperApp.controller('Sper.Header', ['$scope', function($scope) {
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