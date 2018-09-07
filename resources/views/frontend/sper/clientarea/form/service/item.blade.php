<div class="col-sm-6 col-md-4" ng-repeat="product in products">
    <div class="panel panel-default mb-3">
        <div class="panel-heading pd-0">
            <img class="img-responsive" src="http://placehold.it/480x360" />
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
                <a href="/clientarea/product?prodid=%%product.prodid%%">
                    Xem chi tiết
                </a>
            </div>
        </div>
    </div>
</div>