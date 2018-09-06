<div class="row-pd-5 row">
    <div class="col-md-3" ng-repeat="item in items">
        <div class="panel panel-default mb-2">
            <div class="panel-heading pd-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <img class="img-responsive" src="%%item.review_img%%" />
                </div>
            </div>
            <div class="panel-body" style="height: 80px; overflow: hidden;">
                <a href="#">
                    <small>
                        %%item.review_title%%
                    </small>
                </a>
                <div class="hide clearfix">
                    <div class="pull-left">
                        <span class="glyphicon glyphicon-map-marker"></span>
                         2 chi nhanh
                    </div>
                    <div class="pull-right">
                        To doi
                    </div>
                </div>
            </div>
            <div class="panel-footer">
                <div class="clearfix">
                    <div class="pull-left">
                        <span class="far fa-heart fa-1x"></span>
                         %%item.review_likes%% 
                        <span class="far fa-comments fa-1x"></span>
                         %%item.review_comments%% 
                        <span class="fas fa-share-alt fa-1x"></span>
                         %%item.review_shares%% 
                    </div>
                    <div class="pull-right">
                        <span class="pointer fa fa-bookmark fa-1x" ng-click="bookmark(item)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>