<form action="Xulydk.php" method="post" name="frm" onSubmit="return dangky()" autocomplete="off">
	<div class="dangky">
		<h2>ĐĂNG KÝ</h2>
		<table>
			<tr>
				<td> Tên Đăng Nhập <font color="red">*</font></td>
				<td class="input"><input type="text" name="user" size="40"></td>
			</tr>
			<tr>
				<td>Tên Người Dùng <font color="red">*</font></td>
				<td class="input"><input type="text" name="tenkh" size="40"></td>
			</tr>
			<tr>
				<td>Mật Khẩu <font color="red">*</font></td>
				<td class="input"><input type="password" name="pass" size="40"></td>
			</tr>
			<tr>
				<td>Nhập Lại Mật Khẩu <font color="red">*</font></td>
				<td class="input"><input type="password" name="pass1" size="40"></td>
			</tr>
			<tr>
				<td>Ngày sinh </td>
				<td class="input"><input type="date" name="ngaysinh" size="40"></td>
			</tr>
			<tr>
			<td>Email <font color="red">*</font> </td><td class="input"><input type="text" name="email" size="40"></td>
		</tr>
		<tr>
			<td>Điện thoại <font color="red">*</font> </td><td class="input"><input type="text" name="dienthoai" size="40"></td>
		</tr>
		<tr>
			<td>Địa chỉ  </td><td class="input"><textarea name="diachi"></textarea></td>
		</tr>
		<tr>
			<td>Mã xác nhận: </td><td></td>
		</tr>
		<tr>
			<td colspan=2 class="btndangky">
				<button type="submit" name="submit">Đăng ký</button>
				<button type="reset">Hủy</button>
			</td>
		</tr>
		</table>
		
	</div>
</form>
<script>
	function dangky(){
		if(frm.user.value==""){
			alert("Bạn Chưa Nhập Tên Đăng Nhập.");
			frm.tenkh.focus();
			return false;
		}
		if(frm.user.value.length < 6){
			alert("Tên Đăng Nhập Lớn Hơn 6 Ký Tự.");
			frm.user.focus();
			return false;
		}
		if(frm.tenkh.value==""){
			alert("Bạn Chưa Nhập Tên.");
			frm.tenkh.focus();
			return false;
		}
		if(frm.tenkh.value.length < 6){
			alert("Tên Quá Ngắn.");
			frm.tenkh.focus();
			return false;
		}
		
		if(frm.pass.value==""){
			alert("Bạn Chưa Nhập Mật Khẩu.");
			frm.pass.focus();
			return false;
		}
		if(frm.pass.value.length < 6){
			alert("Mật Khẩu Lớn Hơn 6 Ký Tự.");
			frm.pass.focus();
			return false;
		}
		if(frm.pass1.value=="")
		{
			alert("Bạn Chưa Nhập Lại Mật Khẩu.");	
			frm.pass1.focus();
			return false;
		}
		mk=frm.pass.value;
		mk1=frm.pass1.value;
		if(mk!=mk1){
			alert("Nhập Lại Mật Khẩu Không Đúng.")
			frm.pass1.focus();
			return false;
		}
		if(frm.email.value==""){
			alert("Bạn Chưa Email.");
			frm.email.focus();
			return false;
		}
		mail=frm.email.value;
		m=/^([A-z0-9])+[@][a-z]+[.][a-z][.]*([a-z]+)*$/;
		if(!m.test(mail)){
			alert("Bạn Nhập Sai Email.");
			frm.email.focus();
			return false;
		}
		dt=/^[0-9]+$/;
		dienthoai=frm.dienthoai.value;
		if(!dt.test(dienthoai)){
			alert("Bạn Chưa Nhập Số Điện thoại.");
			frm.dienthoai.focus();
			return false;
		}
		dd=frm.dienthoai.value;
		if(10>length.dd || length.dd > 11){
			alert("Số Điện Thoại Không Đủ Độ Dài.");
			frm.dienthoai.focus();
			return false;
		}
		
		
	
	}
</script>
