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
    <div class="panel panel-default" ng-controller="Sper.Blog.Board">
        <div class="panel-heading pd-0">
            <div class="row">
                <div class="col-md-6">
                    <ul align="justified" type="tabs" class="nav nav-tabs nav-justified bd-none">
                        <li role="presentation" ng-class="{'active': orderBy == 'newest'}">
                            <a href="#" onclick="return false;" ng-click="selectOrderBy('newest')">
                                Mới nhất
                            </a>
                        </li>
                        <li role="presentation" ng-class="{'active': orderBy == 'mostview'}">
                            <a href="#" onclick="return false;" ng-click="selectOrderBy('mostview')">
                                Xem nhiều nhất
                            </a>
                        </li>
                        <li role="presentation" ng-class="{'active': orderBy == 'experience'}">
                            <a href="#" onclick="return false;" ng-click="selectOrderBy('experience')">
                                Kinh nghiệm
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="clearfix">
                        <ul type="tabs" class="pull-right nav nav-tabs bd-none">
                            <li role="presentation" class="dropdown dropdown-no-close">
                                <a class="data-toggle" href="#" data-toggle="dropdown">
                                    Chu de 
                                    <span class="caret"></span>
                                </a>
                                <ul align="right" class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="#">
                                            Chu de 1
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Chu de 2
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-body pd-0">
            <div class="row-pd-5 mt-3 row">
                <div class="col-md-3" ng-repeat="item in items">
                    <div class="panel panel-default mb-2">
                        <div class="panel-heading pd-0">
                            <div class="embed-responsive embed-responsive-16by9">
                                <img class="img-responsive" src="%%item.blog_img%%" />
                            </div>
                        </div>
                        <div class="panel-body">
                            <a href="/blog/detail?blog_id=%%item.id%%">
                                <strong class="d-block" style="height: 40px; overflow: hidden;">
                                    %%item.blog_title%%
                                </strong>
                            </a>
                        </div>
                        <div class="panel-footer">
                            <div class="clearfix">
                                <span class="bookmark-scale pointer fa fa-bookmark fa-1x" ng-click="bookmark(item)"></span>
                                 %%item.blog_likes%% 
                                <span class="far fa-comments fa-1x"></span>
                                 %%item.blog_comments%% %%item.blog_views%% views 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>