<?php
  include 'inc_head.php';
?>
<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js" integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD" crossorigin="anonymous"></script>
    </head>
    <body onload="javascript:openPopup('popup.html')">

        <div class="wrap">
            <div class="intro_bg">
                <div class="header">
                    <div class = "icon">
                        <a href="index.php"><img src="image/logo.png"></a>
                    </div>
                    <div class="searchArea">
                        <form action="https://www.hoyolab.com/search" method="GET">
                            <input type="text" placeholder="Search" name = "keyword">
                            <button type = "submit">검색</button>
                        </form>
                    </div>
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Information</a></li>
                        <li><a href="image.html">Image</a></li>
                        <li><a href="#">Video</a></li>
                    </ul>

            </div>

        </div>
        <div class="body">
            <div class ="main">
                <span class="contents">
                    <h2>캐릭터 정보</h2>
                    <ul class="character">
                        <li><a href="#"><img src="image/lumine.jpg"></a></li>
                        <li><a href="#"><img src="image/amber.jpg"></a></li>
                        <li><a href="#"><img src="image/kaeya.jpg"></a></li>
                        <li><a href="#"><img src="image/lisa.jpg"></a></li>
                        <li><a href="#"><img src="image/babara.jpg"></a></li>
                        <li><a href="#"><img src="image/noelle.jpg"></a></li>
                    </ul>
                    <ul class="character">
                        <li><a href="#"><img src="image/jean.jpg"></a></li>
                        <li><a href="#"><img src="image/diluc.jpg"></a></li>
                        <li><a href="#"><img src="image/fischl.jpg"></a></li>
                        <li><a href="#"><img src="image/sucrose.jpg"></a></li>
                        <li><a href="#"><img src="image/venti.jpg"></a></li>
                        <li><a href="#"><img src="image/bennett.jpg"></a></li>
                    </ul>
                    <ul class="character">
                        <li><a href="#"><img src="image/beidou.jpg"></a></li>
                        <li><a href="#"><img src="image/chongyun.jpg"></a></li>
                        <li><a href="#"><img src="image/keqing.jpg"></a></li>
                        <li><a href="#"><img src="image/ningguang.jpg"></a></li>
                        <li><a href="#"><img src="image/qiqi.jpg"></a></li>
                        <li><a href="#"><img src="image/xiangling.jpg"></a></li>
                    </ul>
                    <ul class="character">
                      <li><a href="#"><img src="image/xingqiu.jpg"></a></li>
                    </ul>
                    <div class = "update">
                        <h2>최신 업데이트 정보</h2>
                        <a href="#"><img src="image/sumeru.jpg"></a>
                    </div>

                </span>
                    <div class="section">
                        <div class = "image">
                            <h2>이미지 모음</h2>
                            <a href="image.html"><img src="image/Title Image2.png"></a>
                        </div>

                    </div>

            </div>
            <form method="POST" action="loginProcess.php">
                <div class="footer">
                    <div class="menu">
                        <a href = "https://genshin.hoyoverse.com/ko/home"><img src="image/genshin_home.png"></a>
                        <a href = "https://www.hoyolab.com/home"><img src="image/HoYoLAB.png"></a>
                        <a href = "https://twitter.com/genshinimpactkr"><img src="image/twitter.png"></a>
                        <a href= "https://cafe.naver.com/genshin"><img src="image/genshin_caffe.png"></a>
                        <ul class="nav justify-content-end">
                          <?php
                          if ($jb_login) {
                              echo "{$_SESSION['userId']}님 환영합니다  ";
                          ?>
                              <li class="nav-item d-flex align-items-center" onclick="logout()" style="cursor: pointer;">로그아웃</li>
                          <?php
                          } else {
                          ?>
                              <li class="nav-item">
                                  <a class="nav-link active" aria-current="page" href="join.html">회원가입 </a>
                              </li>

                              <li class="nav-item">
                                  <a class="nav-link" href="login.html">로그인</a>
                              </li>

                          <?php
                          }
                          ?>
                      </ul>
                    </div>
                </div>
                </form>

        </div>

      <script>
        function getCookie(name) {
        var cookie = document.cookie;

        if (document.cookie != "") {
            var cookie_array = cookie.split("; ");
            for ( var index in cookie_array) {
                var cookie_name = cookie_array[index].split("=");

                if (cookie_name[0] == "popupYN") {
                    return cookie_name[1];
                }
            }
        }
        return ;
    }

    function openPopup(url) {
        var cookieCheck = getCookie("popupYN");
        if (cookieCheck != "N")
            window.open(url, '', 'width=450,height=150,left=0,top=0')
    }
        function logout() {
          console.log("hello");
          const data = confirm("로그아웃 하시겠습니까?");
          if (data){
            location.href = "logoutProcess.php"
          }
        }
      </script>
    </body>
</html>
