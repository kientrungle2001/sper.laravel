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