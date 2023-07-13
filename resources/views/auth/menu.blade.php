

<!DOCTYPE html>
<html>
<head>
	<title>MENU</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="css/style.css"/>
	
<body>
	<div class="container">
		<input id="receiptMoneyInitName" type="hidden" value="LinkedReceiptMoneyInit.do">
		<div id="main-header">
			<h1>LIST</h1>
			<div id="navi-contents">
				<div id="login_user">
				
					STUDENTMANAGEMENT
				
					<span id="login_addr">
					
						161.202.235.21
					
					</span>
				</div>
			</div>
			<div id="navi-right">
				
				<a href="/Logout">ログアウト</a>
				
			</div>
		</div>
		<div id="my_menu">
			<ul id="top_menu">		
								<!-- admin--> 
								<li class="menu_list">
									<a href="/home" style="text-decoration:none;"><h2 class="menu_jap blue_jp">ADMIN</h2>
										<h2 class="menu_eng blue_en">Admin

										</h2></a>
								</li>
								
		<!-- 講師-->
							<li class="menu_list">
								<a href="/home" style="text-decoration:none;"><h2 class="menu_jap green_jp">Student</h2>
									<h2 class="menu_eng green_en">Student</h2></a>
							</li>
							<!-- 授業 -->
							<li class="menu_list">
								<a href="/home" style="text-decoration:none;"><h2 class="menu_jap red_jp">BATCH</h2>
									<h2 class="menu_eng red_en">batch</h2></a>
							</li>
							<!-- 管理校舎一覧 -->
							<li class="menu_list">
								
								<a href="/home" style="text-decoration:none;"><h2 class="menu_jap brown_jp">COURSE</h2>
									<h2 class="menu_eng brown_en">Course</h2></a>
							</li>
								<!-- 営業支援 -->
								<li class="menu_list">
									<a href="/home" style="text-decoration:none;"><h2 class="menu_jap yellow_jp">FEES</h2>
										<h2 class="menu_eng yellow_en">FEES</h2></a>
								</li>
							
			</ul>
		</div>
		<div><br><br><br><br><br><br><br><br><br><br><br><br>
			<table width="100%" height=250px border="1" cellpadding="10" cellspacing="0" class="table2">
				<tr align="center" bgcolor="gray">
					<th>S.no</th><th>Studentid</th><th>Name</th><th>Email</th><th>View</th>
				</tr>
                 @foreach ($users as $item)
                    <tr>
                        <td>{{$item['id']}}</td>
						<td><a href="views/{{$item->id}}">{{$item['student_id']}}</a></td>
                        <td>{{$item['name']}}</td>
                        
                        
                        <td>{{$item['email']}}</td>
                      

					 <td>
                       View
                    </td>
						


                    </tr>
                 @endforeach


			</table>
		</div><br>
			<center>
				<div class="pagination">
					<a href="#">&laquo;&laquo;</a>
					<a href="#">&laquo;</a>
					<a href="#" style="background-color: green;">1</a>
					<a href="stuManagementEvaluation2.html" target="blank">2</a>
					<a href="#">&raquo;</a>
					<a href="#">&raquo;&raquo;</a>
				</div>
			</center>

</body>
</html>