document.write('<iframe name="t_frame" style="display:none"></iframe>');
document.write('<iframe id="iframe_transfer" style="display:none"></iframe>');
$(document).ready(function(){
	$.ajax({
				type:"post",
				url:"/inc/User_Login.asp",
				data:"cmd=chklogin&time="+Date(),
				success:function(data){
						if(data!="[nologin]")
						{
							$("#Login_Box_Word").html("<b>欢迎，"+data+"</b>  <span style='padding-left:15px;' class='loginsp'><a href='/m/'>进入会员中心</a></span> <span style='padding-left:10px;'class='regsp'><a href='javascript:void(0)' onclick='logout()'>退出</a></span>");
						}
					}
			});	
})

function logout()
{
	$.ajax({
				type:"post",
				url:"/inc/User_Login.asp",
				async:false,
				data:"cmd=toplogout&time="+Date(),
				success:function(data){
						//alert(data);
						if(data=="ok")
						{
							window.location.reload(true);
						}
					}
			});				
}
document.write('<script src="/inc/qqonline.asp"></script>');
