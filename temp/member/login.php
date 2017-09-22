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
					<li><a href="join.php">회원가입</a></li>
				</ul>
			</div>
		</section>
		<div class="member_box">
			<h3>
				로그인
				<em>구매를 진행하기 위해서는 로그인이 필요합니다.</em>
			</h3>
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
						<legend>이메일과 비밀번호로 로그인</legend>
						<input type="text" value="" placeholder="이메일 주소" class="inp_nm_box inp_full" name="email">
						<input type="password" value="" placeholder="비밀번호" class="inp_nm_box inp_full" name="password">
						<a href="#" class="inp_submit_a inp_full">로그인</a>
						<div class="custom_cbox login_chk_box">
							<label>
								<input type="checkbox">
								<span class="box"></span>
								<span class="label">이메일 주소 저장</span>
							</label>
						</div>
					</fieldset>
				</div>
			</div>
		</div>
	</article>
</section>
<?php include "../inc/footer.php" ?>