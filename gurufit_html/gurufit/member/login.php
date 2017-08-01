<?php include "../inc/header.php" ?>
<section id="member" class="sub_layout">
	<div class="sub_locate">
		<div class="custom_inner">
			<dl class="locate_list">
				<dt><a href="#">홈</a></dt>
				<dd><a href="#">로그인</a></dd>
			</dl>
			<p class="locate_msg">나이키 플라이니트 최대~50% OFF</p>
		</div>
	</div>
	<article class="sub_content custom_inner">
		<section class="sub_head">
			<h2>Login / Join</h2>
			<div class="tab_active_type">
				<ul>
					<li class="active"><a href="#">로그인</a></li>
					<li><a href="#">회원가입</a></li>
				</ul>
			</div>
		</section>
		<div class="member_box">
			<h3>로그인</h3>
			<p class="member_head_link"><a href="#">아이디 혹은 비밀번호가 기억나지 않으세요?</a></p>
			<div id="loginBox" class="box_inner">
				<div class="social_login_btn">
					<dl>
						<dt>소셜 계정을 사용하여 로그인</dt>
						<dd><a href="#" class="btn_icon_facebook">페이스북 로그인</a></dd>
						<dd><a href="#" class="btn_icon_naver">네이버 로그인</a></dd>
						<dd><a href="#" class="btn_icon_kakao">카카오 로그인</a></dd>
					</dl>
				</div>
				<div class="inp_login">
					<form action="" method="">
						<fieldset>
							<legend>이메일과 비밀번호로 로그인</legend>
							<input type="text" value="" placeholder="이메일 주소" class="inp_nm_box inp_full" name="email">
							<input type="password" value="" placeholder="비밀번호" class="inp_nm_box inp_full" name="password">
							<input type="submit" value="로그인" class="inp_submit_a inp_full">
							<div class="custom_cbox login_chk_box">
								<input type="checkbox" id="emailSave">
								<label for="emailSave">이메일 주소 저장</label>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</article>
</section>
<?php include "../inc/footer.php" ?>