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
			<div class="tab_step_arr">
				<ol>
					<li class="active">01 회원정보입력</li>
					<li class="">02 회원가입완료</li>
				</ol>
			</div>
		</section>
		<div class="table_inp_wrap">
    		<h3 class="tit_sub_b">회원정보 입력</h3>		
    		<fieldset>
    			<legend class="blind">회원정보 입력</legend>					
				<ul class="form_inp_a">
					<li>
						<strong class="form_tit">로그인정보</strong>
						<dl class="form_cont">
							<dt>이메일 주소</dt>
							<dd class="form_msg">
								<strong>groovy@shoeforrabbit.com</strong>
								<a href="#" class="btn_modify">이메일 주소 변경</a>
							</dd>
						</dl>							
						<dl class="form_cont">
							<dt class="tit_top x2">비밀번호</dt>
							<dd>
								<div class="form_inp_area">
									<input type="password" value="" placeholder="비밀번호" class="inp_nm_box inp_full" name="join_password">
									<span class="form_inp_msg">영문·숫자·특수문자 포함 6자 ~ 20자</span>
								</div>
								<div class="form_inp_area">
									<input type="password" value="" placeholder="비밀번호 확인" class="inp_nm_box inp_full" name="join_password_confirm">
								</div>
								<div class="form_inp_result">
									<span class="lv1">비밀번호 확인 메시지 비밀번호 확인 메시지</span>
								</div>
								<div class="form_inp_result">
									<span class="lv2">비밀번호 확인 메시지 비밀번호 확인 메시지</span>
								</div>
								<div class="form_inp_result">
									<span class="lv3">비밀번호 확인 메시지 비밀번호 확인 메시지</span>
								</div>
								<div class="progress_a">
									<strong class="prog_tit">비밀번호 안전도</strong>
									<div class="prog_wrap high">
										<div class="prog_mask">
    										<div class="prog_bar" style="width:80%;"></div>
    									</div>
    									<span class="prog_msg">최고 수준 보안</span>
									</div>
								</div>
							</dd>
						</dl>						
					</li>
					<li>
						<strong class="form_tit">개인정보</strong>
						<dl class="form_cont">
							<dt class="">이름</dt>
							<dd>
								<div class="form_inp_area">
									<input type="text" value="" placeholder="이름" class="inp_nm_box inp_full" name="user_name">
								</div>
							</dd>
						</dl>									
						<dl class="form_cont">
							<dt class="">성별</dt>
							<dd class="form_radio_wrap">
								<div class="form_radio custom_radio">
    								<label>
    									<input type="radio" name="gender">
    									<span class="box"></span>
    									<span class="label">여성</span>
    								</label>
    							</div>
    							<div class="form_radio custom_radio">
    								<label>
    									<input type="radio" name="gender" checked="checked"> 
    									<span class="box"></span>
    									<span class="label">남성</span>
    								</label>
    							</div>
							</dd>
						</dl>		
						<dl class="form_cont">
							<dt class="">생년월일</dt>
							<dd>
								<div class="form_inp_area">
									<input type="text" value="" placeholder="예) 810714" class="inp_nm_box inp_full" name="">
								</div>
							</dd>
						</dl>								
						<dl class="form_cont">
							<dt class="">휴대전화번호</dt>
							<dd>
								<div class="form_inp_area">
									<input type="text" value="" placeholder="예) 010 - 1234 - 1234" class="inp_nm_box inp_full" name="">
								</div>
							</dd>
						</dl>								
					</li>
					<li>
						<strong class="form_tit">서비스 약관</strong>
						<dl class="form_cont">
							<dt class="tit_top">서비스 약관 동의</dt>
							<dd>
								<div class="agree_chk_wrap">
									<div class="agree_head">
        								<div class="custom_cbox cbox_d">
                        					<label>
                            					<input type="checkbox" id="" name="" value="" class="all_chk">
                            					<span class="box"></span>
                            					<span class="label">모든 약관 및 정책에 동의합니다.</span>
                            				</label>
                        				</div>	
        							</div>
        							<ul class="agree_list">
        								<li>
    										<div class="custom_cbox cbox_d">
                            					<label>
                                					<input type="checkbox" id="" name="" value="">
                                					<span class="box"></span>
                                					<span class="label">구루핏 구매회원 약관</span>
                                				</label>
                            				</div>	
                            				<a href="#" class="agree_more">약관 전문 읽기</a>
        								</li>
        								<li>
    										<div class="custom_cbox cbox_d">
                            					<label>
                                					<input type="checkbox" id="" name="" value="">
                                					<span class="box"></span>
                                					<span class="label">구루핏 전자금융 서비스 이용 약관</span>
                                				</label>
                            				</div>	
                            				<a href="#" class="agree_more">약관 전문 읽기</a>
        								</li>
        								<li>
    										<div class="custom_cbox cbox_d">
                            					<label>
                                					<input type="checkbox" id="" name="" value="">
                                					<span class="box"></span>
                                					<span class="label">개인정보 수집 및 이용 정책</span>
                                				</label>
                            				</div>	
                            				<a href="#" class="agree_more">약관 전문 읽기</a>
        								</li>
        							</ul>
								</div>
							</dd>
						</dl>									
					</li>
				</ul>
				<script>
				// 체크박스 전체 체크 하기
				$(function(){
					var elem = $(".agree_chk_wrap");
					var check = false;
					elem.find(".all_chk").bind("click", function(){
						if($(this).is(":checked")){
							check = true;
						} else {
							check = false;
						}
						elem.find(".agree_list input").prop("checked", check);
					});
				});
				</script>
				<div class="form_submit_wrap">
					<div class="form_submit_r">
						<!-- 비 활성화 -->  <a href="#none" class="btn_ btn_disable btn_xl_m1">회원 가입 완료</a> 
						<!-- 활성화  <a href="#" class="btn_ btn_cp btn_xl_m1 btn_hover_shadow">회원 가입 완료</a> -->
					</div>
				</div>
    		</fieldset>		
    	</div>
	</article>
</section>
<?php include "../inc/footer.php" ?>