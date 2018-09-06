<div class="container mt-3">
    <ol class="breadcrumb">
        <li>
            <a href="/">
                Trang chủ
            </a>
        </li>
        <li class="active">
             Bảng tin Sper 
        </li>
    </ol>
    <div class="text-center">
        <h1>
            Bảng tin Sper
        </h1>
        <p>
            Khám phá thế giới của Sper tại đây
        </p>
    </div>
</div>
<div class="container-fluid" ng-controller="Sper.News.Board">
    <div class="row-pd-5 row">
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-body pd-3">
                    <h2>
                        Đối tác của chúng tôi
                    </h2>
                    <img class="img-responsive" src="http://placehold.it/360x900" />
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-body pd-1">
                    <div class="row-pd-5 row">
                        <div class="col-md-8">
                            <a href="/news/detail?article_id=%%articles[0].id%%">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <img class="img-responsive" src="%%articles[0].article_img%%" />
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/news/detail?article_id=%%articles[1].id%%">
                                <div class="embed-responsive embed-responsive-4by3">
                                    <img class="img-responsive" src="%%articles[1].article_img%%" />
                                </div>
                            </a>
                            <a href="/news/detail?article_id=%%articles[5].id%%">
                                <div class="embed-responsive embed-responsive-4by3 mt-1">
                                    <img class="img-responsive" src="%%articles[5].article_img%%" />
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row-pd-5 mt-2 row">
                        <div class="col-md-4">
                            <a href="/news/detail?article_id=%%articles[0].id%%">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img class="img-responsive" src="%%articles[2].article_img%%" />
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/news/detail?article_id=%%articles[0].id%%">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img class="img-responsive" src="%%articles[3].article_img%%" />
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="/news/detail?article_id=%%articles[0].id%%">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <img class="img-responsive" src="%%articles[4].article_img%%" />
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="panel panel-default">
                <div class="panel-body pd-0">
                    <img class="img-responsive" src="http://placehold.it/320x900" />
                </div>
            </div>
        </div>
    </div>
</div>