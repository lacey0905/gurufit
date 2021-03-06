<style>
.btn_order_submit .btn_head .ord_end_ship_day{
    text-align:center !important;
}
.btn_order_submit .btn_head .ord_end_ship_day em {
    color:#484848;
}
/*장바구니 영역 밑에 라인 추가*/
.cart_b_line {
    border-bottom: 1px solid #E1E1E1;
}
/*배송 예정일 텍스트 추가*/
.due_dt {
	display:block;
	color: #BBBBBB;
	font-size: 12px;	
	line-height: 20px;
	margin-top:7px;
}
 /*멤버십 백그라운드 이미지*/
  .user_level_x6 {
	padding:11px 0 9px;
	background:url(../img/user_level_bg.png) no-repeat;
} 		  
</style>
<style>
.cart_c_line {
}
.cart_c_line > .price_cp {
   width:316px;
   text-align:right;
   padding-right:32px;
}
.cart_c_line > .price_cp em {
   font-size: 14px;
   color: #8f8f8f;
   letter-spacing: -0.3px;
   line-height: 20px;
}
.prd_list_a tr:last-child {
   border-bottom: 0.5px solid #D8D8D8;
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
	<article class="sub_content custom_inner">
		<section class="sub_head">
			<h2>Check out</h2>
			<div class="tab_step_arr">
				<ol>
					<li class="">01 장바구니</li>
					<li class="">02 주문/결제</li>
					<li class="active">03 주문완료</li>
				</ol>
			</div>
		</section>
		<!-- 결제 완료 메시지 -->
		<h3 class="tit_sub_a">03 주문/결제</h3>
		<div class="complate_box_a">
			<h4 class="comp_tit">주문이 정상적으로 <em>완료 되었습니다.</em></h4>
			<div class="comp_cont btn_order_submit">
    			<strong class="btn_head">
    				<span class="ord_end_ship_day">
    					배송 예정일은 <em>2017년 10월 28일</em> 입니다.<br>
    					구매 후 리뷰를 작성하면 <em>100xp</em>경험치를 얻을 수 있습니다. 
    				</span>
    			</strong>
    		</div>
		</div>
		<h3 class="tit_sub_a">결제 내역</h3>
		<div class="order_result_box">
			<div class="result_box_mix">
				<div class="order_number">
					<em>주문번호</em>
					<span>2017021687496831</span>
				</div>
				<div class="order_cont">
					<dl class="result_box_a">
        				<dt>총 상품 금액</dt>
        				<dd class="price">184,000원</dd>
        				<dt>- 쿠폰 : 신규 가입 쿠폰 (5000원),  Gold I 승급 쿠폰 (2000원)</dt>
        				<dd>-7,000원</dd>
        				<dt>- Gold II 멤버십 할인 :3% </dt>
        				<dd>-5,520원</dd>
        				<dt>배송비</dt>
        				<dd>무료</dd>
        			</dl>
        			<dl class="result_opt">
        				<dt class="result_opt_tit">결제수단</dt>
        				<dd class="result_opt_cont">
        					<em>카드결제</em>
							<span>
								삼성 (5310-70**-****-****)<br>
								5개월무이자  (2017.05.14 22:49)
							</span>
        				</dd>
        			</dl>
				</div>
			</div>
			<div class="total_price">
				<em class="tit">총 결제 금액</em>
				<strong class="total">171,480원</strong>
			</div>
		</div>
		<h3 class="tit_sub_a">주문 상품</h3>
		<div class="prd_list_type">
			<table class="prd_list_a">
				<caption class="blind">장바구니</caption>
				<colgroup>
					<col class="col_thum">
					<col class="col_cont">
					<col class="col_price">
				</colgroup>
				<tbody>
					<tr class="cart_c_line">
						<td class="thum">
							<span class="prd_thum">
	    						<a href="#">
	    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    							</a>
   							</span>
						</td>
						<td class="cont">
							<span class="brand"><img src="../img/nike_x34.png" alt="나이키" ></span>
							<strong class="name">나이키 맷콘 DSX 플라이니트</strong>
							<dl class="opt">
								<dt>컬러 : </dt>
								<dd>하늘색/흰색</dd>
								<dt>사이즈 : </dt>
								<dd>230</dd>
							</dl>		
						</td>
						<td class="price price_cp">
							<del class="customer">99,000 원</del>
							<strong class="sell_price">89,100 원</strong>
							<em>50% 구루~ 구루~ 구루핏 추석 할인 쿠폰 적용가</em>
						</td>
					</tr>
				
					<tr class="cart_c_line">
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
							<dl class="opt">
								<dt>컬러 : </dt>
								<dd>Green</dd>
								<dt>사이즈 : </dt>
								<dd>230</dd>
								<dt>수량 : </dt>
								<dd>1개</dd>
							</dl>
							<em class="due_dt">배송 예정일 : 2017년 9월 25일</em>
						</td>
						<td class="price price_cp">
							<del class="customer">99,000 원</del>
							<strong class="sell_price">89,100 원</strong>
						</td>
					</tr>					
				</tbody>
			</table>			
		</div>
		<h3 class="tit_sub_a">배송지 정보</h3>
		<div class="addr_wrap">
			<table class="addr_inp_table">
				<caption class="blind">배송지정보</caption>
				<colgroup>
					<col class="tit">
					<col class="cont">
				</colgroup>
				<tbody>
					<tr>
						<th>배송지</th>
						<td>기본 배송지</td>
					</tr>
					<tr>
						<th>수령인</th>
						<td>김하영</td>
					</tr>
					<tr>
						<th>연락처</th>
						<td>010-7777-7777   </td>
					</tr>
					<tr>
						<th class="tit_top">주소</th>
						<td>
							<p class="addr_text">
								<span>478-222</span>
                              	<span>서울시 서초구 방배로 22길 11 노블레스 빌딩 3층 </span>
                            	<span>슈포래빗 1402동 1703호</span>                              
                            </p>
						</td>
					</tr>
					<tr>
						<th>배송시 요청사항</th>
						<td>빠른 배송 감사요~</td>
					</tr>
				</tbody>
			</table>
    		<div class="addr_result">
            	<dl>
            		<dt>주문인</dt>
            		<dd>김밀크</dd>
            		<dt>연락처</dt>
            		<dd>010-7777-7777</dd>
            		<dt>이메일</dt>
            		<dd>ma******@na***com</dd>
            	</dl>
    		</div>
		</div>    		
		<div class="btn_order_submit">
			<strong class="btn_head all_msg">
				<span>
					구매 후 상품평을 작성하면 경험치 100xp를 얻을 수 있습니다. 
				</span>
			</strong>
			<ul class="side_btn_list">
				<li class="btn_hover_a"><a href="#">주문내역보기</a></li>
				<li class="active"><a href="#">쇼핑계속하기</a></li>
			</ul>
		</div>
	</article>
</section>
<?php include "../inc/footer.php" ?>