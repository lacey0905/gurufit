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
			<h2>Help Desk</h2>
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
		<div class="member_box alarm_box">
			<h3>
				개인정보 설정
			</h3>
			<article class="personal_setting_wrapper">
				<table>
					<tr class="login_info">
						<th>로그인 정보</th>
						<td>
							<dl>
								<dt>이메일 주소</dt>
								<dd>groovy@shoeforrabbit.com<a href="#"><span class="email_change">이메일 주소 변경</span></a></dd>
								<dt>비밀번호</dt>
								<dd><a href="#"><span>비밀번호 변경</span></a></dd>
							</dl>
						</td>
					</tr>
					<tr class="personal_info">
						<th>개인정보</th>
						<td>
							<dl>
								<dt>이름</dt>
								<dd>홍길동</dd>
								<dd class="personal_info_edit">편집</dd>
								<dt>닉네임</dt>
								<dd>단호박정식</dd>
								<dt>휴대전화번호</dt>
								<dd>010-4321-1234<i class="fa fa-check" aria-hidden="true">인증됨</i></dd>
								<dt>생년월일</dt>
								<dd>1980년 11월 15일</dd>
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
						</td>
					</tr>
					<tr class="shopping_info">
						<th>쇼핑정보</th>
						<td>
						  <div class="shopping_info_title">
						  	배송지 주소
						  </div>
						  <div class="shopping_info_box_area">
						  	<div class="name_area">
							  	<p>이름 <span>김하영</span></p>
							  	<p>연락처<span>051-6215-8168</span></p>
							  	<p class="name_area_edit">편집</p>
						  	</div>
						  	<div class="address_area">
							  	<p>주소<span>47241</span></p>
							  	<p><span>부산광역시 부산진구 전포대로275번길 20, 서면롯데캐슬스카이 123-2345</span></p>
						  	</div>
						  </div>
						  <div class="shopping_info_button_area">
						  	<a href="#">+ 새로운 주소 입력</a>
						  </div>
						</td>
					</tr>
					<tr class="personal_alarm_setting">
						<th>알림설정</th>
						<td>
							<dl class="email_alarm_setting">
								<dt>이메일 알림 설정</dt>
								<dd>
									<div class="contents_alarm">
										<h4>콘텐츠 알림</h4>
										<strong>
											<span class="custom_cbox cbox_d">
			                					<label>
			                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
			                    					<span class="box"></span>
			                    				</label>
			                				</span>											
										새로운 콘텐츠
										</strong>
										<p>팔로우 중인 guru / 슈어드바이저가 새로운 콘텐츠 업데이트하면 이메일 알림을 보냅니다.</p>
										<strong>
											<span class="custom_cbox cbox_d">
			                					<label>
			                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
			                    					<span class="box"></span>
			                    				</label>
			                				</span>												
										연관 콘텐츠
										</strong>
										<p>장바구니 및 마이 리스트에 담긴 상품/콘텐츠와 연관관 콘텐츠를 이메일로 보내드립니다.</p>
									</div>
									<div class="shopping_alarm">
										<h4>쇼핑 정보 알림</h4>
										<strong>
											<span class="custom_cbox cbox_d">
			                					<label>
			                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
			                    					<span class="box"></span>
			                    				</label>
			                				</span>											
										연관 상품 업데이트 정보
										</strong>
										<p>장바구니, 컬렉션, 마이 리스트에 담긴 상품에 변동사항이 있는 경우 이메일 알림을 보냅니다.<br>
										가격 변동, 세일, 품절, 재입고 등</p>
										<strong>
											<span class="custom_cbox cbox_d">
			                					<label>
			                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
			                    					<span class="box"></span>
			                    				</label>
			                				</span>											
										이벤트 프로모션 정보
										</strong>
										<p>구루핏 쇼핑에서 진행하는 이벤트와 프로모션이 있는 경우 이메일 알림을 보내드립니다.</p>
									</div>
									<div class="active_update">
										<h4>활동 업데이트</h4>
										<p>
											<span>
												<span class="custom_cbox cbox_d">
				                					<label>
				                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
				                    					<span class="box"></span>
				                    				</label>
				                				</span>												
											주간 업데이트
											</span>
											<span>
												<span class="custom_cbox cbox_d">
				                					<label>
				                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
				                    					<span class="box"></span>
				                    				</label>
				                				</span>												
											월간 업데이트
											</span>
										</p>
										<div class="active_box">
											<p><span>경험치 알림</span>리뷰 입력, 사진 등록, 소셜 활동을 통해 얻은 경험치 정보를 알려드립니다.</p>
											<p><span>뱃지 알림</span>활동을 통해 얻은 뱃지 정보를 알려드립니다.</p>
											<p><span>공감 알림</span>지정한 기간 동안 전에 등록한 리뷰와 사진이 얼마나 많은 공감을 얻었는지 알려드립니다.</p>
										</div>
									</div>
								</dd>
							</dl>
							<dl class="web_alarm_setting">
								<dt>웹사이트 알림 설정</dt>
								<dd>
									<div class="contents_alarm">
										<strong>
											<span class="custom_cbox cbox_d">
			                					<label>
			                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
			                    					<span class="box"></span>
			                    				</label>
			                				</span>											
										알림 갯수 표시
										</strong>
										<p>읽지 않은 웹사이트 알림 갯수를 표시합니다.</p>
										<img src="../img/website_alarm.png" alt="#" />
										<strong>
											<span class="custom_cbox cbox_d">
			                					<label>
			                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
			                    					<span class="box"></span>
			                    				</label>
			                				</span>											
										팝업 알림 표시
										</strong>
										<p>새로운 알림이 있는 경우 팝업으로 내용을 표시합니다.</p>
									</div>
								</dd>
							</dl>							
						</td>						
					</tr>					
				</table>
			</article>
		</div>
	</article>
</section>
<?php include "../inc/footer.php" ?>
 