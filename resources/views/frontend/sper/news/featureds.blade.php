<div class="relative thumbnail pd-0" ng-repeat="item in items">
    <div class="embed-responsive embed-responsive-16by9">
        <img class="img-responsive" src="%%item.article_img%%" />
    </div>
    <div class="absolute p-bottom-0 w-100-p caption">
        <a href="/news/detail?article_id=%%item.id%%">
            <h2 class="text-center pd-3 bd-2 b-r-3 fs-18 text-white text-bold">
                %%item.article_title%%
            </h2>
        </a>
    </div>
</div>