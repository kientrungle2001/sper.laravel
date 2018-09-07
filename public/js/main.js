jQuery(document).ready(function () {
    setTimeout(function () {
        jQuery(document).on('click', '.dropdown-no-close .dropdown-menu', function (e) {
            e.stopPropagation();
        });
    }, 1000);

});

function getSperStorage() {
    return {
        prefix: 'sper_',
        _getItem: function (key) {
            var val = localStorage.getItem(this.prefix + key);
            if (null !== val) {
                return JSON.parse(val);
            } else {
                return null;
            }
        },
        _setItem: function (key, value) {
            if (null !== value)
                return localStorage.setItem(this.prefix + key, JSON.stringify(value));
        },
        _delItem: function (key) {
            return localStorage.removeItem(this.prefix + key);
        },
        _hasItem: function (key) {
            return null !== localStorage.getItem(this.prefix + key);
        },
        getItem: function (key) {
            var timestart = this._getItem('timestart_' + key);
            var timeout = this._getItem('timeout_' + key);
            var currentTime = (new Date()).getTime();
            if (currentTime > timestart + timeout) {
                this.removeItem(key);
                return null;
            } else {
                return this._getItem(key);
            }
        },
        setItem: function (key, value, timeout = 21600000) {
            if (!this._hasItem(key)) {
                this._setItem('timestart_' + key, (new Date()).getTime());
                this._setItem('timeout_' + key, timeout);
            }
            this._setItem(key, value);
        },
        removeItem: function (key) {
            this._delItem(key);
            this._delItem('timestart_' + key);
            this._delItem('timeout_' + key);
        },
        hasItem: function (key) {
            var hasItem = this._hasItem(key);
            var timestart = this._getItem('timestart_' + key);
            var timeout = this._getItem('timeout_' + key);
            var currentTime = (new Date()).getTime();
            if (currentTime > timestart + timeout) {
                this.removeItem(key);
                return false;
            } else {
                return hasItem;
            }
        }
    };
}

function getLocation(callback, failback) {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(callback);
    } else {
        console.log('Not support');
        failback();
    }
}

function getSperMedia() {
    return {
        cities: false,
        categories: false,
        eventListeners: {},
        currentLocation: false,
        setCurrentLocation: function (coords) {
            this.currentLocation = coords;
            this.notify('location', coords);
        },
        getCurrentLocation: function () {
            return this.currentLocation;
        },
        setCities: function (cities) {
            this.cities = cities;
            this.notify('cities', cities);
        },
        getCities: function() {
            return this.cities;
        },
        setDistricts: function (districts) {
            this.districts = districts;
        },
        getDistricts: function () {
            return this.districts;
        },
        setCategories: function (categories) {
            this.categories = categories;
            this.notify('categories', categories);
        },
        getCategories: function () {
            return this.categories;
        },
        notify: function (evt, data) {
            var handlers = this.eventListeners[evt] || [];
            handlers.forEach(function (handler) {
                handler.call(null, data);
            });
        },
        listen: function (evt, handler) {
            if (typeof this.eventListeners[evt] == 'undefined') {
                this.eventListeners[evt] = [];
            }
            this.eventListeners[evt].push(handler);
        }
    };
}

function handleUploadInfo(event) {
    var uploader = event.target;
    if(uploader.files.length) {
        
    }
}

/**
 * onload: function(reader) {
 *      reader.result;
 * }
 * onerror: function(error){
 * }
 */
function getBase64(file, onload, onerror) {
    var reader = new FileReader();
    reader.readAsDataURL(file);
    reader.onload = function () {
        onload(reader);
    };
    reader.onerror = onerror;
}