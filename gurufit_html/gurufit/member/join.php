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
			<h2>Join</h2>
			<div class="tab_active_type">
				<ul>
					<li class="active"><a href="#">01 회원정보입력</a></li>
					<li><a href="#">02 회원가입완료</a></li>
				</ul>
			</div>
		</section>
		<div class="member_box">
			<h3>회원정보 입력</h3>			
			<div class="join_member_info">
			<form action="" method="">	
				<fieldset>
					<legend class="blind">회원가입</legend>					
						<ul>
							<li class="join_member_info_container login_info">
								<strong>로그인정보</strong>
								<dl>
									<dt>이메일 주소</dt>
									<dd>
										<span>groovy@shoeforrabbit.com</span>
										<a href="#">이메일 주소 변경</a>
									</dd>
								</dl>							
								<dl>
									<dt>비밀번호</dt>
									<dd>
										<input type="password" value="" placeholder="비밀번호" class="inp_nm_box inp_full" name="join_password">
										<input type="password" value="" placeholder="비밀번호 확인" class="inp_nm_box inp_full" name="join_password_confirm">
										<p>영문·숫자·특수문자 포함 6자 ~ 20자</p>	
										<div class="password_change_progress">
											<h4>비밀번호 안전도</h4>
											<div class="password_progress">
												<div class="progress">
													<div class="progress_mask">
													</div>
													<span>최고 수준 보안</span>
												</div>
											</div>
										</div>
									</dd>
								</dl>						
							</li>
							<li class="join_member_info_container">
								<strong>로그인정보</strong>							
								<dl>
									<dt>이름</dt>
									<dd>
										<input type="text" value="" placeholder="이름" class="inp_nm_box inp_full" name="join_user_name">	
									</dd>
								</dl>
								<dl>
									<dt>성별</dt>
									<dd>
		 									<input type="radio" name="gender" value="여성" checked>여성<br>
		 									<input type="radio" name="gender" value="남성">남성<br>	
									</dd>
								</dl>
								<dl>
									<dt>생년월일</dt>
									<dd>
										<input type="text" value="" placeholder="예)810714" class="inp_nm_box inp_full" name="join_user_birth">	
									</dd>
								</dl>
								<dl>
									<dt>휴대전화번호</dt>
									<dd>
										<input type="text" value="" placeholder="예)010-1234-1234" class="inp_nm_box inp_full" name="join_user_phone_num">	
									</dd>
								</dl>																											
							</li>
							<li class="join_member_info_container">
								<strong>서비스 약관</strong>							
								<dl>
									<dt>이름</dt>
									<dd>
										<input type="text" value="" placeholder="이름" class="inp_nm_box inp_full" name="join_user_name">	
									</dd>
								</dl>
								<dl>
									<dt>성별</dt>
									<dd>
		 									<input type="radio" name="gender" value="여성" checked>여성<br>
		 									<input type="radio" name="gender" value="남성">남성<br>	
									</dd>
								</dl>
								<dl>
									<dt>생년월일</dt>
									<dd>
										<input type="text" value="" placeholder="예)810714" class="inp_nm_box inp_full" name="join_user_birth">	
									</dd>
								</dl>
								<dl>
									<dt>휴대전화번호</dt>
									<dd>
										<input type="text" value="" placeholder="예)010-1234-1234" class="inp_nm_box inp_full" name="join_user_phone_num">	
									</dd>
								</dl>																											
							</li>												
						</ul>
					<div class="join_member_info_button">
						<input type="submit" value="회원 가입 완료" class="inp_submit_a inp_full">
					</div>
				</fieldset>
				</form>			
			</div>
		</div>
	</article>
</section>
<?php include "../inc/footer.php" ?>