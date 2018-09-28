<div class="container mt-3">
    <ol class="breadcrumb">
        <li>
            <a href="/">
                Trang chủ
            </a>
        </li>
        <li class="active">
             Sản phẩm 
        </li>
    </ol>
</div>
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
<div class="container mt-3">
    <div class="row-pd-5 row">
        <div class="col-md-3">
            <div class="clearfix bg-white-i">
                <ul class="service-category list-group mt-3">
                    <li class="active list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Trang chủ
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Ảnh và Video 2.1K
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="/clientarea/collection">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Bình luận (220)
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Bản đồ
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Đánh giá
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="#">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Chi nhánh
                        </a>
                    </li>
                    <li class="list-group-item pd-1 pl-5">
                        <a href="/blog">
                            <span class="glyphicon glyphicon-align-justify"></span>
                             Sản phẩm
                        </a>
                    </li>
                </ul>
            </div>
            <div class="clearfix mt-3 mb-3">
                <img class="img-responsive" src="/images/others/ad2.jpeg" />
            </div>
        </div>
        <div class="col-md-9">
            <div class="clearfix" ng-controller="Sper.Service.Detail.Product.List">
                <div class="row-pd-5 row">
                    <div class="col-sm-2 col-md-4 col-lg-3" ng-repeat="item in items">
                        <div class="panel panel-default mb-2">
                            <div class="panel-heading pd-0">
                                <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                    <img class="img-responsive" src="%%getImage(item).path | thumb:640:360%%" />
                                </div>
                            </div>
                            <div class="panel-body">
                                <a class="service-heading text-service-highlight" href="/service/product?serviceid=%%item.serviceid%%&prodid=%%item.prodid%%">
                                    <h4>
                                        %%item.prodcode%%
                                    </h4>
                                </a>
                                <p>
                                    Giá : 
                                    <span style="color: red;">
                                        %%getPrice(item).price | toCurrency%%đ
                                    </span>
                                    /%%getPrice(item).unit%%
                                </p>
                                <p>
                                    <a class="text-service" href="/service/product?serviceid=%%item.serviceid%%&prodid=%%item.prodid%%">
                                        <span class="fs-14 fas fa-chevron-circle-up fa-2x"></span>
                                         Xem chi tiết
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center">
                    <a class="text-view-more" href="#">
                        Xem thêm
                    </a>
                </p>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    <h2 class="fs-18 text-bold">
                        Hình ảnh từ cộng đồng
                    </h2>
                    <div class="row-pd-5 row">
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-md-4 col-lg-3">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <div class="embed-responsive embed-responsive-16by9" style="overflow:hidden;">
                                        <img class="img-responsive" src="https://placehold.it/204x115" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3" ng-controller="Sper.Service.Detail">
                <div class="col-md-8">
                    <div class="panel panel-default" ng-repeat="comment in service.listComment">
                        <div class="panel-heading">
                            <div class="media">
                                <div class="media-left">
                                    <img class="img-circle media-object" style="width: 32px; height: auto;" src="%% comment.avatar || 'http://placehold.it/32x32' %%" />
                                </div>
                                <div class="media-body">
                                    <h4 class="fs-14 media-heading">
                                        %%comment.fullname%%
                                    </h4>
                                    <div class="fs-12 text-light">
                                        %%comment.createddate%%
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="clearfix" ng-bind-html="comment.cmtdesc"></div>
                            <div class="fs-12 clearfix">
                                <span class="fs-12 fas fa-heart fa-2x"></span>
                                 Thích 
                                <span class="fs-12 fas fa-comment fa-2x"></span>
                                 Thảo luận 
                                <span class="fs-12 fas fa-exclamation-triangle fa-2x"></span>
                                 Báo lỗi 
                            </div>
                        </div>
                        <div class="panel-footer" style="background: #F9F9F9;">
                            <div class="media">
                                <div class="media-left">
                                    <img class="img-circle media-object" src="https://placehold.it/32x32" />
                                </div>
                                <div class="w-100-p media-body">
                                    <input class="form-control" />
                                </div>
                            </div>
                            <ul class="media-list mt-3">
                                <div class="media">
                                    <div class="media-left">
                                        <img class="img-circle media-object" src="https://placehold.it/32x32" />
                                    </div>
                                    <div class="w-100-p media-body">
                                        <h4 class="fs-14 media-heading">
                                            <strong>
                                                Thảo Nguyễn
                                            </strong>
                                             lúc 
                                            <small>
                                                11:30 20/10/2018
                                            </small>
                                        </h4>
                                        <div class="clearfix">
                                             Được đó 
                                        </div>
                                    </div>
                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="list-group">
                        <li class="text-left list-group-item">
                            <strong>
                                %%service.listComment.length%%
                            </strong>
                             Bình luận đã chia sẻ 
                        </li>
                        <li class="text-left list-group-item">
                            <strong>
                                6
                            </strong>
                             Tuyệt vời 
                            <br />
                             
                            <strong>
                                53
                            </strong>
                             Khá tốt 
                            <br />
                             
                            <strong>
                                8
                            </strong>
                             Trung bình 
                            <br />
                             
                            <strong>
                                4
                            </strong>
                             Kém 
                            <br />
                             
                        </li>
                        <li class="text-left list-group-item">
                            <strong class="fs-18 text-service">
                                %%service.rate_avg%%
                            </strong>
                             Điểm - 
                            <strong>
                                Khá tốt
                            </strong>
                             
                        </li>
                        <li class="text-left list-group-item pd-0">
                            <button class="btn-block btn btn-success">
                                <span class="fas fa-comments fa-1x"></span>
                                 Viết bình luận
                            </button>
                        </li>
                    </ul>
                    <div class="clearfix">
                        <img class="img-responsive" src="/images/others/ad2.jpeg" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>