<div class="relative form-group">
    <select class="input-sm-new dropdown-replace form-control" style="width: 120px;" ng-options="category.categoryid as category.categoryname for category in categories | orderBy: 'position'" ng-model="selectedCategoryId" ng-change="selectCategory()">
         
    </select>
    <span class="glyphicon glyphicon-chevron-down"></span>
</div>