<style type="text/css">
    * {
        font-family: Arial;
    }
    /* Grid 5*/
    body {background: #eee;}
    .col-xs-15,
    .col-sm-15,
    .col-md-15,
    .col-lg-15 {
        position: relative;
        min-height: 1px;
        padding-right: 15px;
        padding-left: 15px;
    }

    .col-xs-15 {
        width: 20%;
        float: left;
    }
    @media (min-width: 768px) {
        .col-sm-15 {
            width: 20%;
            float: left;
        }
    }
    @media (min-width: 992px) {
        .col-md-15 {
            width: 20%;
            float: left;
        }
    }
    @media (min-width: 1200px) {
        .col-lg-15 {
            width: 20%;
            float: left;
        }
    }

    /* Grid Paddings */
    .row-pd-0 {
        margin-left: 0px;
        margin-right: 0px;
    }
    .row-pd-0  > [class*="col-"] {
        padding-left: 0px;
        padding-right: 0px;
    }
    
    .row-pd-5 {
        margin-left: -5px;
        margin-right: -5px;
    }
    .row-pd-5  > [class*="col-"] {
        padding-left: 5px;
        padding-right: 5px;
    }

    .row-pd-10 {
        margin-left: -10px;
        margin-right: -10px;
    }
    .row-pd-10  > [class*="col-"] {
        padding-left: 10px;
        padding-right: 10px;
    }

    /* Padding and Margin */
    .pd-0 {padding: 0;}
    .pd-1 {padding: 5px;}
    .pd-2 {padding: 10px;}
    .pd-3 {padding: 15px;}
    .pd-4 {padding: 20px;}
    .pd-5 {padding: 25px;}
    .pl-3 {padding-left: 15px;}
    .pl-5 {padding-left: 25px;}
    .pl-7 {padding-left: 35px;}
    .pr-5 {padding-right: 25px;}
    .pt-3 {padding-top: 15px;}
    .pt-5 {padding-top: 25px;}
    .pb-3 {padding-bottom: 15px;}
    .pb-5 {padding-bottom: 25px;}
    .pl-20 {padding-left: 100px;}
    .pr-20 {padding-right: 100px;}
    
    .pl-5-p {padding-left: 5%;}
    .pr-5-p {padding-right: 5%;}

    .mg-0 {margin: 0;}
    .mb-0 {margin-bottom: 0;}
    .mb-1 {margin-bottom: 5px;}
    .mb-2 {margin-bottom: 10px;}
    .mb-3 {margin-bottom: 15px;}
    .mt-1 {margin-top: 5px;}
    .mt-2 {margin-top: 10px;}
    .mt-3 {margin-top: 15px;}

    /* Width */
    .w-5-p {width: 5%;}
    .w-50-p {width: 50%;}
    .w-100-p {width: 100%;}
    
    /* Background */
    .bg-black {background: black; background-color: black;}
    .bg-white {background: white; background-color: white;}
    .bg-black-i {background: black !important; background-color: black !important;}
    .bg-white-i {background: white !important; background-color: white !important;}
    .bg-none-i {background: none !important;}
    .bg-download {background: #333;}
    .bg-copyright {background: #363636; background-color: #363636;}
    .bg-copyright a {color: #fff;}
    .bg-footer {background: #00A73A; background-color: #00A73A;}
    .bg-ccc{background: #ccc;}
    .bg-ddd{background: #ddd;}
    .bg-76 {background: #767676;}

    /* bg social buttons */
    .bg-phone {
        background: #00710C !important;
        background-color: #00710C !important;
        color: #fff;
    }

    .bg-facebook {
        background: #414E98 !important;
        background-color: #414E98 !important;
        color: #fff;
    }

    .bg-google-plus {
        background: #C5261C !important;
        background-color: #C5261C !important;
        color: #fff;
    }

    .btn-login-social, .login-icon {
        border: none;
        border-radius: 0;
    }

    .login-icon span {
        width: 10px;
        display: inline-block;
    }

    .btn-checkbox span.glyphicon {    			
        opacity: 0;				
    }
    .btn-checkbox.active span.glyphicon {				
        opacity: 1;				
    }

    /* Border */
    .bd-none{border: none;}
    .bd-1{border:1px solid #ddd;}
    .bd-2{border:2px solid #ddd;}
    .bb-1{border-bottom:1px solid #ddd;}
    .bb-2{border-bottom:2px solid #ddd;}
    .b-r-3 {border-radius: 15px;}

    /* Display and Alignment */
    .d-inline-block {display:inline-block;}
    .d-block {display:block;}
    .d-table {display:table;}
    .d-table-cell {display:table-cell;}
    .d-flex {display:flex;}
    .v-middle {vertical-align: middle;}

    /* Relative and Absolute */
    .relative {position: relative;}
    .absolute {position: absolute;}
    .fixed {position: fixed;}
    .p-top-0 {top: 0;}
    .p-top-5 {top: 5px;}
    .p-top-7 {top: 7px;}
    .p-top-9 {top: 9px;}
    .p-bottom-0 {bottom: 0;}
    .p-right-0 {right: 0;}
    .p-right-5 {right: 5px;}
    .p-right-15 {right: 15px;}
    .p-left-0 {left: 0;}
    .p-top-50-p {top: 50%;}
    .p-top-30-p {top: 30%;}
    .p-left-50-p {left: 50%;}

    /* Fonts */

    .fs-10 {font-size: 10px;}
    .fs-11 {font-size: 11px;}
    .fs-12 {font-size: 12px;}
    .fs-13 {font-size: 13px;}
    .fs-14 {font-size: 14px;}
    .fs-15 {font-size: 15px;}
    .fs-16 {font-size: 16px;}
    .fs-17 {font-size: 17px;}
    .fs-18 {font-size: 18px;}
    .fs-19 {font-size: 19px;}
    .fs-20 {font-size: 20px;}
    .fs-21 {font-size: 21px;}
    .fs-22 {font-size: 22px;}
    .fs-23 {font-size: 23px;}
    .fs-24 {font-size: 24px;}
    .fs-25 {font-size: 25px;}

    /* Cursor */
    .pointer {cursor: pointer;}


    .login-icon-2 {width: 40px;}
    
    /* Buttons */
    .btn-cart-page, .btn-common {width: 160px;}
    #shopping-cart-section table td {vertical-align: middle;}

    .btn-flex {
        display: inline-flex;
        align-items: flex-end; 
    }
    .btn-success {
        background: #00A73A;
    }

    /* Links */
    a {
        color: #333;
    }

    .account-menu .active a{
        color: #007037;
    }

    .account-menu .active {
        background: #fff;
    }

    .account-menu > li {
        border: none;
    }

    .active a {
        color:white;
    }

    /* Form and Inputs */
    input,select,textarea,button, .btn, .panel, .modal-content {
        border-radius: 0 !important;
    }

    /* Services */
    .service-category .glyphicon {
        visibility: hidden;
    }

    .service-category .heading {
        text-transform: uppercase;
    }

    .service-category .heading .glyphicon {
        visibility: visible;
    }

    /* Service Item */
    .service-heading h4 {font-size: 13px; margin: 0; padding: 0;font-weight: bold; height: 15px; overflow: hidden;}
    .service-address {font-size: 11px; height: 15px; overflow: hidden;}

    .address-search-input {top: 15px; left: 15px; width: 480px; height: 30px; padding: 5px;}
    .address-search-radius {top: 15px; left: 495px; width: 80px; height: 30px; padding: 5px;}

    /* Tabs */
    .tabs-no-border > li, .tabs-no-border > li > a {
        border: none !important;
    }

    .tabs-no-bg > li, .tabs-no-bg > li > a {
        background: none !important;
    }

    .tabs-service > li.active > a {
        color: #00C338 !important;
        text-decoration: underline;
    }

    .tabs-black > li, .tabs-black > li > a {
        color: white !important;
    }

    .tabs-black > li.active, .tabs-black > li.active > a {
        color: #00C338 !important;
        text-decoration: underline;
    }

    .text-service {
        color: #00C338 !important;
    }

    .text-service-promotion {
        color: red;
    }

    .text-white {
        color: #fff !important;
    }

    .text-service-highlight {
        color: #00ADF5 !important;
    }

    .text-bold {
        font-weight: bold;
    }

    .text-underline {
        text-decoration: underline;
    }

    /* Dropdown */
    .dropdown-submenu {
        position: relative;
    }

    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    .dropdown-submenu-left .dropdown-menu {
        top: 0;
        left: auto;
        right: 100%;
        margin-top: -1px;
    }

    .dropdown-no-close .dropdown-menu {
        max-height: 400px;
        overflow-y: scroll;
    }

    /* Footer */
    .no-padding {
        padding-left: 0;
        margin-left: 0;
    }
    .no-list-style li{
        list-style-type: none;
        padding-left: 0;
        margin-left: 0;
    }
    footer .no-list-style li a {
        color: white;
    }
    /* List Group */
    .list-group-item-cust {
	    padding-left: 0px;
    }

    .list-group-addon {
        padding: 10px 10px;
        font-size: 15px;
        display:inline;
        font-weight: normal;
        line-height: 1;
        color: #555555;
        text-align: center;
        background-color: #eeeeee;
        border: 1px solid #cccccc;
        border-radius: 6px;
    }

    /* Float Icon */
    .float-bar {
        position: fixed;
        top: 30%;
        right: 5px;
    }
    .float-bar .float-icon {
        padding: 7px;
        margin-top: 2px;
        color: #fff;
        background: #767676;
    }

    .download-apps img {
        width: 110px;
        height: auto;
        display: block;
        margin-top: 10px;
    }

    .copyright-apps img {
        width: 110px;
        height: auto;
    }

    .bocongthuong {
        max-width: 100%;
        height: auto;
    }
</style>