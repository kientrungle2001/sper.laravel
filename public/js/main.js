jQuery(document).ready(function () {
    setTimeout(function () {
        jQuery(document).on('click', '.dropdown-no-close .dropdown-menu', function (e) {
            e.stopPropagation();
        });
        jQuery('.dropdown-menu-category .collapse').on('shown.bs.collapse', function () {
            jQuery(this).parent().find(".glyphicon-chevron-down:first").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
        }).on('hidden.bs.collapse', function () {
            jQuery(this).parent().find(".glyphicon-chevron-right:first").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
        });
    }, 1000);
    jQuery(window).resize(function() {
        jQuery('.detail-right').height(jQuery('.detail-left').height());
    });
    jQuery('.detail-right').height(jQuery('.detail-left').height());
    
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
        cart_items: [],
        selectedTab: false,
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
        },
        getCartItems: function() {
            return this.cart_items;
        },
        setCartItems: function(cart_items) {
            this.cart_items = cart_items;
            this.notify('cart_items', cart_items);
        },
        addToCart: function(product, service) {
            this.cart_items.push({
                product: product,
                service: service,
                quantity: 1
            });
        },
        selectCategoryTab: function(tab) {
            this.selectedTab = tab;
            this.notify('select_category_tab', tab);
        },
        getSelectedTab: function() {
            return this.selectedTab;
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

function handleServiceUpload(event) {
    if (event.target.files.length > 0) {
        var imgFile = event.target.files[0];
        if(imgFile.type.indexOf('image/') !== -1) {
            getBase64(imgFile, function(reader) {
                jQuery('#base64Img').val(reader.result);
                jQuery('#previewImg').attr('src', reader.result);
                jQuery('#previewModal').modal('show');
            }, function(evt) {
                // error
                console.log(evt);
            });
        } else {
            alert('Bạn phải chọn file ảnh');
        }
    }
}

function formatMoney(n, c, d, t) {
    var c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = d == undefined ? "." : d,
        t = t == undefined ? "," : t,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;

    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};