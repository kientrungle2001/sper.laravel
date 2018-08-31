<ul align="right" class="dropdown-menu dropdown-menu-right">
    <li class="dropdown-submenu dropdown-submenu-left" ng-repeat="subCategory in selectedCategory.children" ng-class="{'active': selectedSubCategory === subCategory}">
        <a class="test relative" href="#" onclick="return false;" ng-click="selectSubCategory(subCategory)">
            %%subCategory.categoryname%% 
            <span class="absolute caret" style="left: 90%; top: 45%;"></span>
        </a>
        <ul class="dropdown-menu">
            <li ng-repeat="subCategoryLevel2 in subCategory.children" ng-class="{'active': selectedSubCategory === subCategoryLevel2}">
                <a href="#" onclick="return false;" ng-click="selectSubCategory(subCategoryLevel2)">
                    %%subCategoryLevel2.categoryname%%
                </a>
            </li>
        </ul>
    </li>
</ul>