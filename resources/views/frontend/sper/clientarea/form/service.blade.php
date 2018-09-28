<div tabindex="-1" role="dialog" class="modal fade" id="previewModal">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                Xem trước
            </div>
            <div class="modal-body">
                <img class="img-responsive" id="previewImg" />
                <input type="hidden" id="base64Img" />
            </div>
            <div class="modal-footer">
                <div class="clearfix">
                    <div class="pull-left">
                        <button class="btn btn-success" ng-click="updateServiceImg()" data-dismiss="modal">
                            Cập nhật
                        </button>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-danger" data-dismiss="modal">
                            Đóng lại
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="relative hover-container" style="height: 200px; overflow: hidden;">
    <h2 class="text-white text-center absolute w-100-p" style="bottom:15px;z-index: 1;">
        %%service.servicename%%
    </h2>
    <input class="hide" type="file" id="serviceImg" onchange="handleServiceUpload(event)" />
    <button class="absolute hover-inner btn btn-success" style="bottom: 40%; right: 40%; z-index: 1" onclick="jQuery('#serviceImg').click();">
        Đổi ảnh đại diện
    </button>
    <a class="absolute hover-inner btn btn-success" style="bottom: 5px; right: 5px; z-index: 1" href="/clientarea/editservice">
        Sửa dịch vụ
    </a>
    <div class="embed-responsive embed-responsive-16by9">
        <img class="img-responsive" src="%%service.serviceimg || 'http://placehold.it/1366x700' %%" />
    </div>
</div>
<div class="row-pd-5 row mt-3">
    <div class="col-sm-6 col-md-4" ng-repeat="product in products | filter: {deleted: false}">
        <div class="panel panel-default mb-3">
            <div class="panel-heading pd-0">
                <a href="/clientarea/product?prodid=%%product.prodid%%">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img class="img-responsive" src="%%product.prodimg || 'http://placehold.it/480x360'%%" />
                    </div>
                </a>
            </div>
            <div class="panel-body">
                <a href="/clientarea/product?prodid=%%product.prodid%%">
                    <h4>
                        %%product.prodcode%%
                    </h4>
                </a>
                <address>
                    %%product.proddesc%%
                </address>
            </div>
            <div class="panel-footer">
                <div class="clearfix">
                    <div class="pull-left">
                        <span class="far fa-heart fa-1x"></span>
                         %%product.countLike%% 
                        <span class="far fa-comments fa-1x"></span>
                         %%product.listComment.length%% 
                        <span class="fa fa-share-alt fa-1x"></span>
                         %%product.countShare%% 
                    </div>
                    <div class="pull-right">
                        <span class="pointer glyphicon glyphicon-trash" ng-click="delete(product)"></span>
                    </div>
                </div>
                <div class="clearfix">
                    <div class="pull-left">
                        <a href="/clientarea/product?prodid=%%product.prodid%%">
                            Xem chi tiết
                        </a>
                    </div>
                    <div class="pull-right">
                        <a href="/clientarea/editproduct?prodid=%%product.prodid%%">
                            <span class="glyphicon glyphicon-edit"></span>
                             Sửa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>