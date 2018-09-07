<div class="service-item col-md-15" ng-repeat="service in services">
    <div class="panel panel-default mb-2">
        <div class="panel-heading pd-0">
            <div class="embed-responsive embed-responsive-4by3" style="overflow:hidden;">
                <img class="img-responsive" ng-src="%%service.serviceimg%%" />
            </div>
        </div>
        <div class="panel-body">
            <a class="service-heading text-service-highlight" href="#">
                <h4>
                    %%service.servicename%%
                </h4>
            </a>
            <address class="service-address mb-1">
                %%service.address_identifier.addressname%%
            </address>
            <div class="fs-13 clearfix">
                <div class="text-service pull-left">
                    <span class="glyphicon glyphicon-map-marker"></span>
                     2 chi nhánh
                </div>
                <div class="pull-right">
                    %%selectedCategory.categoryname%%
                </div>
            </div>
        </div>
        <div class="bg-white-i panel-footer">
            <div class="clearfix">
                <div class="pull-left">
                     
                </div>
                <div class="pull-right">
                    <span class="pointer bookmark-scale fa fa-bookmark fa-1x" ng-click="bookmark(service)"></span>
                </div>
            </div>
        </div>
    </div>
</div>