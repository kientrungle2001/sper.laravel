(function() {
    var sperStorage = getSperStorage();
    
    getLocation(function (loc) {
        var coords = loc.coords;
        sperMedia.setCurrentLocation(coords);
    }, function () {

    });

    var sperMedia = getSperMedia();

    var sperApi = getSperApi(sperStorage);
    
    var sperApp = angular.module('SperApp', ['ngSanitize'], function($interpolateProvider) {
        $interpolateProvider.startSymbol('%%');
        $interpolateProvider.endSymbol('%%');
    });

    sperApp.controller('Sper.Header', ['$scope', sper_header(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.Service.Highlight', ['$scope', sper_service_highlight(sperApi, sperStorage, sperMedia)]);
	
    sperApp.controller('Sper.Service.Section', ['$scope', sper_service_section(sperApi, sperStorage, sperMedia)]);
	
    sperApp.controller('Sper.Video.Review', ['$scope', sper_video_review(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.Banner.Top', ['$scope', sper_banner_top(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.Banner.Slideshow', ['$scope', sper_banner_slideshow(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.Account.Login', ['$scope', sper_account_login(sperApi, sperStorage, sperMedia)]);
    
    sperApp.controller('Sper.Account.Register', ['$scope', sper_account_register(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.Service.Map', ['$scope', sper_service_map(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.Blog.Section', ['$scope', sper_blog_section(sperApi, sperStorage, sperMedia)]);
})();