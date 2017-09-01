<style>
	.user_profile_photo h4 {
		position: relative;
		font-weight: bold;
		font-size: 35px;
		text-align: center;
		color: #000;
		line-height: 55px;
		padding: 30px 0px;
		margin-bottom: 30px;
	}
	.user_profile_photo h4:after {
		content: " ";
		position: absolute;
		left: 50%;
		bottom: 0;
		width: 1px;
		height: 16px;
		border-left: solid 1px #979797;					
	}
	.user_profile_photo h4 span {
		font-weight: normal;
		font-size: 35px;
	}				
	.follow_guru_wrapper {
		margin-top:22px;
		margin-bottom:22px;
	}
	.follow_guru_wrapper:after {
		content:"";
		display:block;
		clear:both;
	}
	.follow_guru_wrapper ul li {
		float:left;
	}
	.follow_guru_wrapper .follow_photo img{
		height: 68px;	
		width: 68px;	
		transform: scaleX(-1);	
		border-radius: 4px;
	}
	.follow_guru_wrapper .follow_txt {
		margin-left:10px;					
	}
	.follow_guru_wrapper .follow_txt strong {
		color: #000000;		
		font-size: 15px;	
		line-height: 24px;
		margin-bottom: 3px;				
	}
	.follow_guru_wrapper .follow_txt p {
		color: #9B9B9B;	
		font-size: 13px;	
		line-height: 18px;					
	}
	.follow_guru_wrapper .follow_btn {
		margin-left:16px;
		margin-top:20px;
	}
	/*버튼을 만들어야 해요...*/
	.follow_guru_wrapper .follow_btn a {
		width:81px;
		height:30px;
		border:1px solid #8F8F8F;
		border-radius: 3px;
		padding:5px 22px 6px 23px;
		
		color: #8F8F8F;	
		font-size: 13px;	
		font-weight: 300;	
		line-height: 19px;	
		text-align: center;					
	}
	.follow_guru_wrapper .follow_btn a:hover {
		border: solid 1px #7053ff;
	}
</style>
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
			<div class="user_profile_photo">
				<h4>언니네 이발소<span>님의 프로필</span></h4>
			</div>
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
							<a href="#" class="badge_more">경험치 뱃지 미션보기</a>
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
					<div class="fun_badge_list">
						<ul>
							<li class="text_b"></li>
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
						</ul>
					</div>
				</div>				
				<div class="dash_sec dash_x3 ">
					<h3 class="dash_tit">팔로우 중인 구루</h3>
					<div class="follow_guru_wrapper">
						<ul>
							<li class="follow_photo"><img src="../img/guru_follow.png" alt="#"></li>
							<li class="follow_txt">
								<strong>Heather Welch</strong>
								<p>
								등록 콘텐츠 1,234개<br>
								팔로워 234명	
								</p>
							</li>
							<li class="follow_btn"><a href="#">팔로우</a></li>
						</ul>
					</div>
					<div class="follow_guru_wrapper">
						<ul>
							<li class="follow_photo"><img src="../img/guru_follow.png" alt="#"></li>
							<li class="follow_txt">
								<strong>Heather Welch</strong>
								<p>
								등록 콘텐츠 1,234개<br>
								팔로워 234명	
								</p>
							</li>
							<li class="follow_btn"><a href="#">팔로우</a></li>
						</ul>
					</div>
					<div class="follow_guru_wrapper">
						<ul>
							<li class="follow_photo"><img src="../img/guru_follow.png" alt="#"></li>
							<li class="follow_txt">
								<strong>Heather Welch</strong>
								<p>
								등록 콘텐츠 1,234개<br>
								팔로워 234명	
								</p>
							</li>
							<li class="follow_btn"><a href="#">팔로우</a></li>
						</ul>
					</div>
					<div class="follow_guru_wrapper">
						<ul>
							<li class="follow_photo"><img src="../img/guru_follow.png" alt="#"></li>
							<li class="follow_txt">
								<strong>Heather Welch</strong>
								<p>
								등록 콘텐츠 1,234개<br>
								팔로워 234명	
								</p>
							</li>
							<li class="follow_btn"><a href="#">팔로우</a></li>
						</ul>
					</div>
					<div class="follow_guru_wrapper">
						<ul>
							<li class="follow_photo"><img src="../img/guru_follow.png" alt="#"></li>
							<li class="follow_txt">
								<strong>Heather Welch</strong>
								<p>
								등록 콘텐츠 1,234개<br>
								팔로워 234명	
								</p>
							</li>
							<li class="follow_btn"><a href="#">팔로우</a></li>
						</ul>
					</div>																					
				</div>	
			</div>
			<div class="dash_tab_wrap">
				<ul class="tab_nav">
					<li class="active"><a href="#none">리뷰</a></li>
					<li class=""><a href="#none">사진</a></li>
				</ul>
				<div class="tab_cont">
					<ul class="tab_info_count">
						<li>
							<strong class="cate">상품평</strong>
							<em class="count">172</em>
							<span class="rank_tit">전체 회원 중 상위</span>
							<span class="rank_count">12%</span>
						</li>
						<li>
							<strong class="cate">베스트 상품평</strong>
							<em class="count">36</em>
							<span class="rank_tit">전체 회원 중 상위</span>
							<span class="rank_count">63%</span>
						</li>
						<li>
							<strong class="cate">도움</strong>
							<em class="count">84</em>
							<span class="rank_tit">전체 회원 중 상위</span>
							<span class="rank_count">52%</span>
						</li>
					</ul>
					<div class="tab_cont_head">
    				</div>
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
        								<li><a href="#" class="like_btn up">52</a></li>
        								<li><a href="#" class="like_btn dw">4</a></li>
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
        								<li><a href="#" class="like_btn up">52</a></li>
        								<li><a href="#" class="like_btn dw">4</a></li>
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
        					</li>
        				</ul>
        			</div>
					<div class="tab_cont_foot">
    					<a href="#" class="btn_ btn_x_m1 btn_hover_a">더보기</a>
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
							<strong class="cate">도움</strong>
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
							<li>
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
				<div class="tab_cont">
					<ul class="tab_info_count">
						<li>
							<strong class="cate">구매 상품 공유</strong>
							<em class="count">172</em>
							<span class="rank_tit">리뷰어 중 상위</span>
							<span class="rank_count">12%</span>
						</li>
						<li>
							<strong class="cate">추천 링크 가입</strong>
							<em class="count">36</em>
							<span class="rank_tit">베스트 리뷰어 중 상위</span>
							<span class="rank_count">63%</span>
						</li>
						<li>
							<strong class="cate">공유 링크 방문</strong>
							<em class="count">84</em>
							<span class="rank_tit">리뷰 공감 중 상위</span>
							<span class="rank_count">52%</span>
						</li>
					</ul>
					<div class="tab_cont_head">
    					<div class="btn_right">
    						<a href="#" class="btn_ btn_x_s3 btn_cp btn_hover_shadow">새로운 소셜 공유</a>
    					</div>
    				</div>
					<div class="thum_board_list">
						<ul>
							<li>
								<figure>
									<a href="#" class="thum"><img src="../img/review_thum_x100.png" alt=""></a>
									<figcaption>
										<div class="cont_head">
											<span class="date">2017년 8월 3일에 구입</span>
											<span class="share">2017년 8월 4일 공유</span>
										</div>
										<strong class="subject">
											<em>NIKE Flyknit Free 5.0</em> 상품 정보를 <a href="#" class="sns_link">페이스북</a>에 공유 하였습니다.
										</strong>
									</figcaption>
								</figure>
							</li>
							<li>
								<figure>
									<a href="#" class="thum"><img src="../img/review_thum_x100.png" alt=""></a>
									<figcaption>
										<div class="cont_head">
											<span class="review">2017년 8월 3일에 구입</span>
											<span class="share">2017년 8월 4일 공유</span>
										</div>
										<strong class="subject">
											<em>NIKE Flyknit Free 5.0</em> 상품 정보를 <a href="#" class="sns_link">페이스북</a>에 공유 하였습니다.
										</strong>
									</figcaption>
								</figure>
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
			// 결제 정보 탭
    		$(function(){
    			$(".dash_tab_wrap").sectionDisplay({
    				act : "click",
    				start:0,
    				nav : $('.dash_tab_wrap .tab_nav'),
    				auto: false
    			});  			
    		});
		</script>
	</article>
</section>
<?php include "../inc/footer.php" ?>