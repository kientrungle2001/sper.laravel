<div class="container mt-3">
    <ol class="breadcrumb">
        <li>
            <a href="/">
                Trang chủ
            </a>
        </li>
        <li class="active">
             Blog 
        </li>
    </ol>
</div>
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default" ng-controller="Sper.Blog.Detail">
                <div class="panel-body pd-0">
                    <ul class="list-group">
                        <li class="list-group-item bd-none bb-2">
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="media">
                                        <div class="media-left">
                                            <img class="img-circle media-object" src="http://placehold.it/32x32" />
                                        </div>
                                        <div class="media-body">
                                            <h4 class="fs-14 text-bold mg-0 media-heading">
                                                 Khanh Huyen 
                                            </h4>
                                            <small class="fs-12 text-light">
                                                %%blog.created_at%%
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-right col-md-3">
                                    <button class="btn-bookmark btn btn-success" ng-click="bookmark(blog)">
                                        <span class="bookmark-scale fa fa-bookmark fa-1x"></span>
                                         Lưu bài viết
                                    </button>
                                </div>
                            </div>
                        </li>
                        <li class="list-group-item bd-none bb-2">
                            <h1 class="fs-18 text-bold mg-1">
                                %%blog.blog_title%%
                            </h1>
                            <div class="embed-responsive embed-responsive-16by9">
                                <img class="img-responsive" src="%%blog.blog_img%%" />
                            </div>
                            <div class="blog-body" ng-bind-html="blog.blog_content">
                                 
                            </div>
                        </li>
                        <li class="list-group-item bd-none bb-2">
                            <div class="clearfix">
                                <div class="pull-left">
                                    <div class="fb-like" data-href="https://sper.vn/blog/detail?blog_id=%%blog.id%%" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
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
                                <div class="fb-comments" data-href="https://sper.vn/blog/detail?blog_id=%%blog.id%%" data-numposts="5"></div>
                            </div>
                        </li>
                        <li class="list-group-item bd-none" ng-controller="Sper.Blog.Others">
                            <h2 class="fs-18 text-bold mg-1">
                                Bài viết khác
                            </h2>
                            <div class="row-pd-5 row">
                                <div class="col-md-3" ng-repeat="item in items">
                                    <div class="panel panel-default mb-2">
                                        <div class="panel-heading pd-0">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <img class="img-responsive" src="%%item.blog_img%%" />
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <a href="/blog/detail?blog_id=%%item.id%%">
                                                <small class="d-block fs-12" style="height: 35px; overflow:hidden;text-align: justify;">
                                                    %%item.blog_title%%
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
                                                    <small class="fs-12 text-light">
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
            <div class="panel panel-default" ng-controller="Sper.Blog.Lastest">
                <div class="panel-heading pd-0">
                    <ul type="tabs" class="nav-justified nav nav-tabs">
                        <li role="presentation" ng-class="{'active': orderBy=='newest'}">
                            <a href="#" onclick="return false;" ng-click="selectOrderBy('newest')">
                                <h4 class="pd-1 mg-0">
                                    Mới nhất
                                </h4>
                            </a>
                        </li>
                        <li role="presentation" ng-class="{'active': orderBy=='mostview'}">
                            <a href="#" onclick="return false;" ng-click="selectOrderBy('mostview')">
                                <h4 class="pd-1 mg-0">
                                    Xem nhiều nhất
                                </h4>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        <li class="media bb-1 pb-3" ng-repeat="blog in items">
                            <div class="media-left">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img class="media-object" style="max-width: 125px;" src="%%blog.blog_img%%" />
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="fs-14 text-bold media-heading" style="height: 16px; overflow: hidden;">
                                    <a href="/blog/detail?blog_id=%%blog.id%%">
                                        %%blog.blog_title%%
                                    </a>
                                </h4>
                                <div class="text-justify clearfix" style="height: 45px; overflow: hidden;">
                                     %%blog.blog_content%% 
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>