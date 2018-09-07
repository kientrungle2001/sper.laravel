<div style="overflow: hidden; height: 200px;">
    <div class="embed-responsive embed-responsive-16by9" ng-controller="Sper.News.Detail">
        <img class="w-100-p img-responsive" src="%%article.article_img%%" />
    </div>
</div>
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default" ng-controller="Sper.News.Detail">
                <div class="panel-body">
                    <ul class="list-group">
                        <li class="list-group-item bd-none bb-2">
                            <h1 class="heading article-heading fs-18 text-bold mg-1 text-service-highlight">
                                %%article.article_title%%
                            </h1>
                            <div class="clearfix">
                                <div class="pull-right">
                                    <button class="btn-bookmark btn btn-success" ng-click="bookmark(article)">
                                        <span class="bookmark-scale fa fa-bookmark fa-1x"></span>
                                         Lưu bài viết
                                    </button>
                                </div>
                            </div>
                            <div class="article-body clearfix text-justify" ng-bind-html="article.article_content">
                                 
                            </div>
                        </li>
                        <li class="list-group-item bd-none bb-2">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="fb-like" data-href="https://sper.vn/news/detail?blog_id=%%article.id%%" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                                </div>
                                <div class="pull-right">
                                     Đánh giá 
                                    <span class="glyphicon glyphicon-star"></span>
                                     
                                    <span class="glyphicon glyphicon-star"></span>
                                     
                                    <span class="glyphicon glyphicon-star"></span>
                                     
                                    <span class="glyphicon glyphicon-star"></span>
                                     
                                    <span class="glyphicon glyphicon-star"></span>
                                     
                                </div>
                            </div>
                            <div class="clearfix">
                                <div class="fb-comments" data-href="https://sper.vn/news/detail?blog_id=%%article.id%%" data-numposts="5"></div>
                            </div>
                        </li>
                        <li class="list-group-item bd-none" ng-controller="Sper.News.Others">
                            <h2 class="fs-18 text-bold mg-1">
                                Bài viết khác
                            </h2>
                            <div class="row-pd-5 row">
                                <div class="col-md-3" ng-repeat="item in items">
                                    <div class="panel panel-default mb-2">
                                        <div class="panel-heading pd-0">
                                            <a href="/news/detail?article_id=%%item.id%%">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <img class="img-responsive" src="%%item.article_img%%" />
                                                </div>
                                            </a>
                                        </div>
                                        <div class="panel-body">
                                            <a href="/news/detail?article_id=%%item.id%%">
                                                <small class="fs-12" style="height: 30px; overflow: hidden; display: block; text-align: justify;">
                                                    %%item.article_title%%
                                                </small>
                                            </a>
                                        </div>
                                        <div class="panel-footer">
                                            <div class="media">
                                                <div class="media-left">
                                                    <img class="img-circle media-object" src="http://placehold.it/36x36" />
                                                </div>
                                                <div class="media-body">
                                                    <strong class="fs-12">
                                                        Thu Phuong
                                                    </strong>
                                                    <small class="fs-12">
                                                        %%item.created_at%%
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <ul class="list-group">
                <li class="text-center list-group-item">
                    <h2 class="fs-18 mg-1">
                        Tải về app Sper
                    </h2>
                    <div>
                        <img style="width: 110px" src="/images/app/google-play.png" />
                        <img style="width: 110px" src="/images/app/ios-store.png" />
                    </div>
                </li>
                <li class="text-center list-group-item">
                    <h2 class="fs-18 mg-1">
                        Liên hệ truyền thông
                    </h2>
                    <button class="btn-block pd-3 btn btn-success">
                        <span class="fs-18 relative glyphicon glyphicon-download" style="left: -10px; transform: scale(2, 2)"></span>
                         Liên hệ đội ngũ truyền thông Sper 
                    </button>
                </li>
                <li class="text-center list-group-item">
                    <h2 class="fs-18 mg-1">
                        Theo dõi các kênh truyền thông khác của Sper
                    </h2>
                    <div class="clearfix">
                        <span class="fab fa-facebook-square fa-3x"></span>
                        <span class="fab fa-linkedin-square fa-3x"></span>
                        <span class="fab fa-twitter-square fa-3x"></span>
                        <span class="fab fa-instagram fa-3x"></span>
                    </div>
                </li>
                <li class="list-group-item" ng-controller="Sper.News.Featureds">
                    <div class="relative thumbnail pd-0" ng-repeat="item in items">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img class="img-responsive" src="%%item.article_img%%" />
                        </div>
                        <div class="absolute p-bottom-0 w-100-p caption">
                            <a href="/news/detail?article_id=%%item.id%%">
                                <div class="relative">
                                    <h2 class="text-center pd-3 bd-2 b-r-3 fs-18 text-white text-bold" style="top: 0; left: 0; opacity: 0.7; z-index: 1; background: #333;">
                                        <span class="visibility: hidden;">
                                            %%item.article_title%%
                                        </span>
                                    </h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <img class="img-responsive" src="/images/others/ad2.jpeg" />
                </li>
            </ul>
        </div>
    </div>
</div>