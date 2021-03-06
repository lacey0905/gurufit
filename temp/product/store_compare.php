<?php include "../inc/header.php" ?>
<section class="sub_layout gray">
	<div class="sub_locate">
		<div class="custom_inner">
			<dl class="locate_list">
				<dt><a href="#">홈</a></dt>
				<dd><a href="#">로그인</a></dd>
			</dl>
		</div>
	</div>
	<div class="locate_tab_nav">
		<nav class="nav custom_inner">
			<ul>
				<li class="active"><a href="#">비교한 상품 목록</a></li>
				<li class="icon_compare"><a href="#">비교하기</a></li>
			</ul>	
			<a href="#" class="nav_btn"><i class="material-icons">&#xE5CE;</i></a>
		</nav>
		<div class="cont">
			<div class="compare custom_innerr">
				<div class="swiper-container compare_list">
        			<ul class="swiper-wrapper">
        				<li class="swiper-slide">
        					<label class="box">
            					<input type="checkbox" class="check">
            					<span class="thum">
            						<img src="../img/store_sample_284x149.png" alt="비교하기 이미지">
            					</span>
        					</label>
        					<a href="#" class="del"></a>
        				</li>
        				<li class="swiper-slide">
        					<label class="box">
            					<input type="checkbox" class="check">
            					<span class="thum">
            						<img src="../img/store_sample_284x149.png" alt="비교하기 이미지">
            					</span>
        					</label>
        					<a href="#" class="del"></a>
        				</li>
        				<li class="more swiper-slide">
        					<a href="#" class="more_btn"></a>
        				</li>
        			</ul>
    			</div>
    			<ul class="compare_btn">
    				<li class=""><a href="#">3개 상품 비교하기</a></li>
    				<li><a href="#">전체 삭제</a></li>
    			</ul>
			</div>
					
			<!-- 비교하기 리스트가 비어 있을 경우 메시지 
			<p class="msg_box custom_inner ">
				<span>최근 비교한 상품을 <em>40개</em> 까지 확인할 수 있습니다.</span>
			</p>
			-->	
		</div>
		
		<script>
		$(function(){
    		// Share Your Gurufit Slider
    		var compare = new Swiper('.compare .compare_list', {
    			slidesPerView:6,
    	        paginationClickable: true,
    	        spaceBetween:0,
    	    });
    	});
		</script>
		
	</div>
	<article class="sub_content custom_inner">
		<section id="mypage">
			<div class="prd_date_list">
				<div class="list">
					<h4 class="date">2017. 7. 20(금)</h4>
					<table class="prd_list_a line spacing prd_rnd_x1">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn_x2">
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
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<!-- 별점 리스트  [star_on] 노란색 별, [star_off] 회색별 -->
        	    					<div class="rating">
        	    						<strong class="star_rating">
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	    						<span class="cnt">(129)</span>
        	    					</div>
    								<p class="price">
										<strong>184,000원</strong>
										<del>199,000원</del>
									</p>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">비교하기</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">마이리스트에 담기</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_shadow btn_cp">장바구니에 담기</a></li>
    								</ul>
    							</td>
						 	</tr>
    						<tr>
    							<td class="thum">
    								<span class="prd_thum">
    		    						<a href="#">
    		    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    	    							</a>
    	   							</span>
    							</td>
    							<td class="cont">
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<!-- 별점 리스트  [star_on] 노란색 별, [star_off] 회색별 -->
        	    					<div class="rating">
        	    						<strong class="star_rating">
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	    						<span class="cnt">(129)</span>
        	    					</div>
    								<p class="price">
										<strong>184,000원</strong>
										<del>199,000원</del>
									</p>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">비교하기</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">마이리스트에 담기</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_shadow btn_cp">장바구니에 담기</a></li>
    								</ul>
    							</td>
						 	</tr>
    					 </tbody>
    				</table> 
				</div>
				<div class="list">
					<h4 class="date">2017. 7. 19(목)</h4>
					<table class="prd_list_a line spacing prd_rnd_x1">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn_x2">
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
    								<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
    								<strong class="name">Nike Metcon DSX Flyknit</strong>
    								<!-- 별점 리스트  [star_on] 노란색 별, [star_off] 회색별 -->
        	    					<div class="rating">
        	    						<strong class="star_rating">
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_on"></i>
        	    							<i class="star_off"></i>
        	   							</strong>
        	    						<span class="cnt">(129)</span>
        	    					</div>
    								<p class="price">
										<strong>184,000원</strong>
										<del>199,000원</del>
									</p>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">비교하기</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">마이리스트에 담기</a></li>
    									<li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_shadow btn_cp">장바구니에 담기</a></li>
    								</ul>
    							</td>
						 	</tr>
    					 </tbody>
    				</table> 
				</div>
			</div>
		</section>
	</article>
</section>
<?php include "../inc/footer.php" ?>
 