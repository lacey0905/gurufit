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
	<article class="sub_content">
		<section class="detail_wrap">
			<div class="detail_head">
				<div class="custom_inner">
					<div class="detail_thum">
						<div class="vertical_swiper">
						    <div class="swiper-container">
						        <div class="swiper-wrapper">
						        	<!-- 상세페이지 슬라이드 큰 이미지 -->
						            <div class="swiper-slide"><div class="slide_img"><img src="../img/detail_sample_big.png" alt="상세이미지"></div></div>
						            <div class="swiper-slide"><div class="slide_img"><img src="../img/detail_sample_big.png" alt="상세이미지"></div></div>
						            <div class="swiper-slide"><div class="slide_img"><img src="../img/detail_sample_big.png" alt="상세이미지"></div></div>
						            <div class="swiper-slide"><div class="slide_img"><img src="../img/detail_sample_big.png" alt="상세이미지"></div></div>
						            <div class="swiper-slide"><div class="slide_img"><img src="../img/detail_sample_big.png" alt="상세이미지"></div></div>
						        </div>
						    </div>
						    <!-- 좌측 썸네일 네비에이터 이미지가 들어갈 장소 확보 -->
					        <div class="swiper-pagination"></div>
					        <!-- 확보 된 네비게이터 엘리먼트에서 자동으로 생성 되는 Span 태그에 아래의 img 태그를 순서대로 Append 함 -->
					        <div class="vertical_swiper_nav">
								<img src="../img/detail_sample_nav.png" alt="상세썸네일">
								<img src="../img/detail_sample_nav.png" alt="상세썸네일">
								<img src="../img/detail_sample_nav.png" alt="상세썸네일">
								<img src="../img/detail_sample_nav.png" alt="상세썸네일">
								<img src="../img/detail_sample_nav.png" alt="상세썸네일">
					        </div>
						    <!-- Swiper JS Plugin -->
						    <!-- 상세페이지 슬라이드 구현 -->
						    <script>
						    $(function(){

								// 작은 이미지를 담을 배열
								var m_thumArr = new Array();
								var m_nav = $(".vertical_swiper_nav");

								// 작은 이미지를 찾아서 배열에 담아 둠
								for(var i=0; i < m_nav.find("img").length; i++){
									m_thumArr.push(m_nav.find("img").eq(i).attr("src"));
								}

							    // 슬라이더 생성
							    var vertical_swiper = new Swiper('.vertical_swiper .swiper-container', {
							        pagination: '.vertical_swiper .swiper-pagination',
							        direction: 'vertical',
							        slidesPerView: 1,
							        paginationClickable: true,
							        spaceBetween: 30,
							        mousewheelControl: true,
							        loop:true,
							        //freeMode: true,
							        paginationBulletRender: function (swiper, index, className) {
								        // Pager가 생성 될 때 배열의 이미지를 포함아여 생성 함
							            return '<span class="' + className + '"><img src="' + m_thumArr[index] + '" alt=""></span>';
							        }
							    });

								
							    
							    
						    });
						    </script>
						</div>
					</div>
					<div class="detail_cont">
						<h2>
							<span class="brand"><a href="#"><img src="../img/brand_sample_x44.png" alt="Nike"></a></span>
							<strong class="name">NIKE Metcon DSX Flyknit</strong>
						</h2>
						<dl class="share">
							<dt><em>41</em> Shares</dt>
							<dd><a href="#" class="icon_kakao_x20">KAKAO</a></dd>
							<dd><a href="#" class="icon_facebook_x18">FACEBOOK</a></dd>
							<dd><a href="#" class="icon_insta_x18">INSTAGRAM</a></dd>
						</dl>
						<ul>
							<li class="rating">
								<strong class="star_rating">
		   							<i class="star_on"></i>
		   							<i class="star_on"></i>
		   							<i class="star_on"></i>
		   							<i class="star_on"></i>
		   							<i class="star_off"></i>
								</strong>
								<span class="cnt">(1,234)</span>
							</li>
							<li class="price">
								<strong>89,100원</strong>
								<del>99,000원</del>
							</li>
						</ul>
						<dl class="opt">
							<dt class="opt_tit">
								<em>컬러 : BLACK/RED</em>
							</dt>
							<dd class="opt_cont">
								<ul class="prd_sml_list">
									<li class="active"><a href="#"><img src="../img/prd_sml_sample.png" alt="나이키"></a></li>
									<li><a href="#"><img src="../img/prd_sml_sample.png" alt="나이키"></a></li>
									<li><a href="#"><img src="../img/prd_sml_sample.png" alt="나이키"></a></li>
									<li><a href="#"><img src="../img/prd_sml_sample.png" alt="나이키"></a></li>
									<li><a href="#"><img src="../img/prd_sml_sample.png" alt="나이키"></a></li>
								</ul>
							</dd>
							<dt class="opt_tit">
								<em>사이즈</em>
								<span class="msg">김하영님에게 <strong>270</strong>사이즈 추천</span>
							</dt>
							<dd class="opt_cont">
								<div class="check_opt_box">
									<ul class="x8">
										<li class="active"><a href="#">230</a></li>
										<li><a href="#">235</a></li>
										<li><a href="#">240</a></li>
										<li><a href="#">245</a></li>
										<li><a href="#">250</a></li>
										<li class="dis"><a href="#">255</a></li>
										<li><a href="#">260</a></li>
										<li><a href="#">265</a></li>
										<li><a href="#">270</a></li>
										<li class="dis"><a href="#">275</a></li>
										<li><a href="#">280</a></li>
										<li><a href="#">285</a></li>
										<li><a href="#">290</a></li>
										<li class="dis"><a href="#">295</a></li>
										<li class="dis"><a href="#">300</a></li>
										<li class="dis"><a href="#">305</a></li>
									</ul>
								</div>
							</dd>
						</dl>
						<div class="detail_btn">
							<a href="#" class="btn_myList"><i class="fa fa-heart-o" aria-hidden="true"></i>나의 리스트에 담기</a>
							<a href="#" class="btn_active">장바구니</a>
						</div>
						<div class="info_icon_area">
							<ul>
								<li>
									<strong>Product<br>Info</strong>
								</li>
								<li>
									<img src="../img/detail_icon_01.png" alt="">
									<span>중립</span>
								</li>
								<li>
									<img src="../img/detail_icon_02.png" alt="">
									<span>매우 푹신함</span>
								</li>
								<li>
									<img src="../img/detail_icon_03.png" alt="">
									<span>매우 가벼움</span>
								</li>
								<li>
									<img src="../img/detail_icon_04.png" alt="">
									<span>폴리에스터</span>
								</li>
								<li>
									<img src="../img/detail_icon_05.png" alt="">
									<span>스니커즈</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="share_your_gurufit">
				<div class="custom_inner share_head">
					<h2>Share Your gurufit</h2>
					<ul class="hash_list">
						<li><a href="#">#캐주얼 패션</a></li>
						<li><a href="#">#수트 패션</a></li>
						<li><a href="#">#비즈니스 패션</a></li>
					</ul>
					<a href="#" class="btn_normal b_size_x140">사전등록하기</a>
				</div>
				<ul class="photo_list">
					<li><a href="#"><img src="../img/true-1.png" alt=""></a></li>
					<li><a href="#"><img src="../img/true-2.png" alt=""></a></li>
					<li><a href="#"><img src="../img/true-3.png" alt=""></a></li>
					<li><a href="#"><img src="../img/true-1.png" alt=""></a></li>
					<li><a href="#"><img src="../img/true-4.png" alt=""></a></li>
					<li><a href="#"><img src="../img/true-2.png" alt=""></a></li>
					<li><a href="#"><img src="../img/true-2.png" alt=""></a></li>
					<li><a href="#"><img src="../img/true-2.png" alt=""></a></li>
					<li><a href="#"><img src="../img/true-2.png" alt=""></a></li>
				</ul>
			</div>
			<div id="productInfo">
				<nav class="detail_nav">
					<div class="custom_inner">
						<ul>
							<li class="active"><a href="#">상품 정보</a></li>
							<li><a href="#">구매자 리뷰(11)</a></li>
							<li><a href="#">연관 상품</a></li>
							<li><a href="#">연관 컨텐츠</a></li>
						</ul>
						<a href="#" class="nav_btn btn_normal b_size_x140">상품문의 하기</a>
					</div>
				</nav>
				<div class="custom_inner">
					<h3>NIKE Metcon DSX Flyknit</h3>
					<p>
						93년도의 아이코닉한 러닝화와 엣지 있는 모던한 스타일이 결합하여 신선한 디자인을 선보이는 튜블라 시리즈입니다.<br>
						다이아몬드 패턴 디테일의 3D 투톤 멜랑주 니트 갑피가 눈을 사로잡는 룩을 연출합니다.<br>
						대비색상 스티치가 돋보이는 부리토 설포가 편안하게 발을 감싸면서 꼭 맞는 핏을 제공합니다. EVA 미드솔이 하루 종일 지속되는 가벼운 쿠셔닝을 전달합니다.
					</p>
					<ul>
						<li>엣지 있는 투톤 니트와 함께 재탄생한 튜블라 시리즈</li>
						<li>투톤 플랫 니트 갑피</li>
						<li>인체공학적 디자인으로 꼭 맞는 핏을 선사하는 부리토 설포; 반사소재 스티치 디테일</li>
						<li>편안한 착용감의 안감 소재</li>
						<li>경량의 쿠셔닝을 제공하는 EVA 미드솔</li>
						<li>미드솔의 고무 패드</li>
						<li>인체공학적 디자인으로 꼭 맞는 핏을 선사하는 부리토 설포; 반사소재 스티치 디테일</li>
						<li>편안한 착용감의 안감 소재</li>
					</ul>
					
					<div class="product_spec_area">
						<h4>상품스팩</h4>						
						<table class="product_spec">
							<tr>
								<td>
									<ul>
										<li>내전</li>
										<li>쿠셔닝 타입</li>
										<li>무게</li>
										<li>갑피 소재</li>
										<li class="text_right">안감</li>
										<li>밑창인솔</li>
										<li class="text_right">미드솔</li>
										<li class="text_right">아웃솔</li>
										<li>굽 높이</li>
										<li>힐 유형</li>
										<li>부츠 목 높이</li>
										<li class="text_right">통 둘레</li>
										<li>기능</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>착화 환경</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
										<li>&nbsp;</li>
									</ul>
								</td>
								<td>
									<ul>
										<li><img src="./img/product_spec.png" alt="#"></li>
										<li><img src="" alt="#"></li>
										<li><img src="" alt="#"></li>
										<li><img src="" alt="#"></li>
										<li><img src="" alt="#"></li>
										<li><img src="" alt="#"></li>
										<li><img src="" alt="#"></li>
										<li><img src="" alt="#"></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
										<li><img src="" alt=""></li>
									</ul>
								</td>
								<td>
									<ul>
										<li>과내전-내전</li>
										<li>고탄성</li>
										<li>매우 가벼움 283g</li>
										<li>폴리에스터-메쉬</li>
										<li>직물</li>
										<li>메모리폼</li>
										<li>Boost®</li>
										<li>EVA</li>
										<li>보통  3.2cm</li>
										<li>스틸레토</li>
										<li>종아리 14cm</li>
										<li>매우 좁음 26cm</li>
										<li>미끄럼방지</li>
										<li>발수</li>
										<li>유연성</li>
										<li>통기성</li>
										<li>항균</li>
										<li>무봉제</li>
										<li>방수</li>
										<li>캐쥬얼</li>
										<li>아웃도어</li>
										<li>등산</li>
										<li>비지니스</li>
										<li>라이프스타일</li>
										<li>바다</li>
										<li>격식있는 자리</li>
										<li>눈</li>
										<li>비</li>
									</ul>
								</td>
							</tr>				
						</table>
						<dl class="product_spec_brand">
							<dt>브랜드</dt>
							<dd><img src="" alt="#"></dd>
							<dt>모델넘버</dt>
							<dd>730SPW0020-DB4</dd>
							<dt>제조사</dt>
							<dd>FILA코리아</dd>
							<dt>수입사</dt>
							<dd>(주)화승</dd>
							<dt>원산지</dt>
							<dd>대한민국</dd>
							<dt>제조국</dt>
							<dd>중국</dd>
							<dt>출시시즌</dt>
							<dd>2017S(여름)</dd>
						</dl>							
					</div>
					
					<div class="test">
					<h3>소재별 취급 주의 사항</h3>
					<p>
						천연가죽 - 젖었을 때는 직사일광 또는 불로 말리지 말고 그늘진 곳에서 건조시키세요. 오염시 부드러운 솔로 닦고, 슈크리너를 사용하세요. 적정한 온도와 습도에서 보관하는 것이 좋습니다.
						섬유· 합성가죽 - 젖었을 때는 그늘진 곳에서 건조시키세요. 기름기가 있는 장소에서 사용을 피하세요. 불옆에 놓으면 수축 또는 변형이 발생할 수 있습니다. 표면이 오염되면 비눗물을 적신 천을 사용해 닦아내세요. 구두약과 같은 가죽용품을 사용할 필요가 없습니다.
					</p>
					<p>
						신발 뒤꿈치를 꺾어 신지 마세요. 제품의 수명 연장을 위해 사용 용도를 주의해 주십시오.
						제품 이상으로 인한 피해보상 또는 수선을 원하실 때는 1:1문의 후 구루핏으로 보내주세요.
						수선비가 발생할 수 있습니다.
						세탁 등 소비자 부주의로 인한 제품 훼손 및 변형, 품질 보증기간(6개월) 경과한 제품의 품질 이상에 대해서는 보상의 책임을 지지않습니다. 수선이 가능한 경우 실비로 수선하여 드립니다.
					</p>
					</div>
				</div>
			</div>
			<div id="productReview">
				<nav class="detail_nav">
					<div class="custom_inner">
						<ul>
							<li class="active"><a href="#">상품 정보</a></li>
							<li><a href="#">구매자 리뷰(11)</a></li>
							<li><a href="#">연관 상품</a></li>
							<li><a href="#">연관 컨텐츠</a></li>
						</ul>
						<a href="#" class="nav_btn btn_normal b_size_x140">상품문의 하기</a>
					</div>
				</nav>
				<div class="custom_inner">
					<h3>리뷰 요약</h3>
					<div class="double_col_box">
						<div class="col_box col_left">
							<div class="asset_review_count">
								<div class="count_area">
									<strong class="count">4.6 <em>/</em> 5</strong>
									<div class="rating">
			    						<strong class="star_rating">
			    							<i class="star_on"></i>
			    							<i class="star_on"></i>
			    							<i class="star_on"></i>
			    							<i class="star_on"></i>
			    							<i class="star_off"></i>
			   							</strong>
			    					</div>
			    					<span><em>상품 만족도</em>1032개 / 리뷰 320개</span>
		    					</div>
		    					<div class="rating_gauge">
		    						<ul>
		    							<li>
		    								<strong class="title">5별점</strong>
		    								<div class="gauge"><span style="width:61%;"></span></div>
		    								<em class="count">61% (263)</em>
		    							</li>
		    							<li>
		    								<strong class="title">4별점</strong>
		    								<div class="gauge"><span style="width:18%;"></span></div>
		    								<em class="count">18% (37)</em>
		    							</li>
		    							<li>
		    								<strong class="title">3별점</strong>
		    								<div class="gauge"><span style="width:14%;"></span></div>
		    								<em class="count">14% (21)</em>
		    							</li>
		    							<li>
		    								<strong class="title">2별점</strong>
		    								<div class="gauge"><span style="width:13%;"></span></div>
		    								<em class="count">3% (19)</em>
		    							</li>
		    							<li>
		    								<strong class="title">1별점</strong>
		    								<div class="gauge"><span style="width:4%;"></span></div>
		    								<em class="count">4% (26)</em>
		    							</li>
		    						</ul>
								</div>
							</div>
						</div>
						<div id="reviewBestGauge" class="col_box col_right">
							<div class="step_gauge">
								<strong class="title">착화감 평가</strong>
								<ul class="gauge_area">
									<li>
										<em>길이</em>
										<div class="gauge">
											<div class="step_bar">
												<span class="bar step_01"></span>
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
												<span class="bar step_02"></span>
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
												<span class="bar step_03"></span>
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
					</div>
					<h3>가장 도움이 된 리뷰</h3>
					<div class="double_col_box">
						<div class="col_box col_left">
							<div class="review_box_a">
								<h4>긍정적 리뷰</h4>
    							<dl>
    								<dt>
    									<img src="../img/photo-1.png" alt="레벨 1">
    									<strong>
    										단호박 정식
    										<span>Silver I</span>
    									</strong>
    								</dt>
    								<dd>
    									<div class="rating">
    			    						<strong class="star_rating star_mid">
    			    							<i class="star_on"></i>
    			    							<i class="star_on"></i>
    			    							<i class="star_on"></i>
    			    							<i class="star_on"></i>
    			    							<i class="star_off"></i>
    			   							</strong>
    			    					</div>
    									<strong class="subject">신발이 아주 편하고 좋아요</strong>
    									<span class="date">1주일 전 구매</span>
    									<p class="cont">
    										슈포래빗에서 추천한 275사이즈 구매자입니다.
    										다른 신발은 270사이즈를 매번 신었는데 슈포래빗의 사이즈로 딱 맞고 핏감이 좋네요.
    										<a href="#" class="cont_more">더보기</a>
    									</p>
    									<span class="like"><em>52</em>명이 도움을 받았다고 평가했습니다.</span>
    									<a href="#" class="more">+ 리뷰 더보기 (28)</a>
    								</dd>
    							</dl>
							</div>
						</div>
						<div class="col_box col_right">
							<div class="review_box_a">
								<h4>비판적 리뷰</h4>
    							<dl>
    								<dt>
    									<img src="../img/photo-1.png" alt="레벨 1">
    									<strong>
    										단호박 정식
    										<span>Silver I</span>
    									</strong>
    								</dt>
    								<dd>
    									<div class="rating">
    			    						<strong class="star_rating star_mid">
    			    							<i class="star_on"></i>
    			    							<i class="star_on"></i>
    			    							<i class="star_off"></i>
    			    							<i class="star_off"></i>
    			    							<i class="star_off"></i>
    			   							</strong>
    			    					</div>
    									<strong class="subject">마음에 안드네요…</strong>
    									<span class="date">1주일 전 구매</span>
    									<p class="cont">
    										슈포래빗에서 추천한 275사이즈 구매자입니다.
    										다른 신발은 270사이즈를 매번 신었는데 슈포래빗의 사이즈로 딱 맞고 핏감이 좋네요.
    										<a href="#" class="cont_more">더보기</a>
    									</p>
    									<span class="like"><em>52</em>명이 도움을 받았다고 평가했습니다.</span>
    									<a href="#" class="more">+ 리뷰 더보기 (28)</a>
    								</dd>
    							</dl>
							</div>
						</div>
					</div>
					<div class="select_search_bar">
						<form action="">
						<fieldset>
    						<dl class="select">
    							<dt class="tit">리뷰 보기 정렬</dt>
    							<dd class="sort_area">
    								<div class="sel_custom sel_nm_box sort_select">
        								<select>
        									<option>모든 별점 보기</option>
        									<option></option>
        								</select>
    								</div>
    								<div class="check_sort custom_cbox">
    									<input type="checkbox" id="buyUser" class="gray">
    									<label for="buyUser">구매 고객 리뷰만 보기</label>
    								</div>
    								<div class="check_sort custom_cbox">
    									<input type="checkbox" id="shoe" class="white">
    									<label for="shoe">슈몰리에 리뷰만 보기</label>
    								</div>
    							</dd>
    							<dd class="inp_search_a search_sort">
    								<input type="text" class="search_inp">
    								<input type="submit" class="search_btn" value="&#xE8B6">
    							</dd>
    						</dl>
						</fieldset>
						</form>
					</div>
					<h3>공감 리뷰</h3>
					<div class="review_box_list">
						<ul>
							<li>
								<div class="review_list_head">
									<strong>
										<img src="../img/review-1.png" alt="">
										<span>단호박정식</span>
										<em>Silver II</em>
									</strong>
									<ul class="count_list">
										<li>리뷰 11개</li>
										<li>사진 10장</li>
										<li>도움 평가 324개</li>
									</ul>
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
						<div class="review_list_foot">
							<a href="#" class="review_more">공감 리뷰 더 보기</a>
						</div>
					</div>
					<h3>최신 리뷰</h3>
					<div class="review_box_list">
						<ul>
							<li>
								<div class="review_list_head">
									<strong>
										<img src="../img/review-1.png" alt="">
										<span>단호박정식</span>
										<em>Silver II</em>
									</strong>
									<ul class="count_list">
										<li>리뷰 11개</li>
										<li>사진 10장</li>
										<li>도움 평가 324개</li>
									</ul>
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
						<div class="review_list_foot">
							<a href="#" class="review_more">최신 리뷰 더 보기</a>
						</div>
					</div>
				</div>
			</div>
			<div id="relatedProduct">
				<nav class="detail_nav">
					<div class="custom_inner">
						<ul>
							<li><a href="#">상품 정보</a></li>
							<li><a href="#">구매자 리뷰(11)</a></li>
							<li class="active"><a href="#">연관 상품</a></li>
							<li><a href="#">연관 컨텐츠</a></li>
						</ul>
						<a href="#" class="nav_btn btn_normal b_size_x140">연관상품 더보기</a>
					</div>
				</nav>
				<div class="custom_inner">
					<article class="prd_type_b">
        				<ul class="x4">
        					<li class="">
        						<figure>
        	    					<span class="thum">
        	    						<a href="#" class="my_list_btn"><i class="fa fa-heart-o" aria-hidden="true"></i>나의 리스트에 담기</a>
        	    						<a href="http://lacey.dothome.co.kr/yeseo/gurufit/product/store_detail.php">
        	    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
            							</a>
           							</span>
        	    					<div class="rating">
        	    						<strong class="star_rating">
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	    						<span class="cnt">(29)</span>
        	    						<span class="sale">Sale 40%</span>
        	    					</div>
        	    					<figcaption>
        	    						<span class="subject">NIKE FREE 5.0</span>
        	    						<span class="price">
        	    							<strong class="sell_price">89,100<em>원</em></strong>
        	    							<del class="customer_price">99,000원</del>
        	    						</span>
        	    					</figcaption>
        						</figure>
        					</li>
        				</ul>
        			</article>
				</div>
			</div>
			<div id="relatedProduct">
				<nav class="detail_nav">
					<div class="custom_inner">
						<ul>
							<li><a href="#">상품 정보</a></li>
							<li><a href="#">구매자 리뷰(11)</a></li>
							<li><a href="#">연관 상품</a></li>
							<li class="active"><a href="#">연관 컨텐츠</a></li>
						</ul>
						<a href="#" class="nav_btn btn_normal b_size_x140">연관컨텐츠 더보기</a>
					</div>
				</nav>
				<div class="custom_inner">
					<article class="custom_inner prd_type_a">
                		<ul class="x4">
                			<li>
                				<a href="#">
                					<figure>
                						<img src="../img/prd_sample.png" alt="샘플상품">
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
                	</article>
				</div>
			</div>
		</section>
	</article>
</section>
<?php include "../inc/footer.php" ?>
