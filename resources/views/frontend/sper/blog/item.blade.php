<li class="d-table w-100-p media" ng-repeat="blog in blogs">
    <div class="media-left">
        <img class="img-circle media-object" src="http://placehold.it/64x64" />
    </div>
    <div class="media-body">
        <h4 class="media-heading">
             My Tran 
        </h4>
        <div class="clearfix">
            <div class="pull-left">
                 Chia sẻ blog - 04/06/2018 - 19:03 
            </div>
            <div class="pull-right">
                <button class="btn btn-success">
                    <span class="glyphicon glyphicon-bookmark"></span>
                     Lưu bài blog 
                </button>
            </div>
        </div>
        <strong>
             %%blog.blog_title%% 
        </strong>
    </div>
</li>