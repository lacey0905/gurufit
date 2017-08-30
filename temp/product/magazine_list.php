<?php include "../inc/header.php" ?>
<section class="sub_layout">
	<div class="sub_locate">
		<div class="custom_inner">
			<dl class="locate_list">
				<dt><a href="#">홈</a></dt>
				<dd><a href="#">스토어</a></dd>
				<dd><a href="#">남자</a></dd>
			</dl>
			<p class="locate_msg">나이키 플라이니트 최대~50% OFF</p>
		</div>
	</div>
	<article class="sub_content custom_inner on_side">
		<section class="sub_head">
			<h2 class="s_lar">Magazine</h2>
			<div class="tab_active_type">
				<!-- 카테고리 리스트 -->
				<ul>
					<li class="active"><a href="#">매거진 전체</a></li>
					<li><a href="#">뉴스</a></li>
					<li><a href="#">포스트</a></li>
					<li><a href="#">구루스타일</a></li>
					<li><a href="#">룩북</a></li>
					<li><a href="#">구루피셜</a></li>
					<li><a href="#">구루데이터</a></li>
				</ul>
			</div>
			<!-- 검색 키워드 -->
			<div class="search_wrap">
    			<dl class="search_result result_tag">
    				<dt>총 <strong class="search_count">3,517</strong>개의 검색 결과가 있습니다.</dt>
    				<dd class="tag_bg_a"><a href="#">KimHayoung</a></dd>
    				<dd class="tag_bg_b"><a href="#">주황</a></dd>
    				<dd class="tag_bg_b"><a href="#">Nike</a></dd>
    				<dd class="tag_bg_b"><a href="#">스포츠</a></dd>
    			</dl>
    			<!-- 검색 저장 9월 버젼에서 제외 -->
                <!-- <a href="#" class="search_opt_btn btn_arr_a btn_hover_a">검색 저장</a> -->
			</div>
		</section>
		<?php include "../inc/mag_side.php" ?>
		<section class="content_area">
			<dl class="select_sort select_sort_standard">
				<dt>
					<span class="sorting_icon">
						<i class="fa fa-question-circle" aria-hidden="true"></i>
						정렬 기준
					</span>
				</dt>				
				<dd>
					<div class="sel_custom sel_nm_box sel_mid">
						<select>
							<option>개인 추천 순</option>
							<option>신상품 순</option>
							<option>낮은 가격 순</option>
							<option>높은 가격 순</option>
							<option selected>고객 평점 높은 순</option>
							<option>인기 상품 순</option>
						</select>
					</div>
				</dd>
			</dl>
			<div class="mz_sort_pop_wrapper">
				<div class="mz_sort_pop">
					<h4>정렬 속성</h4>
					<dl>
						<dt>개인 추천 순</dt>
						<dd>
						고객 정보(성별,연령,구매내역 등); 사이트 이용 정<br>
						보(검색,조회,구매,평가,공유 등); 구루핏이 보유하<br>
						고 있는 '컨텐츠 정보'를 기반으로 고객의 관심사를<br>
						분석하여 관련성이 높은 콘테느 순으로 정렬됩니다.	
						</dd>
						<dt>신규 콘텐츠 순</dt>
						<dd>
						최근 등록 된 콘텐츠 순으로 정렬 됩니다.
						</dd>
						<dt>신규 콘텐츠 순</dt>
						<dd>
						하트를 많이 받은 콘텐츠 순으로 정렬 됩니다.
						</dd>
					</dl>
				</div>
			</div>
        	<style>
        	   .sorting_icon i {
        	       margin-right:7px;
        	       font-size:1.3em;
        	       color:#F0F0F0;
        	       vertical-align:middle;
        	   }
        	   .select_sort_standard {
        	       position:relative;
        	   }
        	   .mz_sort_pop_wrapper {
        	       position:absolute;
        	       background-color:red;
        	       top:0;
        	       right:0;
        	   }
        	</style>			
			<!-- 진열 영역 -->
			<article class="custom_prd prd_type_a">
        		<ul class="x3">
        			<li>
        				<a href="#">
        					<figure>
        						<img src="../img/prd_sample.png" alt="샘플상품">
        						<figcaption>
        							<span class="kind">인터뷰</span>
        							<span class="like">74</span>
        							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
        							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
        							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
        						</figcaption>
        					</figure>
        				</a>
        			</li>
        		</ul>
        		<article class="custom_prd prd_type_a">
            		<div class="prd_more">
        				<a href="#" class="btn_hover_a">더보기</a>
        			</div>
    			</article>
        	</article>
		</section>
	</article>
</section>
<?php include "../inc/footer.php" ?>