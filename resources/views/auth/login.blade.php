                    <form method="POST" action="/authenticate">
                            <!-- <label for="">Email <input  type="text" name="email"> </label>
                            <label for="">Password <input  type="password" name="password"> </label>
                            <input type="submit"  value="Login">
                        @csrf
                    </form> -->
                    <div align="center">
				<br />
				<br />

				
				<div style="width:500px; background:#eeeeee;">
					<br />
					<div style="text-align:left;vertical-align:middle;">
						<span style="float: left"></span>　　<img src="/StudentSupport/images/dotBlue.png" width="20px" height="20px">　<font size="5">ログイン</font>
					</div>
					<br />
					<table border="0" cellspacing="0">
						<tr>
							<td style="background-color:cornflowerblue;text-align:center;width:30%"><font color="#0000ff" size="4"><b>ID</b></font></td>
							<td style="width:70%; text-align:left;"><input type="text" name="email" size="45" value="" id="email"></td>
						</tr>
					</table>
					<br />
					<table border="0" cellspacing="0">
						<tr>
							<td style="background-color:cornflowerblue;text-align:center;width:30%"><font color="#0000ff" size="4"><b>パスワード</b></font></td>
							<td style="width:70%; text-align:left;"><input type="password" name="password" size="45" value=""></td>
						</tr>
					</table>
					<br />
					<input type="submit" name="Login" value="ログイン">
					<br />
					<br />
				</div>
			</div>
            @csrf
		</form>
	</div>
</body>
</html>