<div class="dropdown-menu-right dropdown-menu-category dropdown-menu" style="width: 300px">
    <div class="panel panel-default mg-0 pd-0" ng-repeat="category in categories" ng-class="{'panel-success': selectedSubCategory === category}">
        <div class="panel-heading mg-0">
            <div class="relative clearfix">
                <a class="collapsed" onclick="return false;" ng-click="selectSubCategory(category)" data-toggle="collapse" href="#promotion-sub-category-%%category.categoryid%%">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                     %%category.categoryname%% 
                </a>
                <input type="checkbox" class="absolute p-top-0 p-right-5" />
            </div>
        </div>
        <div class="collapse panel-body pd-0" id="promotion-sub-category-%%category.categoryid%%">
            <div class="panel panel-default mg-0 pd-0" ng-repeat="subCategory in category.children" ng-class="{'panel-success': selectedSubCategory === subCategory}">
                <div class="panel-heading mg-0">
                    <div class="relative clearfix">
                        <a class="collapsed pl-3" onclick="return false;" ng-click="selectSubCategory(subCategory)" data-toggle="collapse" href="#promotion-sub-category-%%subCategory.categoryid%%">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                             %%subCategory.categoryname%% 
                        </a>
                        <input type="checkbox" class="absolute p-top-0 p-right-5" />
                    </div>
                </div>
                <div class="collapse panel-body pd-0" id="promotion-sub-category-%%subCategory.categoryid%%">
                    <ul class="list-group mg-0">
                        <li class="list-group-item" ng-repeat="subCategoryLevel2 in subCategory.children" ng-class="{'active': selectedSubCategory === subCategoryLevel2}">
                            <div class="relative clearfix">
                                <a class="pl-5" href="#" onclick="return false;" ng-click="selectSubCategory(subCategoryLevel2)">
                                     %%subCategoryLevel2.categoryname%%
                                </a>
                                <input type="checkbox" class="absolute p-top-0 p-right-5" />
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>