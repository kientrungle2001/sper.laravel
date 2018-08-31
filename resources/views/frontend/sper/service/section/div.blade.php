<div class="dropdown-menu-right dropdown-menu-category dropdown-menu" style="width: 300px">
    <div class="panel panel-default mg-0 pd-0" ng-repeat="category in categories" ng-class="{'panel-success': selectedSubCategory === category}">
        <div class="panel-heading mg-0">
            <a class="test relative d-block collapsed" onclick="return false;" ng-click="selectSubCategory(category)" data-toggle="collapse" href="#sub-category-%%category.categoryid%%">
                <input type="checkbox" />
                 %%category.categoryname%% 
                <span class="absolute caret" style="left: 90%; top: 45%;"></span>
            </a>
        </div>
        <div class="panel-body pd-0" id="sub-category-%%category.categoryid%%">
            <div class="panel panel-default mg-0 pd-0" ng-repeat="subCategory in category.children" ng-class="{'panel-success': selectedSubCategory === subCategory}">
                <div class="panel-heading mg-0">
                    <a class="test relative d-block collapsed" onclick="return false;" ng-click="selectSubCategory(subCategory)" data-toggle="collapse" href="#sub-category-%%subCategory.categoryid%%">
                        <input type="checkbox" />
                         %%subCategory.categoryname%% 
                        <span class="absolute caret" style="left: 90%; top: 45%;"></span>
                    </a>
                </div>
                <div class="panel-body pd-0" id="sub-category-%%subCategory.categoryid%%">
                    <ul class="list-group mg-0">
                        <li class="list-group-item" ng-repeat="subCategoryLevel2 in subCategory.children" ng-class="{'active': selectedSubCategory === subCategoryLevel2}">
                            <a href="#" onclick="return false;" ng-click="selectSubCategory(subCategoryLevel2)">
                                <input type="checkbox" />
                                 %%subCategoryLevel2.categoryname%%
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>