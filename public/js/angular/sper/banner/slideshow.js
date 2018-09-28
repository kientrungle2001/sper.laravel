function sper_banner_slideshow(sperApi, sperStorage, sperMedia) {
    return function ($scope) {
        $scope.banners = [
            {
                bannerimg: '/images/slideshow/bong_tai_banner.jpg',
                bannerlink: '/',
                bannerdesc: 'Bông tai đẹp tại sper.vn<br />Chiết khấu 20% tại sper.vn'
            },
            {
                bannerimg: '/images/slideshow/banner_mat_day_chuyen.jpg',
                bannerlink: '/',
                bannerdesc: 'Mặt dây chuyền tại sper.vn<br />Chiết khấu 30% tại sper.vn'
            },
            {
                bannerimg: '/images/slideshow/NewBannerSmaller1350.png',
                bannerlink: '/',
                bannerdesc: 'Paula sper.vn<br />Chiết khấu 10% tại sper.vn'
            },
            {
                bannerimg: '/images/slideshow/banner-home.jpg',
                bannerlink: '/',
                bannerdesc: 'Linh kiện điện tử cao cấp tại sper.vn<br />Chiết khấu 40% tại sper.vn'
            },
            {
                bannerimg: '/images/slideshow/banner-05r.png',
                bannerlink: '/',
                bannerdesc: 'Nhẫn vàng 18k đính ngọc trai tại sper.vn<br />Chiết khấu 40% tại sper.vn'
            }
        ];
    };
}