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

    sperApp.controller('Sper.ClientArea.BranchManagement', ['$scope', sper_clientarea_branchmanagement(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.ClientArea.BranchService', ['$scope', sper_clientarea_branchservice(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.ClientArea.ChangePassword', ['$scope', sper_clientarea_changepassword(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.ClientArea.Collection', ['$scope', sper_clientarea_collection(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.ClientArea.CreateService', ['$scope', sper_clientarea_createservice(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.ClientArea.Feedback', ['$scope', sper_clientarea_feedback(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.ClientArea.Info', ['$scope', sper_clientarea_info(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.ClientArea.Privilege', ['$scope', sper_clientarea_privilege(sperApi, sperStorage, sperMedia)]);

    sperApp.controller('Sper.ClientArea.Service', ['$scope', sper_clientarea_service(sperApi, sperStorage, sperMedia)]);
})();