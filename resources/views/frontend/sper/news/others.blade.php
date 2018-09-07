<div class="row-pd-5 row">
    <div class="col-md-3" ng-repeat="item in items">
        <div class="panel panel-default mb-2">
            <div class="panel-heading pd-0">
                <a href="/news/detail?article_id=%%item.id%%">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img class="img-responsive" src="%%item.article_img%%" />
                    </div>
                </a>
            </div>
            <div class="panel-body">
                <a href="/news/detail?article_id=%%item.id%%">
                    <small class="fs-12" style="height: 30px; overflow: hidden; display: block; text-align: justify;">
                        %%item.article_title%%
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
                        <small class="fs-12">
                            %%item.created_at%%
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>