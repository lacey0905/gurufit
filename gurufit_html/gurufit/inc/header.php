<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="UTF-8">
	<title>GURUFIT</title>
	
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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
    				<li><a href="http://lacey.dothome.co.kr/yeseo/gurufit/member/login.php" class="icon_orderList_x19">Order</a></li>
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