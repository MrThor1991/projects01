<?php
	if (isset($_SESSION['user_id']) == false) {
		//nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
		header('Location: http://localhost/website/dang-nhap.php');
		# code...
	}else {
		if (isset($_SESSION['user_id']) == true){
			//ngược lại nếu đã đăng nhập
			$permission = $_SESSION['permision'];
			//kiểm tra quyền của người đó có pải admin ko?
			if ($permission == '0') {
				# code...
				// nếu k pải admin thì xuất thông báo
				echo "bạn ko đủ quyền truy cập vào trang này<br>";
				echo "<a href='htpp://localhost/website/index.php'>Click để về lại trang chủ</a>";
				exit();
			}
		}
	}
?>