<div class="container mt-3" ng-controller="Sper.Service.Highlight">
    <div class="panel panel-default">
        <div class="panel-heading pd-0">
            <div class="row">
                <div class="col-md-3">
                    <ul type="tabs" class="text-uppercase nav nav-tabs bd-none">
                        <li role="presentation">
                            <a href="#">
                                <span class="glyphicon glyphicon-star"></span>
                                 Dịch vụ nổi bật nhất
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-9">
                    <ul type="tabs" class="text-uppercase nav nav-tabs bd-none">
                        <li role="presentation" ng-repeat="category in categories" ng-class="{'active': (selectedCategory === category)}" ng-click="selectCategory(category)">
                            <a href="#" onclick="return false;">
                                %%category.categoryname%%
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel-body pd-0">
            <div class="panel panel-success mg-0 bd-none">
                <div class="panel-heading pd-0">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3" mdo="3">
                            <ul type="tabs" class="nav nav-tabs bd-none">
                                <li role="presentation" ng-repeat="orderBy in orderBys" ng-class="{'active': selectedOrderBy === orderBy}">
                                    <a href="#" onclick="return false;" ng-click="selectOrderBy(orderBy)">
                                        %%orderBy.label%%
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <div class="clearfix">
                                <ul type="tabs" class="pull-right nav nav-tabs bd-none">
                                    <li role="presentation" class="dropdown">
                                        <a class="data-toggle" href="#" data-toggle="dropdown">
                                            %%selectedSubCategory.categoryname || 'Chủ đề'%% 
                                            <span class="caret"></span>
                                        </a>
                                        <ul align="right" class="dropdown-menu dropdown-menu-right">
                                            <li ng-repeat="subCategory in selectedCategory.children" ng-class="{'active': selectedSubCategory === subCategory}">
                                                <a href="#" onclick="return false;" ng-click="selectSubCategory(subCategory)">
                                                    %%subCategory.categoryname%%
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body pd-2">
                    <div class="row-pd-5 row">
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-15">
                            <div class="panel panel-default mb-2">
                                <div class="panel-heading pd-0">
                                    <img class="img-responsive" src="http://placehold.it/480x360" />
                                </div>
                                <div class="panel-body">
                                    <a href="#">
                                        <h4>
                                            Tran thach cao
                                        </h4>
                                    </a>
                                    <address>
                                        So 3 ngo 295 Bach Mai ...
                                    </address>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="glyphicon glyphicon-map-marker"></span>
                                             2 chi nhanh
                                        </div>
                                        <div class="pull-right">
                                            To doi
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer">
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <span class="fa fa-heart-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-comments-o fa-1x"></span>
                                             200 
                                            <span class="fa fa-share-alt fa-1x"></span>
                                             200 
                                        </div>
                                        <div class="pull-right">
                                            <span class="fa fa-bookmark fa-1x"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>