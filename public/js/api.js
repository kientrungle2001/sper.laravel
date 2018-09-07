function getSperApi(sperStorage) {
    var idPartner = 2;
    var namePartner = 'web';
    var keyPartner = '3be3b14f25aef540d6617aac86685bb1';

    var sperApi = {
        getToken: function () {
            var token = sperStorage.getItem('token');
            if (null !== token) return token;

            var url = 'http://test.sper.com.vn/api/authen/GetAccessToken';
            var APPID = "da3e1502cc678218532b61f0a4d0a31c";
            var KEY_SERCURITY = "e5f92ab61f0a4d0a31c4004afb85c998";
            var data = {
                idPartner: idPartner,
                namePartner: namePartner,
                key: MD5(APPID + idPartner + namePartner + KEY_SERCURITY),
                async: false
            };
            this.get(url, data, function (resp) {
                token = resp.ResponseData;
                sperStorage.setItem('token', token);
            });
            return token;
        },
        get: function (url, data, callback) {
            return jQuery.ajax({
                url: '/sper_api.php',
                type: 'post',
                dataType: 'json',
                async: data.async ? data.async : true,
                data: {
                    url: url,
                    data: data,
                    method: 'get'
                },
                success: function (resp) {
                    if (callback)
                        callback(resp);
                }
            });
        },
        post: function (url, data, callback) {
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
                    if (callback)
                        callback(resp);
                }
            });
        },
        location: {
            getListCities: function (params, callback) {
                var url = 'http://test.sper.com.vn/api/business/GetListCities';
                params.token = token;
                params.idPartner = idPartner;
                params.namePartner = namePartner;
                params.key = MD5(idPartner + namePartner + keyPartner);
                sperApi.get(url, params, callback);
            }
        },
        category: {
            getList: function (params, callback) {
                var url = 'http://test.sper.com.vn/api/business/GetListCateByDate';
                params.token = token;
                params.idPartner = idPartner;
                params.namePartner = namePartner;
                params.key = MD5(idPartner + namePartner + keyPartner);
                sperApi.get(url, params, callback);
            }
        },
        account: {
            register: function (account, callback) {
                var url = 'http://test.sper.com.vn/api/account/RegisterAccount';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.user_identifier.username + idPartner + namePartner + keyPartner);
                return sperApi.post(url, account, callback);
            },
            update: function (account, callback) {
                var url = 'http://test.sper.com.vn/api/account/UpdateAccount';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.accid + idPartner + namePartner + keyPartner);
                return sperApi.post(url, account, callback);
            },
            get: function (account, callback) {
                var url = 'http://test.sper.com.vn/api/account/GetAccount';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.username + idPartner + namePartner + keyPartner);
                account.token = token;
                account.password = MD5(account.password);
                return sperApi.get(url, account, callback);
            },
            authen: function (account, callback) {
                var url = 'http://test.sper.com.vn/api/authen/AuthenAccount';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.accid + idPartner + namePartner + keyPartner);
                account.codeAuthen = MD5(MD5(account.codeAuthen));
                return sperApi.get(url, account, callback);
            },
            changePass: function (account, callback) {
                var url = 'http://test.sper.com.vn/api/authen/ChangePass';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.username + idPartner + namePartner + keyPartner);
                account.token = account.token || token;
                return sperApi.get(url, account, callback);
            },
            changeAvatar: function (account, callback) {
                var url = 'http://test.sper.com.vn/api/account/ChangeAvatar';
                account.idPartner = idPartner;
                account.namePartner = namePartner;
                account.key = MD5(account.accid + idPartner + namePartner + keyPartner);
                account.token = account.token || token;
                return sperApi.post(url, account, callback);
            }
        },
        business: {
            service: {
                add: function (service,callback) {
                    var url = 'http://test.sper.com.vn/api/business/AddService';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(service.accid + idPartner + namePartner + keyPartner);
                    service.token = service.token || token;
                    return sperApi.post(url, service, callback);
                },
                get: function (service, callback) {
                    var url = 'http://test.sper.com.vn/api/business/GetService';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(service.serviceid + idPartner + namePartner + keyPartner);
                    service.token = token;
                    return sperApi.get(url, service, callback);
                },
                update: function (service, callback) {
                    var url = 'http://test.sper.com.vn/api/business/UpdateService';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(service.serviceid + idPartner + namePartner + keyPartner);
                    service.token = service.token || token;
                    return sperApi.post(url, service, callback);
                },
                searchByCate: function (service, callback) {
                    var url = 'http://test.sper.com.vn/api/business/SearchServiceByCate';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(idPartner + namePartner + keyPartner);
                    service.token = token;
                    return sperApi.post(url, service, callback);
                },
                searchByContent: function (service, callback) {
                    var url = 'http://test.sper.com.vn/api/business/SearchServiceByContent';
                    service.idPartner = idPartner;
                    service.namePartner = namePartner;
                    service.key = MD5(idPartner + namePartner + keyPartner);
                    service.token = token;
                    return sperApi.get(url, service, callback);
                }
            },
            product: {
                getList: function(product, callback){
                    var url = 'http://test.sper.com.vn/api/business/GetListProduct';
                    product.idPartner = idPartner;
                    product.namePartner = namePartner;
                    product.key = MD5(product.serviceid + idPartner + namePartner + keyPartner);
                    return sperApi.get(url, product, callback);
                },
                add: function(product, callback) {
                    var url = 'http://test.sper.com.vn/api/business/AddProduct';
                    product.idPartner = idPartner;
                    product.namePartner = namePartner;
                    product.key = MD5(product.serviceid + idPartner + namePartner + keyPartner);
                    return sperApi.post(url, product, callback);
                },
                comment: {
                },
                like: {
                },
                share: {
                },
                bookmark: {
                }
            }
        },

        content: {
            blog: {
                find: function(blog, callback) {
                    return jQuery.ajax({
                        url: '/api/blogs/find',
                        method: 'get',
                        data: blog,
                        success: callback
                    });
                },
                get: function(blog_id, callback) {
                    return jQuery.ajax({
                        url: '/api/blogs/' + blog_id,
                        method: 'get',
                        data: {blog_id: blog_id},
                        success: callback
                    });                	
                },
                comment: {
                    getList: function(blog, callback) {
                    },
                    add: function(comment, callback) {
                    },
                    remove: function(comment, callback){
                    }
                },
                like: {
                    getList: function (blog, callback) {
                    },
                    add: function (like, callback) {
                    },
                    remove: function (like, callback) {
                    }
                },
                share: {
                    getList: function (blog, callback) {
                    },
                    add: function (share, callback) {
                    }
                },
                bookmark: {
                    getList: function (blog, callback) {
                    },
                    add: function (bookmark, callback) {
                    }
                }
            },
            review: {
                find: function (review, callback) {
                    return jQuery.ajax({
                        url: '/api/reviews/find',
                        method: 'get',
                        data: review,
                        success: callback
                    });
                },
                comment: {
                    getList: function (review, callback) {
                    },
                    add: function (comment, callback) {
                    },
                    remove: function (comment, callback) {
                    }
                },
                like: {
                    getList: function (review, callback) {
                    },
                    add: function (like, callback) {
                    },
                    remove: function (like, callback) {
                    }
                },
                share: {
                    getList: function (review, callback) {
                    },
                    add: function (share, callback) {
                    }
                },
                bookmark: {
                    getList: function (review, callback) {
                    },
                    add: function (bookmark, callback) {
                    }
                }
            },
            article: {
                find: function (article, callback) {
                    return jQuery.ajax({
                        url: '/api/articles/find',
                        method: 'get',
                        data: article,
                        success: callback
                    });
                },
                get: function(article_id, callback) {
                    return jQuery.ajax({
                        url: '/articles/' + article_id,
                        method: 'get',
                        success: callback
                    });
                },
                comment: {
                    getList: function (article, callback) {
                    },
                    add: function (comment, callback) {
                    },
                    remove: function (comment, callback) {
                    }
                },
                like: {
                    getList: function (article, callback) {
                    },
                    add: function (like, callback) {
                    },
                    remove: function (like, callback) {
                    }
                },
                share: {
                    getList: function (article, callback) {
                    },
                    add: function (share, callback) {
                    }
                },
                bookmark: {
                    getList: function (article, callback) {
                    },
                    add: function (bookmark, callback) {
                    }
                }
            }
        }

    };

    var token = sperApi.getToken();
    return sperApi;
}
