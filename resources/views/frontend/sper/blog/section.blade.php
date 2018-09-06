<div class="container" ng-controller="Sper.Blog.Section">
    <div class="row">
        <div class="col-md-7">
            <div class="panel panel-default">
                <div class="panel-heading pd-0">
                    <h2 class="mg-0 pd-3">
                        Blog &gt; 
                        <small>
                            Lựa chọn ngôi nhà ngoại ô cho gia đình trẻ
                        </small>
                    </h2>
                </div>
                <div class="panel-body">
                    <ul class="media-list">
                        <li class="d-table w-100-p bb-1 pb-3 media" ng-repeat="blog in blogs">
                            <div class="media-left" style="width: 64px;">
                                <img class="img-circle media-object" src="http://placehold.it/64x64" />
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                     My Trần 
                                </h4>
                                <div class="clearfix">
                                    <div class="pull-left">
                                         Chia sẻ blog - %% toDate(blog.created_at) | date: 'dd/MM/yyyy @ hh:mm' %% 
                                    </div>
                                    <div class="pull-right">
                                        <button class="btn btn-success" ng-click="bookmark(blog)">
                                            <span class="glyphicon glyphicon-bookmark"></span>
                                             Lưu bài blog 
                                        </button>
                                    </div>
                                </div>
                                <strong>
                                    <a href="/blog/detail?blog_id=%%blog.id%%">
                                        %%blog.blog_title%%
                                    </a>
                                </strong>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading pd-0">
                    <ul type="tabs" class="nav-justified nav nav-tabs">
                        <li role="presentation" ng-class="{'active': orderBy == 'newest'}">
                            <a href="#" onclick="return false;" ng-click="selectOrderBy('newest')">
                                <h4 class="pd-2 mg-0">
                                    Mới nhất
                                </h4>
                            </a>
                        </li>
                        <li role="presentation" ng-class="{'active': orderBy == 'mostview'}">
                            <a href="#" onclick="return false;" ng-click="selectOrderBy('mostview')">
                                <h4 class="pd-2 mg-0">
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
                                <div class="embed-responsive embed-responsive-4by3">
                                    <img class="media-object" style="max-width: 120px;" src="%%blog.blog_img%%" />
                                </div>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading" style="height: 20px; overflow: hidden;">
                                    <a href="/blog/detail?blog_id=%%blog.id%%">
                                        %%blog.blog_title%%
                                    </a>
                                </h4>
                                <div class="clearfix" style="height: 60px; overflow: hidden;">
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