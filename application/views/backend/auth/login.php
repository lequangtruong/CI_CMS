	<div id="cms-login">
        <form method="post" action="">
            <fieldset class="info">
                <legend>Đăng nhập vào hệ thống:</legend>
                <ul class="cms-error">
                    
                </ul>
                <table cellspacing="0" cellpadding="0" class="form">
                    <tr>
                        <td style="width: 100px;">
                            <label for="txtUsername" class="title">Tên sử dụng:</label>
                        </td>
                        <td style="text-align: right;">
                            <input type="text" name="data[username]" id="txtUsername" value="" class="text" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="txtPassword" class="title">Mật khẩu:</label>
                        </td>
                            <td style="text-align: right;">
                            <input type="password" name="data[password]" id="txtPassword" value="" class="text" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right;padding-top: 15px;">
                            <input type="submit" name="login" class="btn" value="Đăng nhập" />
                            <input type="reset" class="btn" value="Đăng ký" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right;">
                        	<a href="http://sotay.info/" title="Về trang chủ">Về trang chủ</a> / <a href="http://sotay.info/backend/authentication/forgot.html" title="Quên mật khẩu">Quên mật khẩu</a>
                        </td>
                    </tr>
                </table>
            </fieldset>
        </form>		
        <div id="cms-copyright">
			<p>Copyright &copy; 2014 - Powered by TLQ CMS</a></p>
			<div class="cms-clear"></div>
		</div><!-- #cms-copyright -->
	</div><!-- #cms-login -->