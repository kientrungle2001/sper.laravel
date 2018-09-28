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