function sper_clientarea_info(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        var user = $scope.user = sperStorage.getItem('user');
        console.log(user);
        $scope.update = function() {
            sperApi.account.update({
                "token": user.token,
                "accid": user.accid,
                "acctype": user.acctype,
                "fullname": $scope.user.fullname,
                "email": $scope.user.email,
                "phone": $scope.user.phone,
                "datebirth": $scope.user.datebirth,
                "address_identifier": $scope.user.address_identifier,
                "deleted": false,
                "status": 1
            }, function(resp) {
                if(resp.ResponseStatus.Status) {
                    sperStorage.setItem('user', user);
                    window.location.reload();
                }
            });
        };
    }
}