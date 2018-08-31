<ul class="media-list">
    <li class="media" ng-repeat="blog in items">
        <div class="media-left">
            <img class="media-object" src="http://placehold.it/80x80" />
        </div>
        <div class="media-body">
            <h4 class="media-heading" style="height: 20px; overflow: hidden;">
                 %%blog.blog_title%% 
            </h4>
            <div class="clearfix" style="height: 60px; overflow: hidden;">
                 %%blog.blog_content%% 
            </div>
        </div>
    </li>
</ul>