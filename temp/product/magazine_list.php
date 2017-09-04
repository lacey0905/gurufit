<style> 
    .sl_sort_attribute .select_sort dt {
     position:relative;
     display:inline-block;
    }
    .sl_sort_attribute .select_sort dt:hover .mz_sort_pop_container {
     visibility: visible;
    }
    .sl_sort_attribute .select_sort dt img {
     vertical-align:middle;
     padding-bottom:2px;
    } 
    .sl_sort_attribute .mz_sort_pop_wrapper {
     position:absolute;
     padding-top:30px;
     top:9px;
     right:-79px;
    }
    .sl_sort_attribute .mz_sort_pop_container {
     visibility: hidden;
     width:280px;
     background-color:#ffffff;
     border:1px solid #dddddd;
     box-shadow: 8px 8px 1px 0 rgba(0,0,0,0.09);
     border-radius: 5px; 
     z-index:1;               
    }
    .sl_sort_attribute .mz_sort_pop_container:before {
     content:'';
     display:block;
     position: absolute;
     top: 25px;
     left: 134px;
     width: 10px;
     height: 10px;
     background:#FFFFFF;
     border-right:1px solid #DDDDDD;
     border-bottom:1px solid #DDDDDD;
     tranasform: rotate(223deg);
     -moz-transform:rotate(223deg);
     -ms-transform: rotate(223deg);
     -webkit-transform:rotate(-138deg);                  
    }
    .sl_sort_attribute .mz_sort_pop h4 {
     color: #000000;		
     font-size: 18px;	
     font-weight: bold;	
     line-height: 27px;	
     text-align: center;
     margin-top: 23px;
     position:relative;        	       
    }
    .sl_sort_attribute .mz_sort_pop h4:after {
     content: "";
     position: absolute;
     left: 50%;
     bottom: -17px;
     width:1px;
     height: 10px;
     border-left: solid 1px #979797;
    }
    .sl_sort_attribute .mz_sort_pop dl {
     text-align:left;
     margin-top:30px;
    }
    .sl_sort_attribute .mz_sort_pop dl dt {
     margin-left:22px;
     color: #4A4A4A;	
     font-size: 13px;	
     font-weight: bold;	
     line-height: 27px;        	       
    }
    .sl_sort_attribute .mz_sort_pop dl dd {
     margin-left:22px;
     color: #747474;		
     font-size: 12px;	
     line-height: 20px;
     margin-bottom:18px;
     display:block !important;        	       
    } 
</style>

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
                						<dt>신규 콘텐츠 순</dt>
                						<dd>최근 등록 된 콘텐츠 순으로 정렬 됩니다.</dd>
                						<dt>신규 콘텐츠 순</dt>
                						<dd>하트를 많이 받은 콘텐츠 순으로 정렬 됩니다.</dd>
                					</dl>
                				</div>
                			</div>	
            			</div>         				
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
    		</div>					
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
        							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개나이키랩 줌 플라이 SP 국내 발매 예정일 공개나이키랩 줌 플라이 SP 국내 발매 예정일 공개나이키랩 줌 플라이 SP 국내 발매 예정일 공개나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
        							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
        							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
        						</figcaption>
        					</figure>
        				</a>
        			</li>
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