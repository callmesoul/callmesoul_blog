<!DOCTYPE html>
<html lang="en" ng-app="myApp">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iconfont.css">
    <link rel="stylesheet" href="assets/css/APlayer.min.css">
    <link rel="stylesheet" href="assets/css/css.css">

</head>
<body>

<div ui-view class="height-100"></div>

</body>
<script src="assets/js/jquery-1.10.1.min.js"></script>
<script src="assets/angular/angular.js"></script>
<script src="assets/angular/angular-ui-router.min.js"></script>
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