<div class="row-pd-5 row">
    <div class="col-md-3" ng-repeat="item in items">
        <div class="panel panel-default mb-2">
            <div class="panel-heading pd-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <img class="img-responsive" src="%%item.review_img%%" />
                </div>
            </div>
            <div class="panel-body" style="height: 80px; overflow: hidden;">
                <a class="text-service-highlight text-justify text-bold" href="#">
                    %%item.review_title%%
                </a>
            </div>
            <div class="panel-footer">
                <div class="clearfix">
                    <div class="fs-13 pull-left">
                        <span class="fs-13 far fa-heart fa-1x"></span>
                         %%item.review_likes%% 
                        <span class="fs-13 far fa-comments fa-1x"></span>
                         %%item.review_comments%% 
                        <span class="fs-13 fas fa-share-alt fa-1x"></span>
                         %%item.review_shares%% 
                    </div>
                    <div class="pull-right">
                        <span class="pointer bookmark-scale fa fa-bookmark fa-1x" ng-click="bookmark(item)"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>