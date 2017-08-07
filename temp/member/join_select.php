<?php include "../inc/header.php" ?>
<section id="member" class="sub_layout">
	<div class="sub_locate">
		<div class="custom_inner">
			<dl class="locate_list">
				<dt><a href="#">홈</a></dt>
				<dd><a href="#">회원가입</a></dd>
			</dl>
			<p class="locate_msg">나이키 플라이니트 최대~50% OFF</p>
		</div>
	</div>
	<article class="sub_content custom_inner">
		<section class="sub_head">
			<h2>Login / Join</h2>
			<div class="tab_active_type">
				<ul>
					<li><a href="#">로그인</a></li>
					<li class="active"><a href="join.php">회원가입</a></li>
				</ul>
			</div>
		</section>
		<div class="member_box">
			<h3>회원가입</h3>
			<p class="member_head_link"><a href="#">아이디 혹은 비밀번호가 기억나지 않으세요?</a></p>
			<div id="loginBox" class="box_type_a">
				<div class="social_login_btn">
					<dl>
						<dt>소셜 계정을 사용하여 로그인</dt>
						<dd>
							<form>
								<input type="button" value="페이스북 로그인" class="btn_sns btn_icon_facebook">
							</form>
						</dd>
						<dd>
							<form>
								<input type="button" value="네이버 로그인" class="btn_sns btn_icon_naver">
							</form>
						<dd>
							<form>
								<input type="button" value="네이버 로그인" class="btn_sns btn_icon_kakao">
							</form>
						</dd>
					</dl>
				</div>
				<div class="inp_login">
					<fieldset>
						<legend>이메일 주소로 회원가입</legend>
						<input type="text" value="" placeholder="이메일 주소" class="inp_nm_box inp_full" name="email">
						<a href="#" class="inp_submit_a inp_full">다음 단계로</a>
						<p class="submit_msg">이미 가입된 이메일 주소입니다 </p>
					</fieldset>
				</div>
			</div>
		</div>
	</article>
</section>
<?php include "../inc/footer.php" ?>