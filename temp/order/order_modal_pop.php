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
	
	<!-- 서비스 준비중 입니다. -->
	<div class="f_modal_layer ">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>서비스 준비중</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<div class="f_modal_service">
        				<i class="service_icon"></i>
        				<h3><em>서비스 준비중</em>입니다.</h3>
        				<p>
        					보다 나은 서비스 제공을 위하여 페이지 준비중에 있습니다.<br>
        					빠른 시일내에 준비하여 찾아 뵙겠습니다.
        				</p>
        			</div>
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_btn">
        				<a href="#" class="f_modal_close btn_normal_b">닫기</a>
        			</div>			
        		</div>
    		</div>
		</div>
		<div class="f_modal_blind"></div>
	</div>
	
	<!-- 불편을 드려 죄송합니다. -->
	<div class="f_modal_layer ">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>Oops!</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<div class="f_modal_service">
        				<i class="exit_icon"></i>
        				<h3><em>불편을</em> 드려 죄송합니다.</h3>
        				<p>
        					서비스 이용에 불편을 드려 죄송합니다.<br>
							새로고침(f5)을 누르시거나, 잠시 후에 이용해 주십시요.
        				</p>
        			</div>
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_btn">
        				<a href="#" class="f_modal_close btn_normal_b">닫기</a>
        			</div>			
        		</div>
    		</div>
		</div>
		<div class="f_modal_blind"></div>
	</div>
	
	<!-- 주소 찾기 -->
	<div class="f_modal_layer open">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>주소 찾기</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont">
        			<div class="f_modal_addr">
        				<form action="">
            				<fieldset>
            					<legend class="blind">주소찾기</legend>
            					<div class="inp_sch_wrap">
            						<div class="search">
        					 	      	<input type="text" class="inp_nm_box" placeholder="도로명 , 건물명, 지번을 입력하세요 ">
        					 		</div>
        					       	<a href="#" class="btn_sch_icon btn_hover_shadow">주소찾기</a>
    					       	</div> 				
            				</fieldset>
        				</form>
        				<!-- 주소 찾기 검색 전 -->
        				<div class="addr_guide blind">
        					<strong class="addr_guide_tit">우편번호 통합검색 Tip</strong>
        					<ul>
        						<li>도로명 + 건물번호 (예: 송파대로 570)</li>
        						<li>동/읍/면/리 + 번지 (예: 신천동 7-30)</li>
        						<li>건물명, 아파트명 (예: 반포자이아파트)</li>
        					</ul>
        				</div>
        				<!-- 주소찾기 검색 후 -->
        				<div class="addr_result_wrap ">
        					<ul>
        						<li>
        							<div class="addr_road_name">
        								<a href="#">
            								<strong>도로명</strong>
            								<span>서울특별시 서초구 방배로22길 20</span>
        								</a>
        							</div>
        							<div class="addr_number_name">
        								<a href="#">
            								<strong>지번</strong>
            								<span>서울특별시 서초구 방배1동 901-10번지</span>
        								</a>
        							</div>
        							<em class="addr_number"><a href="#">[12218]</a></em>
        						</li>
        						<li>
        							<div class="addr_road_name">
        								<a href="#">
            								<strong>도로명</strong>
            								<span>서울특별시 서초구 방배로22길 20</span>
        								</a>
        							</div>
        							<div class="addr_number_name">
        								<a href="#">
            								<strong>지번</strong>
            								<span>서울특별시 서초구 방배1동 901-10번지</span>
        								</a>
        							</div>
        							<em class="addr_number"><a href="#">[12218]</a></em>
        						</li>
        					</ul>
        				</div>
        				<!-- 페이징 -->
						<div class="pager_type_a">
							<a href="#" class="pager_btn first"></a>
							<a href="#" class="pager_btn prev"></a>
							<ol>
			            		<li><a href="#">1</a></li>
			            		<li><a href="#" class="active">2</a></li>
			            		<li><a href="#">3</a></li>
			            		<li><a href="#">4</a></li>
			            		<li><a href="#">6</a></li>
			            		<li><a href="#">7</a></li>
			            		<li><a href="#">8</a></li>
			            		<li><a href="#">9</a></li>
			            		<li><a href="#">10</a></li>
			        		</ol>
			      			<a href="#" class="pager_btn next"></a>     
			      			<a href="#" class="pager_btn last"></a>     
						</div>
        			</div>
        		</div>
    		</div>
		</div>
		<div class="f_modal_blind"></div>
	</div>
</section>
<?php include "../inc/footer.php" ?>