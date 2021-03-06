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
					<li class="active">01 장바구니</li>
					<li class="">02 주문/결제</li>
					<li class="">03 주문완료</li>
				</ol>
			</div>
		</section>
		<!-- 장바구니 리스트 -->
		<div class="prd_list_type">
			<h3 class="tit_sub_a">01 장바구니</h3>
			<table class="prd_list_a">
				<caption class="blind">장바구니</caption>
				<colgroup>
					<col class="col_check">
					<col class="col_thum">
					<col class="col_cont">
					<col class="col_price">
				</colgroup>
				<tbody>
					<tr class="cart_b_line">
						<td class="check">
							<div class="custom_cbox cbox_c">
    							<label>
    								<input type="checkbox">
    								<span class="box"></span>
    							</label>
    						</div>
						</td>
						<td class="thum">
							<span class="prd_thum">
	    						<a href="#">
	    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    							</a>
   							</span>
						</td>
						<td class="cont">
							<span class="brand"><img src="../img/pony_m.png" alt="나이키" ></span>
							<strong class="name">나이키 메트콘 플라이니트</strong>
							<dl class="opt">
								<dt>컬러 : </dt>
								<dd>초록색</dd>
								<dt>사이즈 : </dt>
								<dd>230</dd>
								<dt>수량 : </dt>
								<dd>1개</dd>
							</dl>
							<a href="#" class="btn_modify">편집</a>
							<em class="due_dt">배송 예정일 : 2017년 9월 25일</em>
							<div class="btn_del">
								<a href="#">상품 삭제</a>
							</div>
						</td>
						<td class="price">
							<del class="customer">99,000원</del>
							<strong class="sell_price">89,100원</strong>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="prd_list_control">
				<ul class="btn_left">
					<li class="btn_hover_a"><a href="#">선택상품 삭제</a></li>
					<li class="btn_hover_a"><a href="#" class="s_lar">나중에 구매 할 목록으로 이동</a></li>
				</ul>
			</div>
		</div>
		<div class="cart_result">
			<span class="before_coupon_txt"><strong>할인 및 쿠폰 적용 전 가격</strong>  멤버십 할인 및 쿠폰은 주문하기 페이지에서 적용할 수 있습니다.</span>
			<div class="coupone_select_list">
			</div>
			<div class="order_result_box">
				<dl class="result_box_a">
					<dt>상품 금액</dt>
					<dd class="price">184,000원</dd>
					<dt>배송비</dt>
					<dd>무료</dd>
				</dl>
				<div class="total_price">
					<em class="tit">총 결제 금액</em>
					<strong class="total">171,480원</strong>
				</div>
			</div>
			<div class="btn_order_submit">
				<strong class="btn_head all_msg">
    				<span>
    					구매 후 상품평을 작성하면 경험치 100xp를 받을 수 있습니다. 
    				</span>
    			</strong>
				<ul class="side_btn_list">
					<li class="btn_hover_a"><a href="#">계속 쇼핑 하기</a></li>
					<li class="active"><a href="#">주문하기</a></li>
				</ul>
			</div>
		</div>
		<!-- 위시리스트 리스트 -->
		<div class="prd_list_type">
			<h3 class="tit_sub_a">나중에 구매 할 상품</h3>
			<table class="prd_list_a">
				<caption class="blind">나중에 구매 할 상품</caption>
				<colgroup>
					<col class="col_check">
					<col class="col_thum">
					<col class="col_cont">
					<col class="col_price">
				</colgroup>
				<tbody>
					<tr class="cart_b_line">
						<td class="check">
							<div class="custom_cbox cbox_c">
    							<label>
    								<input type="checkbox">
    								<span class="box"></span>
    							</label>
    						</div>
						</td>
						<td class="thum">
							<span class="prd_thum">
	    						<a href="#">
	    							<img src="../img/store_sample_230x160.png" alt="샘플상품">
    							</a>
   							</span>
						</td>
						<td class="cont">
							<span class="brand"><img src="../img/superga_m.png" alt="나이키" ></span>
							<strong class="name">Nike Metcon DSX Flyknit</strong>
							<dl class="opt">
								<dt>컬러 : </dt>
								<dd>Green</dd>
								<dt>사이즈 : </dt>
								<dd>230</dd>
								<dt>수량 : </dt>
								<dd>1개</dd>
							</dl>
							<a href="#" class="btn_modify">편집</a>
							<div class="btn_del">
								<a href="#">상품 삭제</a>
							</div>
						</td>
						<td class="price">
							<del class="customer">99,000 원</del>
							<strong class="sell_price">89,100 원</strong>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="prd_list_control">
				<ul class="btn_left">
					<li class="btn_hover_a"><a href="#">선택상품 삭제</a></li>
					<li class="btn_hover_a"><a href="#" class="s_lar">장바구니로 이동</a></li>
				</ul>
			</div>
		</div>
	</article>
</section>
<?php include "../inc/footer.php" ?>