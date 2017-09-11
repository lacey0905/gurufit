<?php include "../inc/header.php" ?>
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
	<article class="sub_content custom_inner on_side">
		<section class="sub_head">
			<h2 class="s_lar">Store</h2>
			<div class="tab_active_type">
				<!-- 카테고리 리스트 -->
				<ul>
					<li class="active"><a href="#">스포츠 (179)</a></li>
					<li><a href="#">스니커즈 (179)</a></li>
					<li><a href="#">옥스포드 (179)</a></li>
					<li><a href="#">로퍼 (179)</a></li>
					<li><a href="#">부츠 (179)</a></li>
					<li><a href="#">슬립온 (179)</a></li>
					<li><a href="#">샌들 (179)</a></li>
				</ul>
			</div>
			<!-- 검색 키워드 -->
			<div class="search_wrap">
    			<dl class="search_result result_tag">
    				<dt>총 <strong class="search_count">3,517</strong>개의 검색 결과가 있습니다.</dt>
    				<dd class="tag_bg_a del"><a href="#">KimHayoung</a></dd>
    				<dd class="tag_bg_b del"><a href="#">주황</a></dd>
    				<dd class="tag_bg_b del"><a href="#">Nike</a></dd>
    				<dd class="tag_bg_b del"><a href="#">스포츠</a></dd>
    			</dl>
			</div>
		</section>
		<?php include "../inc/prd_side.php" ?>
		<section class="content_area">
			<div class="sl_sort_attribute">
    			<dl class="select_sort">
    				<dt>
    					<img src="../img/sort_pop_ico.png">
    					정렬 기준
            			<div class="mz_sort_pop_wrapper">    					
                			<div class="mz_sort_pop_container">    
                				<div class="mz_sort_pop">
                					<h4>정렬 속성</h4>
                					<dl>
                						<dt>개인 추천 순</dt>
                						<dd>
                						고객 정보(성별,연령,구매내역 등); 사이트 이용 정<br>
                						보(검색,조회,구매,평가,공유 등); 구루핏이 보유하<br>
                						고 있는 '컨텐츠 정보'를 기반으로 고객의 관심사를<br>
                						분석하여 관련성이 높은 콘텐츠 순으로 정렬됩니다.	
                						</dd>
                						<dt>신상품 순</dt>
                						<dd>상품 출시 순으로 정렬 됩니다.</dd>
                						<dt>낮은 가격 순</dt>
                						<dd>가격이 낮은 순으로 정렬 됩니다.</dd>
                						<dt>높은 가격 순</dt>
                						<dd>가격이 높은 순으로 정렬 됩니다.</dd>
                						<dt>고객 평점 높은 순</dt>
                						<dd>평점이 높은 순으로 정렬 됩니다.</dd>
                						<dt>인기 상품 순</dt>
                						<dd>하트 리스트에 많이 담긴 상품 순으로 정렬 됩니다.</dd>
                					</dl>
                				</div>
                			</div>	
            			</div>    					
    				</dt>
    				<dd>
    					<div class="sel_custom sel_nm_box sel_mid">
    						<select>
    							<option>추천 제품 순</option>
    							<option>최신 제품 순</option>
    							<option>제품 이름 순</option>
    							<option>제품 브랜드 순</option>
    						</select>
    					</div>
    				</dd>
    			</dl>
			</div>
			<!-- 진열 영역 -->
			<article class="custom_prd prd_type_b">
				<ul class="x4 opt_pop">
					<!-- [active] = 옵션 정보가 켜져 있는 상태 -->
					<li class="active">
						<figure>
	    					<span class="thum">
	    						<strong class="icon_best">추천</strong>
	    						<a href="#" class="btn_compare">
	    							<span class="box"><em class="msg">비교하기</em></span>
	    						</a>
	    						<a href="#">
	    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    							</a>
   							</span>
   							<!-- 별점 리스트  [star_on] 노란색 별, [star_off] 회색별 -->
	    					<div class="rating">
	    						<span class="sale">Sale 40%</span>
	    						<strong class="star_rating">
	    							<i class="star_on"></i>
	    							<i class="star_on"></i>
	    							<i class="star_on"></i>
	    							<i class="star_on"></i>
	    							<i class="star_off"></i>
	   							</strong>
	    						<span class="cnt">(29)</span>
	    						<span class="like">74</span>
	    					</div>
	    					<figcaption>
	    						<span class="subject">NIKE FREE 5.0</span>
	    						<span class="price">
	    							<strong class="sell_price">89,100<em>원</em></strong>
	    							<del class="customer_price">99,000원</del>
	    						</span>
	    					</figcaption>
	    					<div class="open_detail">
    							<div class="detial_color_list">
    								<!-- 컬러 리스트  -->
    								<ul>
    									<li class="c_black">Black</li>
    									<li class="c_blue">Blue</li>
    									<li class="c_red">Red</li>
    									<li class="c_yellow">Yellow</li>
    									<li class="c_ivory">White</li>
    									<li class="c_white">White</li>
    									<li class="c_white">White</li>
    									<li class="c_white">White</li>
    									<li class="c_white">White</li>
    									<li class="c_white">White</li>
    								</ul>
    							</div>
    							<div class="detial_opt_list">
    								<!-- 
    								    사이즈 리스트 
    								  [active] = 선택 된 사이즈
    								  [dis] = 재고가 없는 사이즈        
    								-->
									<ul class="check_opt_box">
										<li class=""><a href="#">230</a></li>
										<li><a href="#">235</a></li>
										<li class="dis"><a href="#">240</a></li>
										<li class="dis"><a href="#">245</a></li>
										<li><a href="#">250</a></li>
										<li><a href="#">255</a></li>
										<li><a href="#">260</a></li>
										<li class=""><a href="#">265</a></li>
										<li><a href="#">270</a></li>
										<li><a href="#">275</a></li>
										<li><a href="#">280</a></li>
										<li><a href="#">285</a></li>
										<li class=""><a href="#">290</a></li>
										<li><a href="#">295</a></li>
										<li><a href="#">300</a></li>
										<li><a href="#">305</a></li>
									</ul>
    							</div>
    						</div>
						</figure>
					</li>
					<li class="">
						<figure>
	    					<span class="thum">
	    						<strong class="icon_best">추천</strong>
	    						<a href="#" class="btn_compare">
	    							<span class="box"><em class="msg">비교하기</em></span>
	    						</a>
	    						<a href="#">
	    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    							</a>
   							</span>
   							<!-- 별점 리스트  [star_on] 노란색 별, [star_off] 회색별 -->
	    					<div class="rating">
	    						<span class="sale">Sale 40%</span>
	    						<strong class="star_rating">
	    							<i class="star_on"></i>
	    							<i class="star_on"></i>
	    							<i class="star_on"></i>
	    							<i class="star_on"></i>
	    							<i class="star_off"></i>
	   							</strong>
	    						<span class="cnt">(29)</span>
	    						<span class="like">74</span>
	    					</div>
	    					<figcaption>
	    						<span class="subject">NIKE FREE 5.0</span>
	    						<span class="price">
	    							<strong class="sell_price">89,100<em>원</em></strong>
	    							<del class="customer_price">99,000원</del>
	    						</span>
	    					</figcaption>
	    					<div class="open_detail">
    							<div class="detial_color_list">
    								<!-- 컬러 리스트  -->
    								<ul>
    									<li class="c_black">Black</li>
    									<li class="c_blue">Blue</li>
    									<li class="c_red">Red</li>
    									<li class="c_yellow">Yellow</li>
    									<li class="c_white">White</li>
    								</ul>
    							</div>
    							<div class="detial_opt_list">
    								<!-- 
    								    사이즈 리스트 
    								  [active] = 선택 된 사이즈
    								  [dis] = 재고가 없는 사이즈        
    								-->
									<ul class="check_opt_box">
										<li class=""><a href="#">230</a></li>
										<li><a href="#">235</a></li>
										<li class="dis"><a href="#">240</a></li>
										<li class="dis"><a href="#">245</a></li>
										<li><a href="#">250</a></li>
										<li><a href="#">255</a></li>
										<li><a href="#">260</a></li>
										<li class=""><a href="#">265</a></li>
										<li><a href="#">270</a></li>
										<li><a href="#">275</a></li>
										<li><a href="#">280</a></li>
										<li><a href="#">285</a></li>
										<li class=""><a href="#">290</a></li>
										<li><a href="#">295</a></li>
										<li><a href="#">300</a></li>
										<li><a href="#">305</a></li>
									</ul>
    							</div>
    						</div>
						</figure>
					</li>
				</ul>
				<div class="prd_more">
    				<a href="#" class="btn_hover_a">더보기</a>
    			</div>
			</article>
		</section>
	</article>
</section>
<?php include "../inc/footer.php" ?>