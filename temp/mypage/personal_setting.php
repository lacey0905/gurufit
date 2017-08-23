<?php include "../inc/header.php" ?>
<style>
/*개인정보 설정*/
.personal_setting_wrapper {
	border-top: solid 2px #4a4a4a;
	width:1100px;
}
/*개인정보 설정-로그인 정보*/
.personal_setting_wrapper .login_info > th {
	width: 240px;
	background-color: #f6f6fa;
    font-size: 18px;
    text-align: center;
    color: #000000;
    border-bottom: solid 1px #ebebeb;   
    vertical-align:top;
    padding-top:25px; 	
}
.personal_setting_wrapper .login_info > td {
	width:860px;
    border-bottom: solid 1px #ebebeb;
    padding-top: 22px;
    padding-bottom: 22px;	
}
.personal_setting_wrapper .login_info dl dt {
	display:inline-block;
	width:177px;
	clear:both;
	float:left;
	
    font-size: 14px;
    line-height: 40px;
    letter-spacing: -0.6px;
    color: #000000;	
 	padding-left:40px;
	
}
.personal_setting_wrapper .login_info dl dd {
	float:left;
	position:relative;
    font-size: 14px;
    text-align: left;
    color: #4a4a4a;
    line-height: 40px;	
}
.personal_setting_wrapper .login_info dl dd span {
    font-size: 14px;
    letter-spacing: -0.6px;
    text-align: right;
    color: #4990e2;	
    text-decoration:underline;
}
.personal_setting_wrapper .login_info .email_change{
	margin-left:9px;
}
/*개인정보 설정 personal_info*/
.personal_setting_wrapper .personal_info {
}
.personal_setting_wrapper .personal_info > th {
	width: 240px;
	background-color: #f6f6fa;
    font-size: 18px;
    text-align: center;
    color: #000000;
    border-bottom: solid 1px #ebebeb;
    vertical-align:top;
    padding-top:25px; 	
}
.personal_setting_wrapper .personal_info > td {
	width:860px;
    border-bottom: solid 1px #ebebeb;
    position:relative;
    padding-top:18px;
    padding-bottom:39px;
}
.personal_setting_wrapper .personal_info dl dt {
	display:inline-block;
	width:177px;
	clear:both;
	float:left;
	
    font-size: 14px;
    line-height: 40px;
    letter-spacing: -0.6px;
    color: #000000;	
 	padding-left:40px;
}
.personal_setting_wrapper .personal_info dl dd {
	float:left;
	position:relative;
    font-size: 14px;
    text-align: left;
    color: #4a4a4a;
    line-height: 40px;
}
.personal_setting_wrapper .personal_info i {
	margin-left:11px;
    font-size: 12px;
    font-weight: bold;
    line-height: 1.33;
    text-align: left;
    color: #f6a623;	
}
.personal_setting_wrapper .personal_info .personal_info_edit {
    font-size: 14px;
    letter-spacing: -0.6px;
    text-align: right;
    color: #4990e2;
	text-decoration:underline;
	position:absolute;
	top:15px;
	right:60px;
}
.personal_setting_wrapper .personal_info .personal_radio {
	margin-right:29px;
}
.personal_setting_wrapper .personal_info .woman_radio {
    font-size: 14px;
    font-weight: 500;
    text-align: left;
    color: #8f8f8f;	
}
.personal_setting_wrapper .personal_info .man_radio {
    font-size: 14px;
    font-weight: 500;
    text-align: left;
    color: #8f8f8f;	
}
/*개인정보 설정-쇼핑정보*/
.personal_setting_wrapper .shopping_info {
}
.personal_setting_wrapper .shopping_info > th {
	width: 240px;
	background-color: #f6f6fa;
    font-size: 18px;
    text-align: center;
    color: #000000;
    border-bottom: solid 1px #ebebeb;
    padding-top:30px;	
    vertical-align:top;
}
.personal_setting_wrapper .shopping_info > td {
	width:860px;
    border-bottom: solid 1px #ebebeb;	
}
.personal_setting_wrapper .shopping_info .shopping_info_title {
	display:inline-block;
	width:210px;
	vertical-align:top;
	
    font-size: 14px;
    line-height: 40px;
    letter-spacing: -0.6px;
    color: #000000;	
 	padding-left:40px;
	width:177px; 
	margin-top:25px;		
}
.personal_setting_wrapper .shopping_info .shopping_info_box_area {
	margin-top:38px;
	display:inline-block;
	background-color:blue;
    width: 610px;
    height: 133px;
    border-radius: 5px;
    background-color: #ffffff;
    box-shadow: 8px 8px 1px 0 rgba(0, 0, 0, 0.09);
    border: solid 1px #f6a623;
	position:relative;    	
}
.personal_setting_wrapper .shopping_info .shopping_info_box_area .name_area {
	margin:21px 0 13px 31px;
}

.personal_setting_wrapper .shopping_info .shopping_info_box_area .name_area p {
	float:left;
    font-size: 14px;
    text-align: left;
    color: #8f8f8f;	
}
.personal_setting_wrapper .shopping_info .shopping_info_box_area .name_area p:nth-child(1){
	margin-right:104px;
}
.personal_setting_wrapper .shopping_info .shopping_info_box_area .name_area span {
    font-size: 14px;
    line-height: 1.86;
    letter-spacing: -0.4px;
    text-align: left;
    color: #4a4a4a;
    margin-left:16px;	
}
.personal_setting_wrapper .shopping_info .shopping_info_box_area .name_area .name_area_edit {
    font-size: 14px;
    line-height: 16px;
    text-align: left;
    color: #4990e2;
    position:absolute;
    top:23px;
    right:29px;
    text-decoration:underline;	
}
.personal_setting_wrapper .shopping_info .shopping_info_box_area .address_area {
	clear:both;
	margin-left:31px;
}
.personal_setting_wrapper .shopping_info .shopping_info_box_area .address_area p:nth-child(1){
	display:block;
}
.personal_setting_wrapper .shopping_info .shopping_info_box_area .address_area p:nth-child(2){
	margin-left:28px;
}
.personal_setting_wrapper .shopping_info .shopping_info_box_area .address_area span {
	margin-left: 20px;
	text-align:left;
}
.personal_setting_wrapper .shopping_info .shopping_info_button_area {
	text-align:center;
}
.personal_setting_wrapper .shopping_info .shopping_info_button_area > a {
    width: 610px;
    height: 54px;
    border-radius: 5px;
    border: solid 1px #bbbbbb;
    display:inline-block;
    
    font-size: 16px;
    font-weight: bold;
    line-height: 26px;
    letter-spacing: -0.4px;
    text-align: center;
    color: #4a4a4a;
    margin-top:20px;
    margin-left:192px;
    padding-top:26px; 
    margin-bottom: 34px;  	
}




.personal_setting_wrapper .shopping_info .name_area .shopping_info_edit{
    font-size: 14px;
    line-height: 1.14;
    text-align: left;
    color: #4990e2;
	float:right;
	text-decoration:underline;
}
.personal_setting_wrapper .shopping_info .address_area {
}
.personal_setting_wrapper .shopping_info .address_area p {
	display:inline-block;
    font-size: 14px;
    text-align: left;
    color: #8f8f8f;	
}
.personal_setting_wrapper .shopping_info .address_area span {
    font-size: 14px;
    line-height: 1.86;
    letter-spacing: -0.4px;
    text-align: left;
    color: #4a4a4a;
}
.personal_setting_wrapper .shopping_info .button_area {
}
.personal_setting_wrapper .shopping_info .button_area span {
    width: 610px;
    height: 80px;
    border-radius: 5px;
    border: solid 1px #bbbbbb;
	
    font-size: 16px;
    font-weight: bold;
    line-height: 1.63;
    letter-spacing: -0.4px;
    text-align: left;
    color: #4a4a4a;	
	display:inline-block;
}
/*개인정보 설정-알림설정*/
.personal_setting_wrapper .personal_alarm_setting {
}
.personal_setting_wrapper .personal_alarm_setting > th {
	width: 240px;
	background-color: #f6f6fa;
    font-size: 18px;
    text-align: center;
    color: #000000;
    border-bottom: solid 1px #ebebeb;
    vertical-align:top;
    padding-top:30px;
}
.personal_setting_wrapper .personal_alarm_setting > td {
	width:860px;
    border-bottom: solid 1px #ebebeb;	
}
.personal_setting_wrapper .bottom_alarm_setting{
	background-color:red;
}
.personal_setting_wrapper .email_alarm_setting > dt {
	display:inline-block;
	width:177px;
	clear:both;
	float:left;
	
    font-size: 14px;
    line-height: 40px;
    letter-spacing: -0.6px;
    color: #000000;	
 	padding-left:40px;
 	margin-top:25px;
	
}
.personal_setting_wrapper .email_alarm_setting > dd {
	float:left;
	position:relative;
}
.personal_setting_wrapper .email_alarm_setting dd:after {
	content:"";
	background-color:red;
	display:block;
	clear:both;
}
/*알림설정-콘텐츠 알림*/
.personal_setting_wrapper .email_alarm_setting .contents_alarm {
}
.personal_setting_wrapper .email_alarm_setting .contents_alarm h4 {
    font-size: 14px;
    text-align: left;
    color: #8f8f8f;
    margin-top:34px;
    font-weight:500;	
}
.personal_setting_wrapper .email_alarm_setting .contents_alarm strong {
   font-size: 14px;
   line-height: 22px;
   color: #4a4a4a;
   margin-top:12px;
   display:inline-block;	
}
.personal_setting_wrapper .email_alarm_setting .contents_alarm p {
   font-size: 13px;
   font-weight: 300;
   line-height: 1.69;
   text-align: left;
   color: #8f8f8f;
   margin-left:28px;	
}
.personal_setting_wrapper .email_alarm_setting .shopping_alarm{
	margin-top:19px;
}
.personal_setting_wrapper .email_alarm_setting .shopping_alarm h4 {
    font-size: 14px;
    text-align: left;
    color: #8f8f8f;
    margin-top:34px;
    font-weight:500;
    margin-bottom:20px;	
}
.personal_setting_wrapper .email_alarm_setting .shopping_alarm strong {
   font-size: 14px;
   line-height: 22px;
   color: #4a4a4a;
   margin-top:12px;
   display:inline-block;	
}
.personal_setting_wrapper .email_alarm_setting .shopping_alarm p {
   font-size: 13px;
   font-weight: 300;
   line-height: 1.69;
   text-align: left;
   color: #8f8f8f;
   margin-left:28px;	
}
.personal_setting_wrapper .email_alarm_setting .active_update {
}
.personal_setting_wrapper .email_alarm_setting .active_update h4 {
    font-size: 14px;
    text-align: left;
    color: #8f8f8f;
    margin-top:34px;
    font-weight:500;
    margin-bottom:15px;	
}
.personal_setting_wrapper .email_alarm_setting .active_update > p > span{
    font-size: 14px;
    font-weight: bold;
    text-align: left;
    color: #4a4a4a;
    margin-right:61px;
    margin-bottom:17px;	
}
.personal_setting_wrapper .email_alarm_setting .active_update .active_box {
	border:1px solid red;
	margin-top:17px;
    width: 610px;
    height: 140px;
    border: solid 1px #d8d8d8;	
}
.personal_setting_wrapper .email_alarm_setting .active_update .active_box p {
    font-size: 13px;
    font-weight: 300;
    text-align: left;
    color: #8f8f8f;
    margin:20px 0 0 23px;	
}
.personal_setting_wrapper .email_alarm_setting .active_update .active_box span {
   font-size: 14px;
   font-weight: bold;
   margin-right:14px;	
}

/*웹사이트 알림 설정*/
.personal_setting_wrapper .web_alarm_setting {
}
.personal_setting_wrapper .web_alarm_setting > dt {
	display:inline-block;
	width:177px;
	clear:both;
	float:left;
	
    font-size: 14px;
    line-height: 40px;
    letter-spacing: -0.6px;
    color: #000000;	
 	padding-left:40px;
	margin-top:48px;
}
.personal_setting_wrapper .web_alarm_setting > dd {
	float:left;
	position:relative;
}
.personal_setting_wrapper .web_alarm_setting .contents_alarm {
	margin-top:55px;
}
.personal_setting_wrapper .web_alarm_setting .contents_alarm img {
	position: absolute;
	bottom: 36px;
	left: 413px;
}
.personal_setting_wrapper .web_alarm_setting .contents_alarm strong {
    font-size: 14px;
    font-weight: bold;
    line-height: 1.57;
    color: #4a4a4a;	
}
.personal_setting_wrapper .web_alarm_setting .contents_alarm p {
    font-size: 13px;
    font-weight: 300;
    line-height: 22px;
    text-align: left;
    color: #8f8f8f;
    margin-bottom:12px;
    margin-left:28px;	
}
.personal_setting_wrapper .web_alarm_setting .contents_alarm p:last-child {
	margin-bottom:183px;
}
</style>


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
 