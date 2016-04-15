<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/me-pageloading.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <link rel="stylesheet" href="assets/css/APlayer.min.css">
    <link rel="stylesheet" href="assets/css/css.css">

</head>
<body>

<div class="container-fluid height-100" ng-controller="BlogMain">
    <div class="row height-100">
        <!--主页上部分-->
        <div class="main-top">
            <!--主页上左部分-->
            <div class="col-lg-2 col-md-2 col-sm-2  height-100 main-left">
                <div class="main-left-top">
                    <div class="logo"><a class="iconfont icon-logo"></a></div>

                    <div class="nav">
                        <ul>
                            <li>
                                <div class="icon"><a class="iconfont icon-index"></a> </div>
                                <div class="name">
                                    <div class="cnname">首页</div>
                                    <div class="enname">Home</div>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><a class="iconfont icon-code"></a> </div>
                                <div class="name">
                                    <div class="cnname">前端开发</div>
                                    <div class="enname">Front-end Development</div>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><a class="iconfont icon-dux"></a> </div>
                                <div class="name">
                                    <div class="cnname">DUXCMS</div>
                                    <div class="enname">Content Cms</div>
                                </div>
                            </li>
                            <li>
                                <div class="icon"><a class="iconfont icon-soul"></a> </div>
                                <div class="name">
                                    <div class="cnname">博客更新日记</div>
                                    <div class="enname">Update Blog Diary</div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="social flex-center">
                    <div class="flex-1">
                        <div>
                            <div class="icon"><a class="iconfont icon-wechat"></a></div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div>
                            <div class="icon"><a class="iconfont icon-qq"></a></div>
                        </div>
                    </div>
                    <div class="flex-1">
                        <div>
                            <div class="icon"><a class="iconfont icon-weibo"></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--主页上右部分-->
            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12 height-100 main-right" >
                <div ui-view></div>

                <div class="foter">
                    <a>&copyCallMeSoul</a> <a>Design：Oriharaki</a> <a>备案号：粤45466</a>
                </div>
            </div>
        </div>
        <!--主页下部分-->
        <div class="main-bottom">
            <div id="player1" class="aplayer"></div>
        </div>
    </div>
</div>

</body>
<script src="assets/js/jquery-1.10.1.min.js"></script>
<script src="assets/angular/angular.js"></script>
<script src="assets/angular/angular-ui-router.min.js"></script>
<script src="assets/angular/me-pageloading.min.js"></script>
<script src="assets/angular/snap.svg-min.js"></script>
<script src="assets/app/js/app.js"></script>
<script src="assets/app/js/services.js"></script>
<script src="assets/app/js/controllers.js"></script>
<script src="assets/app/js/filters.js"></script>
<script src="assets/app/js/directives.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/APlayer.js"></script>
<script>
    $(document).ready(function(){
        var ap1 = new APlayer({
            element: document.getElementById('player1'),
            narrow: false,
            autoplay: true,
            showlrc: false,
            music: {
                title: '陪你度过漫长岁月',
                author: '陈奕迅',
                url: 'http://m5.file.xiami.com/135/135/2100216776/1774917404_58964790_l.mp3?auth_key=6b2e61262070cd88d203df855638904d-1454457600-0-null',
                pic: 'music/Maroon5.jpg'
            }
        });
        ap1.init();
    })
</script>
</html>