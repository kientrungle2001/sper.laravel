function sper_banner_slideshow(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.banners = [
            {
                bannerimg: '/images/slideshow/1.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/slideshow/2.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/slideshow/3.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/slideshow/4.jpg',
                bannerlink: '/'
            },
            {
                bannerimg: '/images/slideshow/5.jpg',
                bannerlink: '/'
            }
        ];
    };
}