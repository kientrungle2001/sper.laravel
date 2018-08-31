function sper_service_map(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.radius = 0.5;
        $scope.options = [
            {
                value: 0.5,
                label: '500 m'
            },
            {
                value: 1,
                label: '1 km'
            },
            {
                value: 3,
                label: '3 km'
            },
            {
                value: 5,
                label: '5 km'
            },
            {
                value: 10,
                label: '10 km'
            },
            {
                value: 20,
                label: '20 km'
            }
        ];
        sperApi.business.service.searchByCate({
            latitude: 10.823099,
            longitude: 106.629662,
            lstcategoryid: sperStorage.getItem('selectedCategoryId')
        }, function (resp) {
            $scope.services = resp.ResponseData;
            $scope.chunks = $scope.chunk(resp.ResponseData, 5);
            $scope.$apply();
        });
        $scope.chunk = function (arr, chunkSize) {
            if (typeof arr == 'undefined') return [];
            var cloneArr = [];
            for (var j = 0; j < arr.length; j++) {
                cloneArr.push(arr[j]);
            }

            var chunks = [],
                i = 0,
                n = cloneArr.length;

            while (i < n) {
                chunks.push(cloneArr.slice(i, i += chunkSize));
            }

            return chunks;
        }
    }
}