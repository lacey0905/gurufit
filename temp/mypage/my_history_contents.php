<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>GURUFIT</title>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/entypo-fontello/0.1/entypo.css">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

	<!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="../css/import/swiper.min.css">
	
	<link rel="stylesheet" type="text/css" href="../css/import/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/import/font.css">
	<link rel="stylesheet" type="text/css" href="../css/with.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Swiper JS Plugin -->
    <script src="../js/sectionDisplay.js"></script>
    <script src="../js/swiper.min.js"></script>
    <script src="../js/ui.js"></script>

</head>
<body>
<div id="wrap">
<header id="header">
	<!-- TOP 이벤트 배너 -->
	<article class="btn_top_bnr">
		<figure class="size_x1600">
			<a href="#">
				<img src="../img/Top_Banner.png" alt="Adidas Consortium">
			</a>
		</figure>
		<a href="#" class="bnr_close btn_close_x47">Close</a>
	</article>
	<section id="gnb">
		<div class="custom_inner">
			<span class="gnb_opt_msg"><em>전 상품 무료배송 & 90일 무료반품!</em>&nbsp;세상에 없던 슈커머스 구루핏</span>
			<dl class="user_info_list madal_popup_area">
				<dt id="userMyPop" class="user_nav modal_btn">
					<a href="#none">
    					<span class="level">3</span>
    					<span class="name">Kim Hayoung</span>
    					<span class="rnd_box_cnt">2</span>
					</a>
				</dt>
				<!-- 로그인 버튼
				<dt class="link_area">
					<a href="#">
						<span class="name">Kim Hayoung</span>
					</a>
				</dt>
				-->
				<dd>
					<div class="my_pop modal_popup ct_arr pop_type_b">
						<div class="pop_head">
							<h2 class="user_info">
								<img src="../img/review-1.png" alt="뱃지">
								<strong><em class="name">Kim Hayoung</em>님</strong>
								<span class="nick">오양맛살</span>
								<a href="#" class="sign_btn">LOGOUT<span class="material-icons">&#xE315;</span></a>
							</h2>
							<div class="side_btn">
								<a href="#" class="side_left icon_dash">대시보드</a>
								<a href="#" class="side_right icon_setting">설정</a>
							</div>
						</div>
						<div class="pop_nav">
							<ul>
								<li><a href="#">주문내역</a></li>
								<li><a href="#">멤버쉽</a></li>
								<li><a href="#">새로운 활동</a></li>
								<li><a href="#">나의 리스트</a></li>
								<li><a href="#">히스토리</a></li>
								<li><a href="#">1:1 문의</a></li>
							</ul>
						</div>
						<div class="pop_notice">
							<h3>
                        		<strong>알림</strong>
                        		<span class="rnd_box_cnt">2</span>
                        	</h3>
                        	<p class="notice_empty">새로운 알림이 없습니다.</p>
                        	<!-- 팝업 공지사항 리스트
                        	<ul class="notice_list">
                        		<li>
                    				Gold III 등업이 얼마 남지 않았어요!<br>
                    				구매 확정시 레벨업과 함께 <a href="#">5000원 할인쿠폰</a>을 드려요.
                        		</li>
                        		<li>
                        			최근 주문하신 Nike Air Max 2017 마음에 드시나요?<br>
                        			<a href="#">리뷰를 남겨주세요.</a>
                        		</li>
                        	</ul>
                        	-->
						</div>
					</div>
				</dd>
			</dl>
			<nav id="gnbNav">
    			<ul>
    				<li><a href="#" class="icon_heart_x20">MY</a></li>
    				<li><a href="#" class="icon_orderList_x19">Order</a></li>
    				<li class="madal_popup_area">
    					<a href="#" class="modal_btn icon_cart_x21"><span class="rnd_box_cnt">2</span>Cart</a>
                        <div class="cart_pop modal_popup rt_arr pop_type_a">
                        	<h2>
                        		<strong>장바구니</strong>
                        		<span class="rnd_box_cnt">2</span>
                        	</h2>
                        	<div class="cart_prd_list">
                        		<ul>
                        			<li>
                        				<dl>
                        					<dt><a href="#"><img src="../img/pop_prd_sample.png" alt="장바구니 샘플" /></a>
                        					<dd>
                        						<ul>
                        							<li class="rating">
                        								<strong class="star_rating">
							    							<i class="star_on"></i>
							    							<i class="star_on"></i>
							    							<i class="star_on"></i>
							    							<i class="star_on"></i>
							    							<i class="star_off"></i>
							   							</strong>
                        								<span class="cnt">(29)</span>
                    								</li>
                        							<li class="name">NIKE FREE 5.0</li>
                        							<li class="price">
                        								<em>89,100</em>원
                        								<del>99,000원</del>
                        							</li>
                        							<li class="opt">
                										<span class="color">컬러 : <em>Green</em></span>
                										<span class="size">사이즈 : <em>230</em></span>
                										<span class="quantity">수량 : <em>1개</em></span>
                        							</li>
                        						</ul>
                        					</dd>
                        				</dl>
                        			</li>
                        			<li>
                        				<dl>
                        					<dt><a href="#none"><img src="../img/pop_prd_sample.png" alt="장바구니 샘플" /></a>
                        					<dd>
                        						<ul>
                        							<li class="rating">
                        								<strong class="star_rating">
							    							<i class="star_on"></i>
							    							<i class="star_on"></i>
							    							<i class="star_on"></i>
							    							<i class="star_on"></i>
							    							<i class="star_off"></i>
							   							</strong>
                        								<span class="cnt">(29)</span>
                    								</li>
                        							<li class="name">NIKE FREE 5.0</li>
                        							<li class="price">
                        								<em>89,100</em>원
                        								<del>99,000원</del>
                        							</li>
                        							<li class="opt">
                										<span class="color">컬러 : <em>Green</em></span>
                										<span class="size">사이즈 : <em>230</em></span>
                										<span class="quantity">수량 : <em>1개</em></span>
                        							</li>
                        						</ul>
                        					</dd>
                        				</dl>
                        			</li>
                        		</ul>
                        		<p class="guide">
                        			Gold Ⅲ 등업이 얼마 남지 않았어요!<br>
									구매 확정시 레벨업과 함께 5000원 할인쿠폰을 드려요.
                        		</p>
                        		<a href="#" class="pop_submit_a btn_hover_shadow">쇼핑 계속하기</a>
                        	</div>
                        </div>
                        <!--
                  		장바구니가 비어 있을 때
                        <div class="cart_pop modal_popup rt_arr pop_type_b blind">
                        	<h2>
                        		<strong>장바구니</strong>
                        		<span class="rnd_box_cnt">2</span>
                        	</h2>
                        	<div class="cart_empty">
                        		<h3><img src="../img/cart-empty-ico.png" alt="장바구니에 담긴 상품이 없습니다."></h3>
                        		<p class="msg">장바구니에 담긴 상품이 없습니다.</p>
                        		<p class="guide">
                        			Gold Ⅲ 등업이 얼마 남지 않았어요!<br>
									구매 확정시 레벨업과 함께 5000원 할인쿠폰을 드려요.
                        		</p>
                        		<a href="#" class="pop_submit_a">쇼핑 계속하기</a>
                        	</div>
                        </div>
                         -->
					</li>
    			</ul>
			</nav>
		</div>
	</section>
	<section id="lnb">
		<div class="custom_inner">
			<h1 id="logo"><a href="http://lacey.dothome.co.kr/yeseo/gurufit/main/main.php"><img src="../img/gurufit.png" alt="Gurufit"></a></h1>
			<nav id="lnbNav">
				<ul>
					<li><a href="http://lacey.dothome.co.kr/yeseo/gurufit/product/store_list.php?">스토어</a></li>
					<li><a href="#">매거진</a></li>
				</ul>
			</nav>
			<div id="lnbOpt">
				<!-- 검색 -->
				<form action="" method="">
					<fieldset class="lnbSearch">
						<input type="text" value=""  class="search_inp" placeholder="브랜드,상품명,색상,테마등으로 제품을 찾아보세요.">
						<a href="#" class="profile"><img src="../img/icon_profile_x17.png" alt="프로필"></a>
						<input type="submit" class="icon_sch_x22 search_btn" value="Search">
					</fieldset>
				</form>
			</div>
		</div>
	</section>
</header>
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
			<div class="tab_active_type">
				<ul>
					<li><a href="#">대시보드</a></li>
					<li><a href="#">멤버십</a></li>
					<li><a href="#">알림</a></li>
					<li><a href="#">새로운 활동</a></li>
					<li><a href="#">나의 리스트</a></li>
					<li class="active"><a href="#">히스토리</a></li>
					<li><a href="#">1:1문의</a></li>
					<li><a href="#">개인정보 설정</a></li>
					<li><a href="#">구매내역</a></li>										
				</ul>
			</div>
		</section>
		<section id="mypage">
			<div class="tit_sub_wrap line">
    			<h3 class="tit_head tit_sub_b">
    				히스토리
    				<a href="#">상품 (<em>3</em>)</a>
    				<a href="#" class="active">콘텐츠 (<em>3</em>)</a>
    			</h3>
			</div>
			<div class="prd_date_list">
				<div class="list">
					<h4 class="date n_line">2017. 7. 20(금)</h4>
        			<div class="prd_list_type">
                        <article class="custom_prd prd_type_a">
                    		<ul class="x4">
                    			<li>
                    				<a href="#">
                    					<figure>
                    						<img src="../img/hc_contents.png" alt="샘플상품">
                    						<figcaption>
                    							<span class="kind">인터뷰</span>
                    							<span class="like"><strong class="up">52</strong><strong class="dw">4</strong></span>
                    							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
                    							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
                    							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
                    						</figcaption>
                    					</figure>
                    				</a>
                    			</li>
                    			<li>
                    				<a href="#">
                    					<figure>
                    						<img src="../img/hc_contents.png" alt="샘플상품">
                    						<figcaption>
                    							<span class="kind">인터뷰</span>
                    							<span class="like"><strong class="up">52</strong><strong class="dw">4</strong></span>
                    							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
                    							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
                    							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
                    						</figcaption>
                    					</figure>
                    				</a>
                    			</li>
                    			<li>
                    				<a href="#">
                    					<figure>
                    						<img src="../img/hc_contents.png" alt="샘플상품">
                    						<figcaption>
                    							<span class="kind">인터뷰</span>
                    							<span class="like"><strong class="up">52</strong><strong class="dw">4</strong></span>
                    							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
                    							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
                    							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
                    						</figcaption>
                    					</figure>
                    				</a>
                    			</li>
                    			<li>
                    				<a href="#">
                    					<figure>
                    						<img src="../img/hc_contents.png" alt="샘플상품">
                    						<figcaption>
                    							<span class="kind">인터뷰</span>
                    							<span class="like"><strong class="up">52</strong><strong class="dw">4</strong></span>
                    							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
                    							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
                    							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
                    						</figcaption>
                    					</figure>
                    				</a>
                    			</li>
                    		</ul>
                    		<ul class="x4">
                    			<li>
                    				<a href="#">
                    					<figure>
                    						<img src="../img/hc_contents.png" alt="샘플상품">
                    						<figcaption>
                    							<span class="kind">인터뷰</span>
                    							<span class="like"><strong class="up">52</strong><strong class="dw">4</strong></span>
                    							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
                    							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
                    							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
                    						</figcaption>
                    					</figure>
                    				</a>
                    			</li>
                    		</ul>                    		
                    		<div class="prd_more">
                    			<a href="#" class="btn_hover_a">더보기</a>
                    		</div>                    		
                        </article>	    										
        			</div>	
    			</div>
			</div>
		</section>
	</article>
</section>
<footer id="footer">
	<section id="footInfo">
    	<div class="custom_inner">
    		<article class="info">
        		<h2>Free Shipping & Free Return</h2>
        		<h3 class="days_count">
        			<span>30</span>
        			<span>90</span>
        			<span>365</span>
        			<em>DAYS</em>
        		</h3>
        		<p>
        			<strong>멤버십 등급에 따라 길어지는 무료 교환 &middot; 반품기간</strong>
        			교환 &middot 반품 배송비가 없는 구루핏에서 당신에게 꼭 맞는 FIT을 쇼핑하세요.
        		</p>
        		<a href="#" class="text_more">자세히 보기</a>
    		</article>
    		<article class="info">
        		<h2>Membership</h2>
        		<ul class="rnd_icon_button">
        			<li>
        				<a href="#">
        					<img src="../img/foo-01.png" alt="">
        					<span>교환 &middot; 반품<br>무료배송</span>
        				</a>
        			</li>
        			<li>
        				<a href="#">
        					<img src="../img/foo-02.png" alt="">
        					<span>상시<br>할인</span>
        				</a>
        			</li>
        			<li>
        				<a href="#">
        					<img src="../img/foo-03.png" alt="">
        					<span>더 빠른<br>배송</span>
        				</a>
        			</li>
        			<li>
        				<a href="#">
        					<img src="../img/foo-04.png" alt="">
        					<span>프리미엄 &middot;독점 제품<br>선구매 기회</span>
        				</a>
        			</li>
        		</ul>
        		<p>
        			<strong>가입만 해도 누구나 멤버쉽 혜택을 누릴 수 있습니다.</strong>
        			무료 교환 &middot; 반품은 기본! 등급에 따라 더 큰 혜택을 받을 수 있는 멤버쉽 혜택을 만나보세요.
        		</p>
        		<a href="#" class="text_more">자세히 보기 </a>
    		</article>
		</div>
	</section>
	<section id="csInfo">
		<div class="custom_inner">
    		<h2>대표전화</h2>
    		<h3>1544.7777</h3>
    		<p>1번 : 배송 / 교환 / 환불관련 / 2번 : 결제 / 회원관련 오전9시~오후6시(토,일 공휴일 휴무)</p>
    		<ul>
    			<li><a href="#">고객센터</a></li>
    			<li><a href="#">FAQ</a></li>
    			<li><a href="#">1:1질문하기</a></li>
    			<li><a href="#">이메일문의</a></li>
    		</ul>
		</div>
	</section>
	<nav id="footNav">
		<div class="custom_inner">
    		<ul id="navLink">
    			<li><a href="#">회사소개</a></li>
    			<li><a href="#">서비스소개</a></li>
    			<li><a href="#">이용약관</a></li>
    			<li><a href="#">개인정보취급방침</a></li>
    			<li><a href="#">청소년 보호정책</a></li>
    			<li><a href="#">인재채용</a></li>
    		</ul>
    		<ul id="snsLink">
    			<li class="kakao"><a href="#"><img src="../img/kakao-ico.png" alt="KaKao"></a></li>
    			<li class="facebook"><a href="#"><img src="../img/facebook-ico.png" alt="FaceBook"></a></li>
    			<li class="twitter"><a href="#"><img src="../img/twitter-ico.png" alt="Twitter"></a></li>
    			<li class="instagram"><a href="#"><img src="../img/instagram-ico.png" alt="Instagram"></a></li>
    		</ul>
		</div>
	</nav>
	<address id="address">
		<div class="custom_inner">
    		<span>상호명 : 슈포래빗  대표이사 : 안보현</span>
    		<span>주소 : 서울시 서초구 방배동 901-10 3층</span>
    		<span>사업자등록번호 : 220-81-62517</span>
    		<br>
            <span>통신판매업신고번호 : 제2006-경기성남-692호  <a href="#">사업자등록정보확인</a></span>
            <br>
            <span>고객센터 주소 : 서울시 서초구 방배동 901-10 3층</span>
        	<span>전화 : 1588-3819 (전화전클릭) 1588-3816 (결제도용신고)</span>
        	<br>
        	<span>팩스 : 033-816-5300</span>
        	<span>이메일 : helpcustomer@gurufit.co.kr</span>
            <p id="copy">COPYRIGHT &copy; GURUFIT ALL RIGHTS RESERVED.</p>
        </div>
	</address>
</footer>
</div>
</body>
</html>
 