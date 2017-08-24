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
					<li class="active">02 주문/결제</li>
					<li class="">03 주문완료</li>
				</ol>
			</div>
		</section>
		<!-- 장바구니 리스트 -->
		<h3 class="tit_sub_a">02 주문/결제</h3>
		<div class="prd_list_type">
			<table class="prd_list_a">
				<caption class="blind">장바구니</caption>
				<colgroup>
					<col class="col_check">
					<col class="col_thum">
					<col class="col_cont">
					<col class="col_price">
				</colgroup>
				<tbody>
					<tr>
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
			<div class="order_result_box">
				<dl class="result_box_a">
					<dt>총 상품 금액</dt>
					<dd class="price">184,000원</dd>
				</dl>
				<div class="ord_discount">
					<em>할인</em>
					<span class="ord_mem">멤버십 등급 할인:<strong>Gold II</strong>(3%)</span>
					<span>5,520원</span>
				</div>
				<div class="ord_coupon">
					<dl>
						<dt>쿠폰</dt>
						<dd>15,000</dd>
					</dl>
					<table class="ord_coupon_tab">
						<colgroup>
							<col width="51">
							<col width="202">
							<col width="356">
							<col width="96">
							<col width="215">
						</colgroup>
						<tr>
							<td>&nbsp;</td>
							<td>쿠폰 종류</td>
							<td>쿠폰 사용 정보</td>
							<td>유효기간</td>
							<td>할인 금액</td>
						</tr>
						<!-- 1열 -->
						<tr>
							<td>
                        		<span class="check_sort custom_cbox cbox_b ord_present_box">
                        			<label>
                        				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
                        				<span class="box"></span>
                        			</label>
                        		</span>								
							</td>
							<td>
							 <div class="coupone_select_list ord_coupon_select_list">	
        						<label>
        							<input type="checkbox">
        							<span><em>5,000원</em>가입 환영</span>
        						</label>
        					 </div>								
							</td>
							<td>
								모든 상품 구입에 사용할 수 있습니다.<br>
								중복 사용이 가능합니다.
							</td>
							<td>
								없음
							</td>
							<td>
								5,000원
							</td>
						</tr>
						<!-- 2열 -->
						<tr>
							<td>
                        		<span class="check_sort custom_cbox cbox_b ord_present_box">
                        			<label>
                        				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
                        				<span class="box"></span>
                        			</label>
                        		</span>								
							</td>
							<td>
							 <div class="coupone_select_list ord_coupon_select_list">	
        						<label>
        							<input type="checkbox">
        							<span><em>5,000원</em>레벨업 - Silver III</span>
        						</label>
        					 </div>								
							</td>
							<td>
								모든 상품 구입에 사용할 수 있습니다.<br>
								중복 사용이 가능합니다.
							</td>
							<td>
								없음
							</td>
							<td>
								&nbsp;
							</td>
						</tr>
						<!--3열 -->
						<tr>
							<td>
                        		<span class="check_sort custom_cbox cbox_b ord_present_box">
                        			<label>
                        				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
                        				<span class="box"></span>
                        			</label>
                        		</span>								
							</td>
							<td>
							 <div class="coupone_select_list ord_coupon_select_list">	
        						<label>
        							<input type="checkbox">
        							<span><em>2,000원</em>레벨업 - Gold I</span>
        						</label>
        					 </div>								
							</td>
							<td>
								모든 상품 구입에 사용할 수 있습니다.<br>
								중복 사용이 가능합니다.
							</td>
							<td>
								없음
							</td>
							<td>
								&nbsp;
							</td>
						</tr>
						<!--4열 -->
						<tr>
							<td>
                        		<span class="check_sort custom_cbox cbox_b ord_present_box">
                        			<label>
                        				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
                        				<span class="box"></span>
                        			</label>
                        		</span>								
							</td>
							<td>
							 <div class="coupone_select_list ord_coupon_select_list">	
        						<label>
        							<input type="checkbox">
        							<span><em>10%</em>스니커즈 할인</span>
        						</label>
        					 </div>								
							</td>
							<td>
								스니커즈에 한해 사용할 수 있습니다.3만원 이상,최대 1만원 할인<br>
								<span class="ord_overlap_text">다른 이벤트 쿠폰과 중복해서 사용할 수 없습니다.</span>
							</td>
							<td>
								2017년 10월 23일
							</td>
							<td>
								10,000원
							</td>
						</tr>
						<!--5열 -->
						<tr>
							<td>
                        		<span class="check_sort custom_cbox cbox_b ord_present_box">
                        			<label>
                        				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
                        				<span class="box"></span>
                        			</label>
                        		</span>								
							</td>
							<td>
							 <div class="coupone_select_list ord_coupon_select_list">	
        						<label>
        							<input type="checkbox">
        							<span><em>10%</em>2017년 여름 세일</span>
        						</label>
        					 </div>								
							</td>
							<td>
								스니커즈에 한해 사용할 수 있습니다.3만원 이상,최대 1만원 할인<br>
								<span class="ord_overlap_text">다른 이벤트 쿠폰과 중복해서 사용할 수 없습니다.</span>
							</td>
							<td>
								2017년 10월 23일
							</td>
							<td>
								&nbsp;
							</td>
						</tr>																								
					</table>
				</div>
				<dl class="result_box_a">
					<dt>배송비</dt>
					<dd class="price ord_free">무료</dd>
				</dl>				
				<div class="total_price">
					<em class="tit">총 결제 금액</em>
					<strong class="total">171,480원</strong>
				</div>
			</div>
		</div>
		<h3 class="tit_sub_a">
		배송지 정보
    		<span class="check_sort custom_cbox cbox_b ord_present_box">
    			<label>
    				<input type="checkbox" id="buyUser" name="buyUser" value="buyUser">
    				<span class="box"></span>
    				<span class="label">선물인가요?</span>
    			</label>
    		</span>			
		</h3>
		<div class="addr_wrap">
			<table class="addr_inp_table">
				<caption class="blind">배송지정보</caption>
				<colgroup>
					<col class="tit">
					<col class="cont">
				</colgroup>
				<tbody>
					<tr>
						<th>배송지
						</th>
						<td class="radio">
							<div class="table_radio custom_radio">
								<label>
									<input type="radio" checked="checked" name="addr">
									<span class="box"></span>
									<span class="label">기본 배송지</span>
								</label>
							</div>
							<div class="table_radio custom_radio">
								<label>
									<input type="radio" name="addr">
									<span class="box"></span>
									<span class="label">새로운 배송지</span>
								</label>
							</div>
							<span class="ord_ship_list">배송지 목록 (3)</span>
						</td>
					</tr>
					<tr>
						<th>수령인</th>
						<td>
							<input type="text" class="inp_nm_box h_mid w_x3">
						</td>
					</tr>
					<tr>
						<th>연락처</th>
						<td class="inline_btn_wrap">
							<div class="tel_inp_wrap">
    							<input type="text" class="inp_nm_box h_mid w_x1">
    							<span class="inp_hyphen"></span>
    							<input type="text" class="inp_nm_box h_mid w_x1">
    							<span class="inp_hyphen"></span>
    							<input type="text" class="inp_nm_box h_mid w_x1">
							</div>
							<a href="#" class="btn_inp_opt w_x3 btn_hover_a">휴대전화번호 인증</a>
						</td>
					</tr>
					<tr>
						<th class="tit_top">주소</th>
						<td>
							<div class="addr_inp_wrap">
								<a href="#" class="btn_inp_opt w_x3 btn_hover_a">주소찾기</a>
								<input type="text" class="inp_nm_box h_mid w_x2">
							</div>
							<div class="addr_inp_add">
								<input type="text" class="inp_nm_box h_mid w_xf">
								<input type="text" class="inp_nm_box h_mid w_xf">
							</div>
							<div class="addr_inp_check">
								<div class="custom_cbox cbox_d">
                					<label>
                    					<input type="checkbox" id="gender_02" name="gender_02" value="gender_02">
                    					<span class="box"></span>
                    					<span class="label">기본 배송지로 저장</span>
                    				</label>
                				</div>	
							</div>
						</td>
					</tr>
					<tr>
						<th>배송시 요청사항</th>
						<td>
							<input type="text" class="inp_nm_box h_mid w_xf">
						</td>
					</tr>
					<tr>
						<th class="ord_pt_box_tit">선물 메세지</th>
						<td>
							<textarea class="ord_pt_box" name="textarea"></textarea>							
						</td>
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
            	<a href="#" class="btn_modify btn_inp_opt w_x2 btn_hover_a">주문인 정보 수정</a>
    		</div>
		</div>    		
		<h3 class="tit_sub_a">결제정보</h3>
		<div class="payment_wrap">
			<h4 class="payment_tit">결제수단 선택</h4>
			<dl class="payment_list">
				<dt class="payment_nav">
					<strong class="payment_radio custom_radio">
    					<label>
    						<input type="radio" checked="checked" name="payment">
    						<span class="box"></span>
    						<span class="label">신용카드</span>
    					</label>
					</strong>
					<strong class="payment_radio custom_radio">
    					<label>
    						<input type="radio" name="payment">
    						<span class="box"></span>
    						<span class="label">실시간 계좌이체</span>
    					</label>
					</strong>
					<strong class="payment_radio custom_radio">
    					<label>
    						<input type="radio" name="payment">
    						<span class="box"></span>
    						<span class="label">무통장 입금 (가상계좌)</span>
    					</label>
					</strong>
				</dt>
				<dd class="payment_child">
					<!-- 신용카드 결제 정보 -->
					<div class="child">
    					<div class="tip_list">
    						<a href="#">무이자 할부혜택</a>
    						<a href="#">제휴/할인카드</a>
    					</div>
    					<div class="refund_account_info_register">
    						<em>환불 계좌 정보 등록</em>
    						<table class="bank_register">
    							<col width="">
    							<col width="">
    							<tr>
    								<td class="ord_bank">은행</td>
    								<td>
                    					<div class="sel_custom sel_nm_box sel_mid ord_sel_box">
                    						<select class="sel_mid">
                    							<option>신한은행</option>
                    						</select>
                    					</div>    								
    								</td>
    							</tr>
    							<tr>
    								<td>예금주</td>
    								<td>
    									<input type="text" class="inp_nm_box h_mid w_xf ord_ib_o">
    								</td>
    							</tr>
    							<tr>
    								<td>계좌번호</td>
    								<td>
										<input type="text" class="inp_nm_box h_mid w_xf ord_ib_t">    								
    								</td>
    							</tr>    						
    						</table>
    						<p>저장된 환불 계좌 정보는 마이 페이지>사용자 정보·환경 설정에서 변경할 수 있습니다.</p>
    					</div>
    					<ul class="tip_info_list">
    						<li>*  결제내역은 LG데이콤 (http://pgweb.dacom.net/pg/wmp/Home2009/index.jsp)을 통해 조회 및 전표조회가 가능합니다. (LG데이콤 고객센터1544 - 7772)</li>
                            <li>*  가상계좌는(무통장 입금)는 결제창에서 원하시는 은행을 선택하여 입금처리 하시면 됩니다.</li>
                            <li>*  가상계좌(무통장 입금)선택 시 결제 후 다음날 24시까지 입금하셔야 결제가 완료됩니다. (미 입금 시 자동 취소)</li>
                            <li>*  가상계좌(무통장 입금)는 고객님만을 위한 1회용 보안계좌입니다. 반드시 정확한 금액과 정보를 입력하셔야 입금처리 및 결제확인이 가능합니다.</li>
                            <li>*  실시간 계좌이체의 경우에는 실시간으로 자동이체 되기 때문에 현금영수증이 즉시 발행됩니다.</li>
                            <li>*  가상계좌(무통장 입금)의 경우에는 현금 영수증 발행이 필요하신 경우 주문/배송조회 에서 [현금영수증신청을]누르셔야 발행처리 됩니다.</li>
    					</ul>
					</div>
					<!-- 실시간 계좌이체 결제 정보 -->
					<div class="child"></div>
					<!-- 무통장 입금 (가상계좌) 결제 정보 -->
					<div class="child"></div>
				</dd>
			</dl>
		</div>
		<div class="btn_order_submit">
			<strong class="btn_head">
				<em class="user_level_x6">Gold<br>III</em>
				<span>
					Gold Ⅲ 멤버십까지 1,200xp가 남았습니다.<br>
					구매 후 리뷰를 작성하면 200xp경험치를 얻을 수 있습니다. 
				</span>
			</strong>
			<ul class="side_btn_list">
				<li class="btn_hover_a"><a href="#">취소</a></li>
				<li class="active"><a href="#">결제하기</a></li>
			</ul>
		</div>
		<script>
			// 결제 정보 탭
    		$(function(){
    			$(".payment_list .payment_child").sectionDisplay({
    				act : "click",
    				start:0,
    				nav : $('.payment_list .payment_nav'),
    				auto: false
    			});
    		});
		</script>
	</article>
</section>
<?php include "../inc/footer.php" ?>