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