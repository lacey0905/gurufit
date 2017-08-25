<?php include "../inc/header.php" ?>
<!-- 모달 팝업 -->
<!-- 모달팝업 부모 앨리먼트 -->
<!-- 
    팝업의 그림자가 모든 팝업에 1개만 적용 되어야 하기 때문에  [f_modal_perant] 앨리먼트를 별도로 껏다켰다를 반복 해야 합니다.
    따라서 팝업이 1개 이상 보여져야 할 경우에는   [f_modal_perant] 앨리먼트에 [open] 클래스를 추가 합니다.
-->
<!--
   모달을 제거하려면 open을 지워야 합니다.
   하나의 모달을 띄우고 싶을때는 blind를 지우면 된다.  
-->
<div class="f_modal_perant">

	<!-- 모달 팝업 우선순위 [z1 ~ z6]까지 클래스로 만들어 놓았습니다. [z6]이 가장 우선순위가 높습니다. -->
	<!-- 디자인상 팝업마다 그림자가 투명하게 들어가 있습니다. 때문에 팝업이 겹칠 경우에는  [f_modal_shadow]를 가장 하위 우선순위 팝업에만 적용 해야 합니다.-->
	
	<!-- 이메일 변경 -->
	<div class="f_modal_layer f_modal_shadow blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>이메일 변경</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<form action="">
        			<dl class="form_list_a">
        				<dt>기존 이메일</dt>
        				<dd><span class="txt">groovy@shoeforrabbit.com</span></dd>
        				<dt>새로운 이메일</dt>
        				<dd>
        					<div class="form">
	        					<div class="form_inp_area">
									<input type="text" value="" placeholder="이메일 주소" class="inp_nm_box inp_full" name="join_password">
								</div>
								<div class="form_inp_area">
									<input type="text" value="" placeholder="이메일 주소 확인" class="inp_nm_box inp_full" name="join_password">
								</div>
							</div>
        				</dd>
        				<dt>비밀번호</dt>
        				<dd>
        					<div class="form">
	        					<div class="form_inp_area">
									<input type="password" value="" placeholder="비밀번호" class="inp_nm_box inp_full" name="join_password">
								</div>
							</div>
        				</dd>
        			</dl>
        			</form>
        		</div>
        		<div class="f_modal_foot">
    				<div class="f_modal_btn btn_x2">
        				<a href="#" class="btn_ btn_l_l1 btn_hover_a">취소</a>        			
        				<a href="#" class="btn_ btn_l_l1 btn_cp btn_hover_shadow">이메일 저장</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 비밀번호 변경 -->
	<div class="f_modal_layer f_modal_shadow blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>비밀번호 변경</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<form action="">
        			<dl class="form_list_a">
        				<dt>현재 비밀번호</dt>
        				<dd>
        					<div class="form">
	        					<div class="form_inp_area">
									<input type="password" value="" placeholder="비밀번호" class="inp_nm_box inp_full" name="join_password">
								</div>
							</div>
        				</dd>
        				<dt>새로운 비밀번호<span class="msg">영문·숫자·특수문자 포함 6자 ~ 20자</span></dt>
        				<dd>
        					<div class="form">
        						<div class="form_inp_area">
									<input type="password" value="" placeholder="새로운 비밀번호" class="inp_nm_box inp_full" name="join_password">
								</div>
								<div class="form_inp_area">
									<input type="password" value="" placeholder="새로운 비밀번호 확인" class="inp_nm_box inp_full" name="join_password">
								</div>
							</div>
        				</dd>
        				<dt>비밀번호 안전도<span class="safe">최고 수준 보안</span></dt>
        				<dd>
        					<div class="prog">
	        					<div class="progress_a">
									<div class="prog_wrap high">
										<div class="prog_mask">
	    									<div class="prog_bar" style="width:80%;"></div>
	    								</div>
									</div>
								</div>
							</div>
        				</dd>
        			</dl>
        			</form>
        		</div>
        		<div class="f_modal_foot">
    				<div class="f_modal_btn btn_x2">
        				<a href="#" class="btn_ btn_l_l1 btn_hover_a">취소</a>        			
        				<a href="#" class="btn_ btn_l_l1 btn_cp btn_hover_shadow">비밀번호 저장</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 환불 계좌 정보 -->
	<div class="f_modal_layer f_modal_shadow">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>환불 계좌 정보 변경</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<form action="">
        			<dl class="form_list_a">
        				<dt>은행</dt>
        				<dd><span class="txt">groovy@shoeforrabbit.com</span></dd>
        				<dt>예금주</dt>
        				<dd>
        					<div class="form">
	        					<div class="form_inp_area">
									<input type="text" value="" placeholder="이메일 주소" class="inp_nm_box inp_full" name="">
								</div>
							</div>
        				</dd>
        				<dt>계좌번호</dt>
        				<dd>
							<div class="form">
	        					<div class="form_inp_area">
									<input type="text" value="" placeholder="001-00-0000-0000" class="inp_nm_box inp_full" name="">
								</div>
							</div>
        				</dd>
        			</dl>
        			</form>
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_btn btn_x2">
	        			<a href="#" class="btn_ btn_l_l1 btn_hover_a">취소</a>        			
	        			<a href="#" class="btn_ btn_l_l1 btn_cp btn_hover_shadow">변경 정보 저장</a>
	        		</div>		
        		</div>
    		</div>
		</div>
	</div>	
	<!-- 개인 정보 변경 -->
	<div class="f_modal_layer f_modal_shadow blind">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>개인 정보 변경</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<form action="">
        			<dl class="form_list_a">
        				<dt>이름</dt>
        				<dd>
        					<div class="form">
	        					<div class="form_inp_area">
									<input type="text" value="" placeholder="이름" class="inp_nm_box inp_full" name="">
								</div>
							</div>
        				</dd>
        				<dt>닉네임</dt>
        				<dd>
        					<div class="form">
	        					<div class="form_inp_area">
									<input type="text" value="" placeholder="닉네임" class="inp_nm_box inp_full" name="">
								</div>
							</div>
        				</dd>
        				<dt>휴대전화번호</dt>
        				<dd>
        					<div class="form">
	        					<div class="form_inp_area inp_add_btn inp_r_btn">
									<input type="text" value="" placeholder="예)  010-1234-5678" class="inp_nm_box" name="">
									<a href="#" class="btn_ btn_x_m3 btn_hover_a">인증번호 발송</a>      	
								</div>
							</div>
        					<div class="form">
	        					<div class="form_inp_area inp_add_btn inp_r_btn">
									<input type="text" value="" placeholder="인증번호" class="inp_nm_box" name="">
									<span class="msg">인증번호 입력</span>
								</div>
							</div>
        				</dd>
        				<dt>생년월일</dt>
        				<dd>
        					<div class="form">
	        					<div class="form_inp_area">
									<input type="text" value="" placeholder="예)  810714" class="inp_nm_box inp_full" name="">
								</div>
							</div>
        				</dd>
        				<dt>
        					성별
        					<div class="form_inline">
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
    						</div>
        				</dt>
        			</dl>
        			</form>
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_btn btn_x2">
	        			<a href="#" class="btn_ btn_l_l1 btn_hover_a">취소</a>        			
	        			<a href="#" class="btn_ btn_l_l1 btn_cp btn_hover_shadow">개인 정보 변경</a>
	        		</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 배송지 정보 입력 -->
	<div class="f_modal_layer f_modal_shadow blind">
		<div class="f_modal_wrap">
    		<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>배송지 정보 입력</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<form action="">
        			<dl class="form_list_a">
        				<dt>수령인</dt>
        				<dd>
        					<div class="form">
            					<div class="form_inp_area">
    								<input type="text" value="" placeholder="이름" class="inp_nm_box inp_full" name="">
    							</div>
    						</div>
        				</dd>
        				<dt>연락처</dt>
        				<dd>
        					<div class="form">
            					<div class="form_inp_area">
    								<input type="text" value="" placeholder="연락 가능한 전화번호를 입력 하세요" class="inp_nm_box inp_full" name="">
    							</div>
    						</div>
        				</dd>
        				<dt>주소</dt>
        				<dd>
        					<div class="form">
            					<div class="form_inp_area inp_add_btn inp_l_btn">
    								<input type="text" value="" placeholder="우편번호" class="inp_nm_box" name="">
    								<a href="#" class="btn_ btn_x_m3 btn_hover_a">주소찾기</a>      	
    							</div>
    						</div>
    						<div class="form">
            					<div class="form_inp_area">
    								<input type="text" value="" placeholder="도로명 주소" class="inp_nm_box inp_full" name="">
    							</div>
    						</div>
    						<div class="form">
            					<div class="form_inp_area">
    								<input type="text" value="" placeholder="나머지 주소를 입력 하세요" class="inp_nm_box inp_full" name="">
    							</div>
    						</div>
    						<div class="check">
    							<div class="custom_cbox">
                            		<label>
                                		<input type="checkbox" id="" name="" value="" class="all_chk">
                                		<span class="box"></span>
                                		<span class="label">기본 배송지로 저장</span>
                                	</label>
                            	</div>	
                        	</div>
        				</dd>
        			</dl>
        			</form>
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_btn btn_x2">
            			<a href="#" class="btn_ btn_l_l1 btn_hover_a">취소</a>        			
            			<a href="#" class="btn_ btn_l_l1 btn_cp btn_hover_shadow">배송지 정보 저장</a>
            		</div>		
        		</div>
    		</div>
    	</div>
	</div>
	<!-- 모달 팝업 그림자 -->
	<div class="f_modal_blind"></div>
</div>
<!-- 모달 팝업 END -->
<!-- /////// -->
<section class="sub_layout">
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
			<h2>My Page</h2>
			<div class="tab_active_type ">
				<ul>
					<li><a href="#">대시보드</a></li>
					<li><a href="#">멤버십</a></li>
					<li><a href="#">알림</a></li>
					<li><a href="#">새로운 활동</a></li>
					<li><a href="#">나의 리스트</a></li>
					<li><a href="#">히스토리</a></li>
					<li><a href="#">1:1문의</a></li>
					<li class="active"><a href="#">개인정보 설정</a></li>
					<li><a href="#">구매내역</a></li>										
				</ul>
			</div>
		</section>
		<div class="table_inp_wrap">
    		<h3 class="tit_sub_b">개인정보 설정</h3>		
    		<fieldset>
    			<legend class="blind">회원정보 입력</legend>			
				<ul class="form_inp_a mid">
					<li>
						<strong class="form_tit">로그인정보</strong>
						<dl class="form_cont">
							<dt>이메일 주소</dt>
							<dd class="form_msg">
								<strong>groovy@shoeforrabbit.com</strong>
								<a href="#" class="btn_inline">이메일 주소 변경</a>
							</dd>
						</dl>							
						<dl class="form_cont">
							<dt>비밀번호</dt>
							<dd class="form_msg">
								<a href="#" class="btn_inline">비밀번호 변경</a>
							</dd>
						</dl>						
					</li>
					<li>
						<a href="#" class="top_modify">편집</a>
						<strong class="form_tit">개인정보</strong>
						<dl class="form_cont">
							<dt>이름</dt>
							<dd class="form_msg">
								<strong>홍길동</strong>
							</dd>
						</dl>									
						<dl class="form_cont">
							<dt class="">닉네임</dt>
							<dd class="form_msg">
								<strong>단호박정식</strong>
							</dd>
						</dl>	
						<dl class="form_cont">
							<dt class="">휴대전화번호</dt>
							<dd class="form_msg">
								<strong>010-4321-1234</strong>
								<em class="check">인증됨</em>
							</dd>
						</dl>	
						<dl class="form_cont">
							<dt class="">생년월일</dt>
							<dd class="form_msg">
								<strong>1980년 11월 15일</strong>
							</dd>
						</dl>
						<dl class="form_cont">
							<dt>성별</dt>
							<dd>
								<span class="personal_radio woman_radio">
									<span class="payment_radio custom_radio">
				    					<label>
				    						<input type="radio" name="payment">
				    						<span class="box"></span>
				    					</label>
									</span>									
								여성
								</span>
								<span class="man_radio">
									<span class="payment_radio custom_radio">
				    					<label>
				    						<input type="radio" name="payment">
				    						<span class="box"></span>
				    					</label>
									</span>										
								남성
								</span>
							</dd>
						</dl>									
					</li>
					<li>
						<strong class="form_tit">쇼핑 정보</strong>
						<dl class="form_cont">
							<dt class="tit_top">배송지 주소</dt>
							<dd class="form_box">
								<div class="info_list_box active">
									<a href="#" class="top_modify">편집</a>
    								<div class="box_ x2">
    									<strong class="tit">이름</strong>
    									<span class="cont">김하영</span>
    									<strong class="tit">연락처</strong>
    									<span class="cont">051-6215-81687</span>
    								</div>
    								<div class="box_ x1">
    									<strong class="tit">주소</strong>
    									<span class="cont">47241</span>
    									<span class="cont">부산광역시 부산진구 전포대로275번길 20, 서면롯데캐슬스카이 123-2345</span>
    								</div>
    							</div>
								<div class="info_list_box">
									<a href="#" class="top_modify">편집</a>
    								<div class="box_ x2">
    									<strong class="tit">이름</strong>
    									<span class="cont">김하영</span>
    									<strong class="tit">연락처</strong>
    									<span class="cont">051-6215-81687</span>
    								</div>
    								<div class="box_ x1">
    									<strong class="tit">주소</strong>
    									<span class="cont">47241</span>
    									<span class="cont">부산광역시 부산진구 전포대로275번길 20, 서면롯데캐슬스카이 123-2345</span>
    								</div>
    							</div>
    							<div class="box_add btn_hover_a">
									<a href="#">+ 새로운 주소 입력</a>
								</div>
							</dd>
						</dl>
						<dl class="form_cont in_line">
							<dt class="tit_top">사용 가능한 쿠폰</dt>
							<dd>
								<div class="service_list_table">
									<table>
										<caption class="blind">사용 가능한 쿠폰</caption>
										<colgroup>
											<col width="160">
											<col width="*">
											<col width="120">
										</colgroup>
										<thead>
											<tr>
												<th>쿠폰 종류</th>
												<th>쿠폰 사용 정보</th>
												<th>유효 기간</th>
											</tr>	
										</thead>
										<tbody>
											<tr>
												<td class="box tit">
													<strong>5,000원</strong><br>
													<span>가입 환영</span>
												</td>
												<td class="box cont">
        											모든 상품 구입에 사용할 수 있습니다.<br>
        											중복 사용이 가능합니다.
												</td>
												<td class="box opt">
													없음
												</td>
											</tr>
											<tr>
												<td class="box tit">
													<strong>5,000원</strong><br>
													<span>레벨업 - Silver III</span>
												</td>
												<td class="box cont">
        											모든 상품 구입에 사용할 수 있습니다.<br>
													사용이 가능합니다.
												</td>
												<td class="box opt">
													없음
												</td>
											</tr>
											<tr>
												<td class="box tit">
													<strong>2,000원</strong><br>
													<span>레벨업 - Gold I</span>
												</td>
												<td class="box cont">
        											모든 상품 구입에 사용할 수 있습니다.<br>
													중복 사용이 가능합니다.
												</td>
												<td class="box opt">
													없음
												</td>
											</tr>
											<tr>
												<td class="box tit">
													<strong>10%</strong><br>
													<span>스니커즈 할인</span>
												</td>
												<td class="box cont">
        											스니커즈에 한해 사용할 수 있습니다.  3만원 이상, 최대 1만원 할인<br>
													다른 이벤트 쿠폰과 중복해서 사용할 수 없습니다.
												</td>
												<td class="box opt">
													2017년 10월 23일
												</td>
											</tr>
											<tr>
												<td class="box tit">
													<strong>10%</strong><br>
													<span>2017년 여름 세일</span>
												</td>
												<td class="box cont">
        											모든 상품 구입에 사용할 수 있습니다.<br>
													다른 이벤트 쿠폰과 중복해서 사용할 수 없습니다.
												</td>
												<td class="box opt">
													2017년 10월 23일
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</dd>
						</dl>
						<dl class="form_cont in_line">
							<dt class="tit_top">환불 계좌 정보</dt>
							<dd class="form_tit_list">
								<a href="#" class="top_modify">편집</a>
								<ul class="list">
									<li>
										<strong class="title">은행</strong>
										<span class="content">신한은행</span>
									</li>
									<li>
										<strong class="title">예금주</strong>
										<span class="content">김하영</span>
									</li>
									<li>
										<strong class="title">계좌 번호</strong>
										<span class="content">010-00-0000-0000</span>
									</li>
								</ul>
							</dd>
						</dl>		
					</li>
					<li>
						<strong class="form_tit">알림 설정</strong>
						<dl class="form_cont">
							<dt class="tit_top">이메일 알림 설정</dt>
							<dd class="form_box">
								<div class="check_tit_list">
									<h4 class="head">콘텐츠 알림</h4>
									<ul class="list">
										<li>
    										<div class="custom_cbox cbox_d check">
                            					<label>
                                					<input type="checkbox" id="" name="" value="" class="all_chk">
                                					<span class="box"></span>
                                				</label>
                            				</div>
        									<strong class="tit">새로운 콘텐츠</strong>
        									<span class="cont">
        										팔로우 중인 guru / 슈어드바이저가 새로운 콘텐츠 업데이트하면 이메일 알림을 보냅니다.
        									</span>
										</li>
										<li>
    										<div class="custom_cbox cbox_d check">
                            					<label>
                                					<input type="checkbox" id="" name="" value="" class="all_chk">
                                					<span class="box"></span>
                                				</label>
                            				</div>
        									<strong class="tit">연관 콘텐츠</strong>
        									<span class="cont">
												장바구니 및 마이 리스트에 담긴 상품/콘텐츠와 연관관 콘텐츠를 이메일로 보내드립니다.
        									</span>
										</li>
									</ul>
									<h4 class="head">쇼핑 정보 알림</h4>
									<ul class="list">
										<li>
    										<div class="custom_cbox cbox_d check">
                            					<label>
                                					<input type="checkbox" id="" name="" value="" class="all_chk">
                                					<span class="box"></span>
                                				</label>
                            				</div>
        									<strong class="tit">연관 상품 업데이트 정보</strong>
        									<span class="cont">
                                                                                                        장바구니, 컬렉션, 마이 리스트에 담긴 상품에 변동사항이 있는 경우 이메일 알림을 보냅니다.<br>
                                                                                                        가격 변동, 세일, 품절, 재입고 등
        									</span>
										</li>
										<li>
    										<div class="custom_cbox cbox_d check">
                            					<label>
                                					<input type="checkbox" id="" name="" value="" class="all_chk">
                                					<span class="box"></span>
                                				</label>
                            				</div>
        									<strong class="tit">이벤트 프로모션 정보</strong>
        									<span class="cont">
												구루핏 쇼핑에서 진행하는 이벤트와 프로모션이 있는 경우 이메일 알림을 보내드립니다.
        									</span>
										</li>
									</ul>
									<h4 class="head">활동 업데이트</h4>
									<div class="box_list">
										<div class="custom_cbox cbox_d box_check">
                        					<label>
                            					<input type="checkbox" id="" name="" value="" class="all_chk">
                            					<span class="box"></span>
                            					<span class="label">주간 업데이트</span>
                            				</label>
                        				</div>	
                        				<div class="custom_cbox cbox_d box_check">
                        					<label>
                            					<input type="checkbox" id="" name="" value="" class="all_chk">
                            					<span class="box"></span>
                            					<span class="label">월간 업데이트</span>
                            				</label>
                        				</div>	
                        				<div class="box_list_cont">
                        					<strong>경험치 알림</strong>
                        					<span>리뷰 입력, 사진 등록, 소셜 활동을 통해 얻은 경험치 정보를 알려드립니다.</span>
                        					<strong>뱃지 알림</strong>
                        					<span>활동을 통해 얻은 뱃지 정보를 알려드립니다.</span>
                        					<strong>공감 알림</strong>
                        					<span>지정한 기간 동안 전에 등록한 리뷰와 사진이 얼마나 많은 공감을 얻었는지 알려드립니다.</span>
                        				</div>
									</div>
								</div>
							</dd>
						</dl>
						<dl class="form_cont">
							<dt class="tit_top">웹사이트 알림 설정</dt>
							<dd class="form_box">
								<div class="check_tit_list">
									<ul class="list">
										<li>
    										<div class="custom_cbox cbox_d check">
                            					<label>
                                					<input type="checkbox" id="" name="" value="" class="all_chk">
                                					<span class="box"></span>
                                				</label>
                            				</div>
        									<strong class="tit">알림 갯수 표시</strong>
        									<span class="cont">
        										알림 갯수 표시
        									</span>
										</li>
										<li>
    										<div class="custom_cbox cbox_d check">
                            					<label>
                                					<input type="checkbox" id="" name="" value="" class="all_chk">
                                					<span class="box"></span>
                                				</label>
                            				</div>
        									<strong class="tit">팝업 알림 표시</strong>
        									<span class="cont">
												새로운 알림이 있는 경우 팝업으로 내용을 표시합니다.
        									</span>
										</li>
									</ul>
									<div class="opt_info_img">
										<img src="../img/website_alarm.png" alt="">
									</div>
								</div>
							</dd>
						</dl>
					</li>
				</ul>
    		</fieldset>		
    	</div>
	</article>
</section>
<?php include "../inc/footer.php" ?>