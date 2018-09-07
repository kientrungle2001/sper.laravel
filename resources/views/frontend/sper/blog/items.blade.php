<ul class="media-list">
    <li class="d-table w-100-p bb-1 pb-3 media" ng-repeat="blog in blogs">
        <div class="media-left" style="width: 64px;">
            <img class="img-circle media-object" src="http://placehold.it/64x64" />
        </div>
        <div class="media-body">
            <h4 class="fs-14 text-bold media-heading">
                 My Trần 
            </h4>
            <div class="clearfix">
                <div class="text-light pull-left">
                     Chia sẻ blog - %% toDate(blog.created_at) | date: 'dd/MM/yyyy @ hh:mm' %% 
                </div>
                <div class="pull-right">
                    <button class="btn-bookmark btn btn-success br-3" ng-click="bookmark(blog)">
                        <span class="bookmark-scale glyphicon glyphicon-bookmark"></span>
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