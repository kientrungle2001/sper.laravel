<div class="container mt-3">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" mdo="2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <img class="img-responsive" src="http://placehold.it/1600x900" />
                </div>
                <div class="panel-body">
                    <h2 class="fs-16">
                        Hải Sư - Cơm Niêu Singapore
                    </h2>
                    <small>
                        2018/09/25 - 11:51 - 17 lượt xem
                    </small>
                </div>
                <div class="panel-footer">
                    <div class="media">
                        <div class="media-left">
                            <img class="img-circle media-object" style="width: 32px; height: auto;" src="http://placehold.it/32x32" />
                        </div>
                        <div class="media-body">
                            <h4 class="fs-14 media-heading">
                                Trần thạch cao Bảo Vy
                            </h4>
                            <div class="fs-12 text-light">
                                175 Lý Nam Đế
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" ng-controller="Sper.Video.Review">
    <h2 class="fs-16 text-bold">
        Video cùng thể loại
    </h2>
    <div class="row-pd-5 row">
        <div class="col-md-3" ng-repeat="item in items">
            <div class="panel panel-default mb-2">
                <div class="panel-heading pd-0">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img class="img-responsive" src="%%item.review_img|thumb:480:270%%" />
                    </div>
                </div>
                <div class="panel-body">
                    <a class="text-justify text-bold d-block fs-14" style="height: 18px; overflow: hidden;" href="/video/detail?videoid=%%item.id%%">
                        %%item.review_title%%
                    </a>
                    <div class="clearfix">
                        <small class="text-light">
                            %%item.created_at%%
                        </small>
                    </div>
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
</div>