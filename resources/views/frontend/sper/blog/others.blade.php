<div class="row-pd-5 row">
    <div class="col-md-3" ng-repeat="item in items">
        <div class="panel panel-default mb-2">
            <div class="panel-heading pd-0">
                <div class="embed-responsive embed-responsive-16by9">
                    <img class="img-responsive" src="%%item.blog_img%%" />
                </div>
            </div>
            <div class="panel-body">
                <small class="d-block" style="height: 35px; overflow:hidden;text-align: justify;">
                    %%item.blog_title%%
                </small>
            </div>
            <div class="panel-footer">
                <div class="media">
                    <div class="media-left">
                        <img class="img-circle media-object" src="http://placehold.it/36x36" />
                    </div>
                    <div class="media-body">
                        <strong>
                            Thu Phuong
                        </strong>
                        <small>
                            %%item.created_at%%
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>