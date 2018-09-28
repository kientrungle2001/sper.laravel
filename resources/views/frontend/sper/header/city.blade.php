<div class="relative form-group">
    <select class="input-sm-new dropdown-replace form-control" style="width: 120px;" ng-options="city.addcityid as city.addcityname for city in cities" ng-model="selectedCityId" ng-change="selectCity()">
         
    </select>
    <span class="glyphicon glyphicon-chevron-down"></span>
</div>