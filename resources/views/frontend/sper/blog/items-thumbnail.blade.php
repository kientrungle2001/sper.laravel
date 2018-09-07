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