<?php include "../inc/header.php" ?>
<script src="../js/chart.js"></script>

<!-- 모달 팝업 -->
<!-- 모달팝업 부모 앨리먼트 -->
<!-- 
    팝업의 그림자가 모든 팝업에 1개만 적용 되어야 하기 때문에  [f_modal_perant] 앨리먼트를 별도로 껏다켰다를 반복 해야 합니다.
    따라서 팝업이 1개 이상 보여져야 할 경우에는   [f_modal_perant] 앨리먼트에 [open] 클래스를 추가 합니다.
-->
<div class="f_modal_perant open">

	<!-- 모달 팝업 우선순위 [z1 ~ z6]까지 클래스로 만들어 놓았습니다. [z6]이 가장 우선순위가 높습니다. -->
	<!-- 디자인상 팝업마다 그림자가 투명하게 들어가 있습니다. 때문에 팝업이 겹칠 경우에는  [f_modal_shadow]를 가장 하위 우선순위 팝업에만 적용 해야 합니다.-->
	
	<!-- 사진 등록 리스트 -->
	<div  class="f_modal_layer f_modal_shadow s_small big">
		<div class="f_modal_wrap">
    		<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>
        				<strong>이 상품이 추천된 이유</strong>
        				<span class="_msg line_x2">
            				구루핏 추천 포인트는, 김하영님의 활동을 바탕으로 한 관심 키워드와<br>
    						상품이 얼마나 잘 맞는지를 수치로 나타낸 것입니다.
            			</span>
        			</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<div class="point_modal_pop">
        				<strong class="msg">
        					구루핏 추천 포인트는, <em>김하영</em>님의 활동을 바탕으로 한 관심 키워드와<br>
							상품이 얼마나 잘 맞는지를 수치로 나타낸 것입니다.
        				</strong>
        				<div style="margin:100px;" class="radar_chart_a">
                        	<canvas id="myChart"></canvas>
                        	<strong class="chart_total">78<span>%</span></strong>
                        	<ul class="chart_label"></ul>
                        </div>
        			
        			</div>
        		</div>
    		</div>
		</div>
	</div>
</div>
<!-- 모달 팝업 END -->
<!-- /////// -->


<script>

// 차트 데이터 삽입
function addData(chart, label, data) {
    chart.data.labels.push(label);
    chart.data.datasets.forEach((dataset) => {
        dataset.data.push(data);
    });
    chart.update();
}

//차트 Canvas 선택
var chartElem = $("#myChart");
var ctx = document.getElementById("myChart").getContext('2d');

//차트 옵션
var options = {
	scale: {
		angleLines: {display:false},
        gridLines: {color:'rgb(236, 236, 243)'},
        ticks: {
            max: 100,
            min: 0,
            stepSize:12.5,
            display:false,
        },
        pointLabels: {fontSize: 0},
	},
	legend: {display: false},
	animation : false
};
// 차트 생성

var myChart = new Chart(ctx, {
    type: 'radar',
    data: {
        labels: [],
        datasets: [{
            backgroundColor: ['rgba(112, 83, 255, 0.8)'],
            borderColor: ['rgba(255,99,132,0)'],
            pointRadius:0,
            borderWidth: 1,
        }]
    },
    options: options
});

//차트 데이터
var chatLabel = ["#아디다스", "#데일리", "#부스트", "#옹심", "#옹심", "#옹심", "#옹심", "#옹심", "#옹심", "#옹심"];
var chartData = [100, 100, 90, 90, 90, 90];
var chartTotal = "78%";


// 데이터 삽입
for(var i=0; i < chartData.length; i++){
	addData(myChart, chatLabel[i], chartData[i]);

	var length = chartData.length; // 도형의 각 갯수
	var angle = i * (360 / chartData.length);
	
	var html = "<li style='transform: rotate(" + angle + "deg);'><span style='transform: rotate(" + -angle + "deg);'>" + "<em>" + chartData[i] + "%</em>" + chatLabel[i] + "</span></li>";
	chartElem.parent().find(".chart_label").append(html);
}
</script>




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
					<li class="">
						<div class="select_drop">
							<strong class="tit">남성 전체</strong>
							<div class="list">
    							<a href="#">남성 전체</a>
    							<a href="#">여성 전체</a>
							</div>
						</div>
					</li>
					<li class="active"><a href="#">스포츠 (179)</a></li>
					<li><a href="#">스니커즈 (179)</a></li>
					<li><a href="#">옥스포드 (179)</a></li>
					<li><a href="#">로퍼 (179)</a></li>
					<li><a href="#">부츠 (179)</a></li>
					<li><a href="#">슬립온 (179)</a></li>
				</ul>
			</div>
			<!-- 검색 키워드 -->
			<div class="search_wrap">
    			<dl class="search_result result_tag">
    				<dt>총 <strong class="search_count">3,517</strong>개의 검색 결과가 있습니다.</dt>
    				<dd class="tag_bg_a del"><a href="#">KimHayoung</a></dd>
    				<dd class="tag_bg_b disable"><a href="#">주황</a></dd>
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
    					<div id="" class="set_select select_design_a select_design_x2">
    						<strong class="box" data-value="0">전체검색</strong>
    						<ul class="select_list">
    							<li><a href="#none" data-value="test">리스트1</a></li>
    							<li><a href="#none" data-value="vluae">리스트2</a></li>
    						</ul>
    					</div>
    					<div id="" class="set_select select_design_a select_design_x2 disable">
    						<strong class="box" data-value="0">전체검색</strong>
    						<ul class="select_list">
    							<li><a href="#none" data-value="test">리스트1</a></li>
    							<li><a href="#none" data-value="vluae">리스트2</a></li>
    						</ul>
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