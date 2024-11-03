<?php
include 'db/connect.php';
if (isset($_POST['btn-log'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "Select * From customer";
    $count = 0;
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            if ($email === $row['email']) {
                if ($password === $row['password']) {
                    $count = 1;
                    session_start();
                    $_SESSION['account'] = $row['email'];
                    $_SESSION['Admin'] = $row['Admin'];
                    $_SESSION['name'] = $row['fullName'];
                    ?>
                    <script>
                        // Đóng iframe
                        var iframe = window.parent.document.getElementById("myIframe");
                        // Reload lại trang web
                        window.parent.location.reload();
                    </script>
                    <?php
                    exit; // Dừng thực thi tiếp các phần tử HTML khác trong tệp log.php
                }
            }
            $jsVariable = json_encode($row['fullName']);
        }
        if ($count === 0) {
            session_start();
            $_SESSION['validMessage'] = "Wrong password";
            header("Location: login.php");
        }
    }
}
?>
