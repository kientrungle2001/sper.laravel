function sper_blog_detail(sperApi, sperStorage, sperMedia) {
    return function($scope) {
    	var u = new URL(window.location.href);
    	var blog_id = parseInt(u.searchParams.get('blog_id'));
        sperApi.content.blog.get(blog_id, function(resp){
            $scope.blog = resp;
            $scope.$apply();
        });
    };
}
