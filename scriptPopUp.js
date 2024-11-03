$(document).ready(function () {
  var isDragging = false;
  var offset = $(".ad-banner").offset(); // Lấy tọa độ top và left của nút login
  var top1 = offset.top;
  var left1 = offset.left;
  var top2 = top1,
    left2 = left1;

  const logoutButton = document.getElementById('logout-btn');

  $(".ad-banner").draggable({
    start: function () {
      isDragging = true;
    },
    stop: function () {
      isDragging = false;
      var offset2 = $(".ad-banner").offset(); // Lấy tọa độ top và left của nút login
      left2 = offset2.left;
      top2 = offset2.top;
    }
  });

  if (left2 == left1 && top2 == top1) {
    $(".logout-btn").click(function (e) {
      if (isDragging == false && top1 == top2 && left1 == left2) {
        logout();
        $(".login-popup").fadeIn();
        $(".login-btn").fadeOut();
      }
    });
    $(".login-btn").click(function (e) {
      if (isDragging == false && top1 == top2 && left1 == left2) {
        $(".login-popup").fadeIn();
        $(".login-btn").fadeOut();
      }
      left1 = left2;
      top1 = top2;
    });
  }

  $(".login-popup").click(function (e) {
    if ($(e.target).hasClass("login-popup")) {

      $(".login-popup").fadeOut();
      $(".login-btn").fadeIn();
    }
  });
});

document.querySelector('.close-btn').addEventListener('click', function () {
  document.querySelector('.ad-banner').style.display = 'none';
});

function logout() {
  // Gửi yêu cầu đến trang xử lý đăng xuất (logout.php)
  // Sau khi server xử lý, làm mới trang index.php
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // Làm mới trang index.php
      window.location.href = "index.php";
    }
  };
  xhttp.open("GET", "logout.php", true);
  xhttp.send();
}
