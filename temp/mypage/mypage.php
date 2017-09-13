<?php include "../inc/header.php" ?>
<!-- 모달 팝업 -->
<!-- 모달팝업 부모 앨리먼트 -->
<!-- 
    팝업의 그림자가 모든 팝업에 1개만 적용 되어야 하기 때문에  [f_modal_perant] 앨리먼트를 별도로 껏다켰다를 반복 해야 합니다.
    따라서 팝업이 1개 이상 보여져야 할 경우에는   [f_modal_perant] 앨리먼트에 [open] 클래스를 추가 합니다.
-->
<div class="f_modal_perant">

	<!-- 모달 팝업 우선순위 [z1 ~ z6]까지 클래스로 만들어 놓았습니다. [z6]이 가장 우선순위가 높습니다. -->
	<!-- 디자인상 팝업마다 그림자가 투명하게 들어가 있습니다. 때문에 팝업이 겹칠 경우에는  [f_modal_shadow]를 가장 하위 우선순위 팝업에만 적용 해야 합니다.-->
	
	<!-- 사진 등록 리스트 -->
	<div class="f_modal_layer f_modal_shadow big">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<span class="date">
        				<em>등록일</em>
    					2017년 7월 16일	
        			</span>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont big">
        			<!-- 팝업 슬라이드 반복 -->
        			<div class="f_modal_slider">
						<div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                	<div class="slide_area">
                                    	<div class="slide_thum">
                                    		<!-- 나의 사진 확대 이미지  -->
                                    		<img src="../img/modal_slider_sample.png" />
                                    	</div>
                                    	<div class="slider_prd">
                            				<table class="prd_list_a small">
                            					<caption class="blind">장바구니</caption>
                            					<colgroup>
                            						<col class="col_thum">
                            						<col class="col_cont">
                            					</colgroup>
                            					<tbody>
                        							<tr>
                            							<td class="thum">
                            								<span class="prd_thum">
                            		    						<a href="#">
                            		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
                            	    							</a>
                            	   							</span>
                            							</td>
                            							<td class="cont">
                            								<strong class="name">Nike Metcon DSX Flyknit</strong>
                            								<span class="date">2017년 6월 30일에 구입</span>
                            								<ul class="hash">
                            									<li><a href="#">#NIKE</a></li>
                            									<li><a href="#">#Flyknit</a></li>
                            									<li><a href="#">#Free</a></li>
                            									<li><a href="#">#5.0</a></li>
                            								</ul>
                            								<div class="like">
                            									<a href="#"><span class="up">52</span></a>
                        										<a href="#"><span class="dw">4</span></a>
                            								</div>
                            							</td>
                            						  </tr>
                            					 </tbody>
                            				</table>
                            			</div>
                        			</div>
                                </div>
                                <!-- 사진 하단 제품 정보 -->
                                <div class="swiper-slide">
                                	<div class="slide_area">
                                    	<div class="slide_thum">
                                    		<img src="../img/modal_slider_sample.png" />
                                    	</div>
                                    	<div class="slider_prd">
                            				<table class="prd_list_a small">
                            					<caption class="blind">장바구니</caption>
                            					<colgroup>
                            						<col class="col_thum">
                            						<col class="col_cont">
                            					</colgroup>
                            					<tbody>
                        							<tr>
                            							<td class="thum">
                            								<span class="prd_thum">
                            		    						<a href="#">
                            		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
                            	    							</a>
                            	   							</span>
                            							</td>
                            							<td class="cont">
                            								<strong class="name">Nike Metcon DSX Flyknit</strong>
                            								<span class="date">2017년 6월 30일에 구입</span>
                            								<ul class="hash">
                            									<li><a href="#">#NIKE</a></li>
                            									<li><a href="#">#Flyknit</a></li>
                            									<li><a href="#">#Free</a></li>
                            									<li><a href="#">#5.0</a></li>
                            								</ul>
                            								<div class="like">
                            									<a href="#"><span class="up">52</span></a>
                        										<a href="#"><span class="dw">4</span></a>
                            								</div>
                            							</td>
                            						  </tr>
                            					 </tbody>
                            				</table>
                            			</div>
                        			</div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
       						<div class="swiper-pagination"></div>
                            <!-- Add Arrows -->
                            <div class="swiper-button-next swiper-button-white"></div>
                            <div class="swiper-button-prev swiper-button-white"></div>
                        </div>
                        <script>
                    	$(function(){
                    		var swiper = new Swiper('.swiper-container', {
                    	        pagination: '.swiper-pagination',
                    	        paginationClickable: true,
                    	        nextButton: '.swiper-button-next',
                    	        prevButton: '.swiper-button-prev',
                    	        paginationType: 'fraction'
                    	    });

                    		// 사진 인덱스에 해당하는 슬라이드로 즉시 이동
                    		//modal_swiper.slideTo($(this).index(), 0);
                    		//$(this) <- 클릭한 사진 인덱스를 넘겨야 합니다.
                    	});
                        </script>
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
				<dd><a href="#">마이페이지</a></dd>
			</dl>
			<p class="locate_msg">나이키 플라이니트 최대~50% OFF</p>
		</div>
	</div>
	<article class="sub_content custom_inner">
		<section class="sub_head">
			<h2>My Page</h2>
			<div class="tab_active_type">
				<ul>
					<li class="active"><a href="#">대시보드</a></li>
					<li><a href="#">멤버십</a></li>
					<li><a href="#">알림</a></li>
					<li><a href="#">새로운 활동</a></li>
					<li><a href="#">하트 리스트</a></li>
					<li><a href="#">히스토리</a></li>
					<li><a href="#">1:1문의</a></li>
					<li><a href="#">개인정보 설정</a></li>
					<li><a href="#">구매내역</a></li>										
				</ul>
			</div>
		</section>
		<section id="mypage">
			<div class="my_dash_board">
				<div class="dash_sec dash_x3">
					<h3 class="dash_tit">공개 뱃지</h3>
					<figure class="dash_profile">
						<img src="../img/review-1.png" alt="">
						<figcaption>잘 나가는 리뷰어</figcaption>
					</figure>
					<div class="dash_badge_list">
						<strong class="badge_tit">
							경험치 뱃지
							<a href="#" class="badge_more">경험치 뱃지 미션 보기</a>
						</strong>
						<ul class="badge_list">
							<li>
								<a href="#">
									<img src="../img/review-1.png" alt="">
									<span>리뷰</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../img/review-1.png" alt="">
									<span>사진</span>
								</a>
							</li>
							<li>
								<a href="#">
									<img src="../img/review-1.png" alt="">
									<span>소셜</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="dash_sec dash_x3">
					<h3 class="dash_tit">
						재미뱃지
						<a href="#" class="more">재미뱃지 미션보기</a>
					</h3>
					<div class="fun_badge_list" data-mcs-theme="minimal-dark">
						<ul>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>하트 x 20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>뉴비</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>하트 x 20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>뉴비</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>하트 x 20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>뉴비</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
							<li>
								<img src="../img/fun_badge_01.png" alt="">
								<span>굿픽쳐20</span>
							</li>
						</ul>
					</div>
				</div>
				<div class="dash_sec dash_x3">
					<h3 class="dash_tit">경험치 현황</h3>
					<div class="deps_gauge_wrap">
						<strong class="deps_gauge_msg">
							다음 등급 <em>Silver III</em> 까지 <em>1000xp</em> 남음
						</strong>
    					<div class="deps_gauge">
    						<!-- 현재 경험치 (가장 진한 색) -->
    						<div class="current" style="width:50%;">
    							<div class="msg_box_a level_info">
        							<span class="msg">1000xp</span>
        							<div class="shadow"></div>
        						</div>
    						</div>		
    						<!-- 중간 진한색 -->
    						<div class="target" style="width:75%;"></div>
    					</div>
    					<strong class="deps_gauge_msg">
							현재 등급 유지에 필요한 경험치 <em>800xp</em> 남음
						</strong>
					</div>
					<dl class="level_up_guide">
						<dt><a href="#">경험치를 얻을 수 있는 방법</a></dt>
						<dd><a href="#">구매 상품평 등록</a></dd>
						<dd><a href="#">구매 상품 View 등록</a></dd>
						<dd><a href="#">구매 내역 공유</a></dd>
						<dd><a href="#">추천인 회원 가입</a></dd>
						<dd><a href="#">이메일 수신 동의</a></dd>
						<dd class="more"><a href="#">더보기</a></dd>
					</dl>
					<div class="coupon_count_box">
						<div class="tooltip_coupon_count_box">
							<strong class="box_tit">쿠폰<a href="#" class="more">보유 쿠폰 보기</a></strong>
         					<div class="obtain_coupon_w">
        						<div class="obtain_coupon">
        							<h4>보유 쿠폰 <span class="cic">5</span></h4>
            						<div class="obt_coupon_top">
            							<div class="obt_coupon_tit">
            								<ul>
            									<li>쿠폰 종류</li>
            									<li>쿠폰 사용 정보</li>
            									<li>유효 기간</li>
            								</ul>
        								</div>
        								<div class="obt_coupon_area">
        									<ul>
        										<li class="cou_cate">
        											<strong>5,000원</strong>
        											<span>가입 환영</span>
        										</li>
        										<li class="cou_use_info">
        											<p>
        											모든 상품 구입에 사용할 수 있습니다.<br>
        											중복 사용이 가능합니다.	
        											</p>
        										</li>
        										<li class="exp_date">
        											<span>없음</span>
        										</li>
        									</ul>
        								</div>
        								<div class="obt_coupon_area">
        									<ul>
        										<li class="cou_cate">
        											<strong>5,000원</strong>
        											<span>레벨업 - Silver III</span>
        										</li>
        										<li class="cou_use_info">
        											<p>
        											모든 상품 구입에 사용할 수 있습니다.<br>
        											중복 사용이 가능합니다.	
        											</p>
        										</li>
        										<li class="exp_date">
        											<span>없음</span>
        										</li>
        									</ul>
        								</div>
        								<div class="obt_coupon_area">
        									<ul>
        										<li class="cou_cate">
        											<strong>2,000원</strong>
        											<span>레벨업 - Gold I</span>
        										</li>
        										<li class="cou_use_info">
        											<p>
        											모든 상품 구입에 사용할 수 있습니다.<br>
        											중복 사용이 가능합니다.	
        											</p>
        										</li>
        										<li class="exp_date">
        											<span>없음</span>
        										</li>
        									</ul>
        								</div>
        								<div class="obt_coupon_area">
        									<ul>
        										<li class="cou_cate">
        											<strong>10%</strong>
        											<span>스니커즈 할인</span>
        										</li>
        										<li class="cou_use_info">
        											<p>
        											스니커즈에 한해 사용할 수 있습니다. 3만원 이상, 최대 1만원 할인<br>
        											다른 이벤트 쿠폰과 중복해서 사용할 수 없습니다.	
        											</p>
        										</li>
        										<li class="exp_date">
        											<span>2017년 10월 23일</span>
        										</li>
        									</ul>
        								</div>
        								<div class="obt_coupon_area">
        									<ul>
        										<li class="cou_cate">
        											<strong>10%</strong>
        											<span>2017년 여름 세일</span>
        										</li>
        										<li class="cou_use_info">
        											<p>
        											모든 상품 구입에 사용할 수 있습니다.<br>
        											다른 이벤트 쿠폰과 중복해서 사용할 수 없습니다.	
        											</p>
        										</li>
        										<li class="exp_date">
        											<span>2017년 10월 23일</span>
        										</li>
        									</ul>
        								</div>     								    								     								    								
            						</div>    							
        						</div>
        					</div>							
						</div>
						<div class="count_box">
							<div class="box_sec count"><em>10</em>장</div>
							<div class="box_sec price"><em>28,000</em>원</div>
						</div>			

					</div>
					<!-- 보유 쿠폰 팝업  -->
					<style>
					.tooltip_coupon_count_box {
					   position:relative;					
					}
					.tooltip_coupon_count_box:hover .obtain_coupon {
					   visibility:visible;
					}
					.obtain_coupon_w {
					   width:660px;					
					   position:absolute;
					   top:17px;
					   right:-34px;					
                       padding-top:40px;
					}
					.obtain_coupon {
					   visibility:hidden;
					   border: 1px solid #DDDDDD;
					   box-shadow: 8px 8px 1px 0 rgba(0,0,0,0.09);
					   text-align:center;	
					   background-color:#fff;
					   z-index:10;
					   width:660px;
					   position:relative;
					   padding-bottom:23px;				   
					}
					.obtain_coupon:after {
                        content: " ";
                        position: absolute;
                        top: -9px;
                        right: 12%;
                        display: inline-block;
                        width: 15px;
                        height: 15px;
                        background-color: #fff;
                        border: solid 1px #dddddd;
                        border-bottom: 0;
                        border-right: 0;
                        -ms-transform: rotate(45deg);
                        -webkit-transform: rotate(45deg);
                        transform: rotate(45deg);
                        z-index:10;					   
					}
					.obtain_coupon h4 {
                       color: #000000;		
                       font-size: 18px;	
                       line-height: 27px;
                       margin-top:27px;
					}
					.obtain_coupon .cic {
					   margin-left:10px;
					   display:inline-block;
                       background:url(../img/ob_cu.png) no-repeat;
	                   color: #FFFFFF;	
	                   font-family: "Noto Sans";	
	                   font-size: 16px;	
	                   font-style: italic;	
	                   font-weight: bold;	
	                   line-height: 18px;
	                   padding: 2px 9px 9px 5px;
                       position: relative;		   
					}
					.obtain_coupon .cic:after {
                       content: " ";
                       position: absolute;
                       right: 65px;
                       top:30px;
                       width: 1px;
                       height: 20px;
                       border-left: solid 1px #979797;					
					}
					.obt_coupon_top {
					   margin-top:40px;
					   padding:0 24px;
					}
					.obt_coupon_area {
	                   width: 610px;
	                   height: 49px;	
	                   border: 1px solid #EBEBEB;	
	                   border-radius: 5px;
	                   margin-bottom:8px;					  
					}
					.obt_coupon_area:after {
					   content:"";
					   display:block;
					   clear:both;
					}
					.obt_coupon_area li {
					   float:left;
					}
					.obt_coupon_area .cou_cate {
					   width:155px;
					   height:37px; 
					   border-right:1px dashed #ebebeb;
					   padding-top:10px;  
					}
					.obt_coupon_area .cou_cate strong {
					   display:block;
                       color: #4A4A4A;	
                       font-size: 12px;	
                       font-weight: bold;	
                       line-height: 16px;	
                       text-align: center;					    
					}
					.obt_coupon_area .cou_cate span {
					   display:block;
                       color: #4A4A4A;	
                       font-size: 12px;	
                       font-weight: normal;	
                       line-height: 16px;	
                       text-align: center;					    
					}					
					.obt_coupon_area .cou_use_info {
					   width:334px;
					   height:37px;
					   border-right:1px dashed #ebebeb;
					   padding-top:10px;
					}
					.obt_coupon_area .cou_use_info p {
                       color: #747474;		
                       font-size: 12px;	
                       font-weight: 300;	
                       line-height: 16px;
                       text-align:left;
                       padding-left:8px;					   
					}
					.obt_coupon_area .exp_date {
					   width:119px;
					   padding-top:13px;
					}
					.obt_coupon_area .exp_date span {
	                   color: #747474;		
	                   font-size: 12px;	
	                   font-weight: 300;	
	                   line-height: 16px;	
	                   text-align: center;   
					}
					.obt_coupon_tit {
					   margin-bottom:12px;
					   
					}
					.obt_coupon_tit:after {
					   content:"";
					   display:block;
					   clear:both;
					}
					.obt_coupon_tit ul li {
					   float:left;
					   text-align:left;
                       color: #747474;		
                       font-size: 12px;	
                       line-height: 18px;					   
					}
					.obt_coupon_tit ul li:nth-child(1){
					   margin-right:117px;
					}
					.obt_coupon_tit ul li:nth-child(2){
					   margin-right:252px;
					}
				

					</style>

				</div>
			</div>
			<div class="dash_tab_wrap">
				<ul class="tab_nav">
					<li class="active"><a href="#none">나의 상품평</a></li>
					<li class=""><a href="#none">나의 사진</a></li>
				</ul>
				<div class="tab_cont">
					<ul class="tab_info_count">
                        <!-- 						
                        <li>
							<strong class="cate">사진</strong>
							<em class="count">172</em>
							<span class="rank_tit">사진 중 상위</span>
							<span class="rank_count">12%</span>
						</li>
						<li>
							<strong class="cate">베스트 리뷰</strong>
							<em class="count">36</em>
							<span class="rank_tit">사진 중 상위</span>
							<span class="rank_count">63%</span>
						</li>
						<li>
							<strong class="cate">공감</strong>
							<em class="count">84</em>
							<span class="rank_tit">사진 중 상위</span>
							<span class="rank_count">52%</span>
						</li> -->
						
						<!-- 나의 상품평이 없을 경우 -->
						<li>
							<strong class="cate">상품평</strong>
							<span class="non_rank_tit">등록한 상품평이<br>없습니다.</span>					
						</li>
						<li>
							<strong class="cate">베스트 상품평</strong>
							<span class="non_rank_tit">베스트에 등극한<br>상품평이 없습니다.</span>					
						</li>
						<li>
							<strong class="cate">도움</strong>
							<span class="non_rank_tit">다른 사용자가 상품평을<br>좋아요(썸업)하면 합계가 표시됩니다.</span>					
						</li>												
					</ul>
					<div class="tab_cont_head">
    					<div class="btn_right">
    						<a href="#" class="btn_ btn_x_s3 btn_cp btn_hover_shadow">새로운 상품평 등록</a>
    					</div>
    				</div>
                    <!-- 					
                    <div class="review_box_list">
        				<ul>
        					<li>
        						<div class="review_list_thum">
        							<a href="#"><img src="../img/review_thum_x100.png" alt="" class="thum"></a>
        							<span class="tit">구입한 날짜</span>
        							<em class="cont">2017년 7월 10일</em>
        						</div>
        						<div class="review_list_box">
        							<div class="review_cont">
        								<div class="rating">
        		    						<strong class="star_rating">
        		    							<i class="star_on"></i>
        		    							<i class="star_on"></i>
        		    							<i class="star_on"></i>
        		    							<i class="star_on"></i>
        		    							<i class="star_off"></i>
        		   							</strong>
        		    					</div>
        								<span class="date">1주일 전 구매</span>
        								<p class="cont">
        									구루핏 첫 구매인데 좋네요. 추천한 275사이즈 구매자입니다.
        									다른 신발은 270사이즈를 매번 신었는데 슈포래빗의 사이즈로 구매하니 제 발에 딱 맞고 핏감이 좋네요. 다른 신발은 270사이즈를 매번 신었는데 슈포래빗의 사이즈로 구매하니 제 발에 딱 맞고 핏감이 좋네요. 다른 신발은 270사이즈를 매번 신었는데 슈포래빗의 사이즈로 구매하니 제 발에 딱 맞고…
        								</p>
        								<a href="#" class="cont_more">더 보기</a>
        							</div>
        							<ul class="like">
        								<li><span class="like_btn up">52</span></li>
        								<li><span class="like_btn dw">4</span></li>
        								<li><a href="#" class="report">신고하기</a></li>
        							</ul>
        						</div>
        						<div class="review_list_gauge">
        							<div class="step_gauge">
        								<ul class="gauge_area">
        									<li>
        										<em>길이</em>
        										<div class="gauge">
        											<div class="step_bar">
        												<span class="bar step_04"></span>
        												<span class="step_dot fir"></span>
        												<span class="step_dot sec"></span>
        											</div>
        											<span class="gauge_min">작은편</span>
        											<span class="gauge_max">큰편</span>
        										</div>
        									</li>
        									<li>
        										<em>발 폭</em>
        										<div class="gauge">
        											<div class="step_bar">
        												<span class="bar step_05"></span>
        												<span class="step_dot fir"></span>
        												<span class="step_dot sec"></span>
        											</div>
        											<span class="gauge_min">좁은 편이에요</span>
        											<span class="gauge_max">넉넉해요</span>
        										</div>
        									</li>
        									<li>
        										<em>편안함</em>
        										<div class="gauge">
        											<div class="step_bar">
        												<span class="bar step_01"></span>
        												<span class="step_dot fir"></span>
        												<span class="step_dot sec"></span>
        											</div>
        											<span class="gauge_min">오래 신으면 불편해요</span>
        											<span class="gauge_max">하루 종일 신어도 편해요</span>
        										</div>
        									</li>
        								</ul>
        							</div>
        						</div>
        						<dl class="share icon_share_list">
        							<dt><em>41</em> Shares</dt>
        							<dd><a href="#" class="icon_kakao_x25">KAKAO</a></dd>
        							<dd><a href="#" class="icon_facebook_x23">FACEBOOK</a></dd>
        							<dd><a href="#" class="icon_insta_x22">INSTAGRAM</a></dd>
        						</dl>
        					</li>
        					<li>
        						<div class="review_list_thum">
        							<a href="#"><img src="../img/review_thum_x100.png" alt="" class="thum"></a>
        							<span class="tit">구입한 날짜</span>
        							<em class="cont">2017년 7월 10일</em>
        						</div>
        						<div class="review_list_box">
        							<div class="review_cont">
        								<div class="rating">
        		    						<strong class="star_rating">
        		    							<i class="star_on"></i>
        		    							<i class="star_on"></i>
        		    							<i class="star_on"></i>
        		    							<i class="star_on"></i>
        		    							<i class="star_off"></i>
        		   							</strong>
        		    					</div>
        								<span class="date">1주일 전 구매</span>
        								<p class="cont">
        									구루핏 첫 구매인데 좋네요. 추천한 275사이즈 구매자입니다.
        									다른 신발은 270사이즈를 매번 신었는데 슈포래빗의 사이즈로 구매하니 제 발에 딱 맞고 핏감이 좋네요. 다른 신발은 270사이즈를 매번 신었는데 슈포래빗의 사이즈로 구매하니 제 발에 딱 맞고 핏감이 좋네요. 다른 신발은 270사이즈를 매번 신었는데 슈포래빗의 사이즈로 구매하니 제 발에 딱 맞고…
        								</p>
        								<a href="#" class="cont_more">더 보기</a>
        							</div>
        							<ul class="like">
        								<li><span class="like_btn up">52</span></li>
        								<li><span class="like_btn dw">4</span></li>
        								<li><a href="#" class="report">신고하기</a></li>
        							</ul>
        						</div>
        						<div class="review_list_gauge">
        							<div class="step_gauge">
        								<ul class="gauge_area">
        									<li>
        										<em>길이</em>
        										<div class="gauge">
        											<div class="step_bar">
        												<span class="bar step_04"></span>
        												<span class="step_dot fir"></span>
        												<span class="step_dot sec"></span>
        											</div>
        											<span class="gauge_min">작은편</span>
        											<span class="gauge_max">큰편</span>
        										</div>
        									</li>
        									<li>
        										<em>발 폭</em>
        										<div class="gauge">
        											<div class="step_bar">
        												<span class="bar step_05"></span>
        												<span class="step_dot fir"></span>
        												<span class="step_dot sec"></span>
        											</div>
        											<span class="gauge_min">좁은 편이에요</span>
        											<span class="gauge_max">넉넉해요</span>
        										</div>
        									</li>
        									<li>
        										<em>편안함</em>
        										<div class="gauge">
        											<div class="step_bar">
        												<span class="bar step_01"></span>
        												<span class="step_dot fir"></span>
        												<span class="step_dot sec"></span>
        											</div>
        											<span class="gauge_min">오래 신으면 불편해요</span>
        											<span class="gauge_max">하루 종일 신어도 편해요</span>
        										</div>
        									</li>
        								</ul>
        							</div>
        						</div>
        						<dl class="share icon_share_list">
        							<dt><em>41</em> Shares</dt>
        							<dd><a href="#" class="icon_kakao_x25">KAKAO</a></dd>
        							<dd><a href="#" class="icon_facebook_x23">FACEBOOK</a></dd>
        							<dd><a href="#" class="icon_insta_x22">INSTAGRAM</a></dd>
        						</dl>
        					</li>
        				</ul>
        			</div>
					<div class="tab_cont_foot">
    					<a href="#" class="btn_ btn_x_m1 btn_hover_a">더보기</a>
    				</div> -->
    				<!-- 상품평이 없을떄 -->
    				<div class="null_cont_box ncb_line">
    					<strong class="null_cont_icon tbox_rnd_xng">100xp</strong>
    					<span class="null_cont_tit">상품평을 작성하고,구루핏 사용자 모두와 정보를 공유하세요.</span>
    					<span class="null_cont_msg">
    						구매 후 상품평을 작성하면 경험치 <em>100xp</em>를 받을 수 있습니다.<br>
    						구매 경험치에 따라 경험치 뱃지를 받을 수 있습니다.
    					</span>
    				</div>
				</div>
				<div class="tab_cont">
					<ul class="tab_info_count">
						<li>
							<strong class="cate">사진</strong>
							<em class="count">86</em>
							<span class="rank_tit">사진 중 상위</span>
							<span class="rank_count">12%</span>
						</li>
						<li>
							<strong class="cate">베스트 사진</strong>
							<em class="count">17</em>
							<span class="rank_tit">베스트 사진 중 상위</span>
							<span class="rank_count">63%</span>
						</li>
						<li>
							<strong class="cate">공감</strong>
							<em class="count">59</em>
							<span class="rank_tit">사진 공감 중 상위</span>
							<span class="rank_count">52%</span>
						</li>
					</ul>
					<div class="tab_cont_head">
    					<div class="btn_right">
    						<a href="#" class="btn_ btn_x_s3 btn_cp btn_hover_shadow">새로운 사진 등록</a>
    					</div>
    				</div>
					<div class="hover_thum_list">
						<h4 class="blind">나의 사진 리스트</h4>
						<ul class="thum_list x4">
							<li class="">
								<div class="list">
    								<img src="../img/review_photo_sample.png" alt="" class="thum">
    								<div class="thum_caption">
    									<div class="caption">
        									<a href="#">
        										<strong class="thum_caption_tit">베스트 PIC</strong>
        										<span class="thum_hash_list">
        											<em>#nike</em>
        											<em>#힙아이템</em>
        											<em>#내가산거</em>
        										</span>
        										<span class="like up">52</span>
        										<span class="like dw">4</span>
        									</a>
    									</div>
    								</div>
								</div>
							</li>
							<li class="">
								<div class="list">
    								<img src="../img/review_photo_sample.png" alt="" class="thum">
    								<div class="thum_caption">
    									<div class="caption">
        									<a href="#">
        										<strong class="thum_caption_tit">베스트 PIC</strong>
        										<span class="thum_hash_list">
        											<em>#nike</em>
        											<em>#힙아이템</em>
        											<em>#내가산거</em>
        										</span>
        										<span class="like up">52</span>
        										<span class="like dw">4</span>
        									</a>
    									</div>
    								</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="tab_cont_foot">
    					<a href="#" class="btn_ btn_x_m1 btn_hover_a">더보기</a>
    				</div>
				</div>
			</div>
		</section>
		<script>
    		$(function(){
    			// 결제 정보 탭
    			$(".dash_tab_wrap").sectionDisplay({
    				act : "click",
    				start:0,
    				nav : $('.dash_tab_wrap .tab_nav'),
    				auto: false
    			});
				// FUN 뱃지 커스텀 스크롤 JS
    			$(".fun_badge_list").mCustomScrollbar();
    		});
		</script>
	</article>
</section>
<?php include "../inc/footer.php" ?>
 