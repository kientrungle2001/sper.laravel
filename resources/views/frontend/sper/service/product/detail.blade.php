<div class="container mb-3" ng-controller="Sper.Service.Product.Detail">
    <div class="row-pd-0 bg-white-i row">
        <div class="detail-left col-md-4">
            <div class="relative embed-responsive embed-responsive-4by3">
                <img class="img-responsive" src="%% (getImage(product).path || 'http://placehold.it/1600x1200') | thumb:800:600  %%" />
                <div class="absolute  pd-3" style="bottom: 0; background: #ccc; opacity: 0.7;z-index: 1; width: 100%;">
                    <div class="invisible">
                        Thông tin
                    </div>
                </div>
                <div class="absolute  pd-3" style="bottom: 0; background: none; z-index: 2; width: 100%;">
                    <div>
                        Thông tin
                    </div>
                </div>
            </div>
        </div>
        <div class="relative detail-right col-md-8">
            <div class="mg-3">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="fs-25 text-bold">
                            %%product.prodcode%%
                        </h1>
                        <div>
                            <strong class="fs-20 text-red">
                                Giá %%getPrice(product).price | toCurrency%%đ/%%getPrice(product).unit%%
                            </strong>
                        </div>
                        <hr class="mt-1 mb-1" />
                        <div class="clearfix" ng-bind-html="product.proddesc">
                             
                        </div>
                        <div class="clearfix">
                            <button class="btn btn-success" ng-click="checkout()">
                                Đặt hàng
                            </button>
                            <button class="btn btn-success" ng-click="addToCart()">
                                <span class="fa fa-shopping-cart fa-1x"></span>
                                 Thêm vào giỏ hàng
                            </button>
                        </div>
                    </div>
                    <div class="text-center col-md-4 pt-3">
                        <div style="width: 160px; margin:0 auto;">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img class="img-responsive" src="%%service.serviceimg|thumb:640:360%%" />
                            </div>
                        </div>
                        <a href="/service/detail?serviceid=%%service.serviceid%%">
                            <h2 class="fs-14 text-bold">
                                %%service.servicename%%
                            </h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="absolute  pd-3" style="bottom: 0; background: #ccc; opacity: 0.7;z-index: 1; width: 100%;">
                <div class="invisible">
                    Thông tin
                </div>
            </div>
            <div class="absolute  pd-3" style="bottom: 0; background: none; z-index: 2; width: 100%;">
                <div class="row row-pd-0">
                    <span class="d-inline-block col-md-2">
                        <span class="glyphicon glyphicon-phone"></span>
                         Số điện thoại 
                    </span>
                    <span class="d-inline-block col-md-1">
                        <span class="glyphicon glyphicon-comment"></span>
                         Chat 
                    </span>
                    <span class="d-inline-block col-md-2">
                        <span class="glyphicon glyphicon-comment"></span>
                         Bình luận 
                    </span>
                    <span class="d-inline-block col-md-3">
                        <span class="bookmark-scale glyphicon glyphicon-bookmark"></span>
                         Lưu vào bộ sưu tập 
                    </span>
                    <span class="d-inline-block col-md-2">
                        <span class="glyphicon glyphicon-picture"></span>
                         Hình ảnh 
                    </span>
                    <span class="d-inline-block col-md-2">
                        <span class="glyphicon glyphicon-share-alt"></span>
                         Chia sẻ 
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>