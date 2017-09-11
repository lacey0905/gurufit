<?php include "../inc/header.php" ?>
<!-- 모달 팝업 -->
<!-- 모달팝업 부모 앨리먼트 -->
<!-- 
    팝업의 그림자가 모든 팝업에 1개만 적용 되어야 하기 때문에  [f_modal_perant] 앨리먼트를 별도로 껏다켰다를 반복 해야 합니다.
    따라서 팝업이 1개 이상 보여져야 할 경우에는   [f_modal_perant] 앨리먼트에 [open] 클래스를 추가 합니다.
-->
<div class="f_modal_perant">

	<!-- 모달 팝업 우선순위 [z1 ~ z6]까지 클래스로 만들어 놓았습니다. [z6]이 가장 우선순위가 높습니다. -->
	<!-- 디자인상 팝업마다 그림자가 투명하게 들어가 있습니다. 때문에 팝업이 겹칠 경우에는  [f_modal_shadow]를 가장 하위 우선순위 팝업에만 적용 해야 합니다.-->
	
	<div class="f_modal_layer big f_modal_shadow">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>멤버십 등급을 올리 수 있는 방법</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont cr_modal_cont">
					<article>
						<table  class="mem_list xp_list_tb">
							<colgroup>
								<col width="100">
								<col width="100">
								<col width="150">
								<col width="*">
							</colgroup>
							<thead>
								<tr>
									<th>종류</th>
									<th>제공 경험치</th>
									<th>방법</th>
									<th>설명</th>
								</tr>
							</thead>
							<tbody>
								<tr class="mem_list_line">
									<td class="icon_tit">
										<i class="icon-mouse"></i>
										정보제공
										<br>
										(1회한정)
									</td>
									<td>
										<ul class="check_list">
											<li><del>100xp</del></li>
											<li><del>100xp</del></li>
											<li><del>200xp</del></li>
											<li><del>200xp</del></li>
											<li class="null">&nbsp;</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list">
											<li><del>이메일수신동의</del></li>
											<li><del>카카오톡플러스친구추가</del></li>
											<li><del>프로필서베이제출</del></li>
											<li><del>선호도서베이제출</del></li>
											<li class="null">&nbsp;</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list_b">
											<li><del>이메일 수신에 동의 하면 경험치가 올라갑니다.</del></li>
											<li><del>GuruFit을 카카오톡 플러스친구로 추가하면 경험치가 올라갑니다.</del></li>
											<li><del>발 치수 정보를 저장하면 경험치가 올라갑니다.</del></li>
											<li><del>신발 카테고리, 브랜드, 패션 스타일 등 선호 정보를 입력하면<br>경험치가 올라갑니다.</del></li>
										</ul>
									</td>
								</tr>
								<tr class="mem_list_line">
									<td class="icon_tit">
    									<i class="icon-bag"></i>
    									상품구매
									</td>
									<td>
										<ul class="check_list">
											<li>100xp</li>
											<li>100xp</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list">
											<li>상품구매</li>
											<li>프리미엄 상품 구매</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list_b">
											<li>GuruFit에서 상품을 구매하면 경험치가 올라갑니다.</li>
											<li>프리미엄 상품을 구매하면 경험치가 올라갑니다.</li>
										</ul>
									</td>
								</tr>
								<tr class="mem_list_line">
									<td class="icon_tit">
    									<i class="icon-note"></i>
    									리뷰등록
									</td>
									<td>
										<ul class="check_list">
											<li>100xp</li>
											<li>100xp</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list">
											<li>구매 상품평 등록</li>
											<li>베스트 상품평 등극</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list_b">
											<li>구매 상품 리뷰를 등록하면 경험치가 올라갑니다.</li>
											<li>등록한 리뷰가 베스트 리뷰로 선정되면 경험치가 올라갑니다.</li>
										</ul>
									</td>
								</tr>
								<tr class="mem_list_line">
									<td class="icon_tit">
    									<i class="material-icons">&#xE410;</i>
    									사진등록
									</td>
									<td>
										<ul class="check_list">
											<li>100xp</li>
											<li>100xp</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list">
											<li>사진 등록</li>
											<li>베스트 사진 등극</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list_b">
											<li>구매 상품 착용사진의 등록이 완료되면 경험치가 올라갑니다.</li>
											<li>등록한 착용사진이 베스트 Pic.으로 선정되면 경험치가 올라갑니다.</li>
										</ul>
									</td>
								</tr>
								<tr class="mem_list_line">
									<td class="icon_tit">
    									<i class="icon-link"></i>
    									소셜공유
									</td>
									<td>
										<ul class="check_list">
											<li>100xp</li>
											<li>100xp</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list">
											<li>구매 내역 소셜 공유</li>
											<li>가입 추천</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list_b">
											<li>구매 내역을 SNS에 공유하면 경험치가 올라갑니다.</li>
											<li>추천인 링크로 가입한 회원이 첫 구매를 마치면 경험치가 올라갑니다.</li>
										</ul>
									</td>
								</tr>
								<tr class="mem_list_line">
									<td class="icon_tit">
    									<i class="icon-diamond"></i>
    									사이트방문
									</td>
									<td>
										<ul class="check_list">
											<li>20xp</li>
											<li>20xp</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list">
											<li>사이트 방문</li>
											<li>이메일링크로 사이트방문</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list_b">
											<li>
												웹사이트 방문 시 경험치가 올라갑니다.(주 1회)
<!-- 												<div class="count_gauge_wrap">
													<strong>
														남은 사이트 방문 :<em>4회</em>
													</strong>
													<div class="progress_a prog">
                    									<div class="prog_wrap">
                    										<div class="prog_mask">
                        										<div class="prog_bar" style="width:80%;"></div>
                        									</div>
                    									</div>
                    								</div>
												</div> -->
											</li>
											<li>이메일 링크를 통한 사이트를 방문하면 경험치가 올라갑니다.</li>
										</ul>
									</td>
								</tr>
							</tbody>
						</table>																																															
					</article>					
        		</div>
        		<div class="f_modal_foot">
        			<div class="f_modal_btn btn_x2 cd_modal_foot">     			
        				<a href="#" class="btn_ btn_xl_l2">닫기</a>
        			</div>		
        		</div>
    		</div>
		</div>
	</div>
	<!-- 모달 팝업 그림자 -->
	<div class="f_modal_blind"></div>
</div>
<!-- 모달 팝업 END -->
<!-- /////// -->
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
			<h2>My Page</h2>
			<div class="tab_active_type ">
    			<ul>
    				<li><a href="#">대시보드</a></li>
    				<li class="active"><a href="#">멤버십</a></li>
    				<li><a href="#">알림</a></li>
    				<li><a href="#">새로운 활동</a></li>
    				<li><a href="#">하트 리스트</a></li>
    				<li><a href="#">히스토리</a></li>
    				<li><a href="#">1:1문의</a></li>
    				<li><a href="#">개인정보 설정</a></li>
    				<li><a href="#">구매내역</a></li>										
    			</ul>
    		</div>
		</section>
		<h3 class="tit_sub_a">멤버쉽</h3>
		<section class="membership_dash my_mem_badge_area">
			<h4 class="tit_sub_c">나의 멤버쉽 등급<span>전체 멤버십 등급 혜택 확인</span></h4>
			<div class="membership_cont">
    			<div class="ms_level">
    				<strong class="badge_level bronze">
    					<span>BRONZE<br>I</span>
    				</strong>
    				<span class="user_name">
    					<em>KimHayoung</em>
    					님의 멤버쉽 I
    				</span>
    				<span class="date">
    					발행일 : 2017.07.12  /  유효기간 : 2018. 08. 12
    				</span>
    			</div>
    			<div class="ms_gauge">
    				<strong class="membership_tit">경험치 현황</strong>
    				<div class="deps_gauge_wrap">
    					<strong class="deps_gauge_msg">
    						다음 등급 <em>Silver III</em> 까지 <em>1000xp</em> 남음
    					</strong>
    					<div class="deps_gauge">
    						<div class="current" style="width:50%;">
    							<div class="msg_box_a level_info">
        							<span class="msg">1000xp</span>
        							<div class="shadow"></div>
        						</div>
    						</div>		
    						<div class="target" style="width:75%;"></div>
    					</div>
    					<strong class="deps_gauge_msg">
    						현재 등급 유지에 필요한 경험치 <em>800xp</em> 남음
    					</strong>
    				</div>
    				<dl class="level_up_guide">
    					<dt><a href="#">경험치를 얻을 수 있는 방법</a></dt>
    					<dd><a href="#">구매 상품평 등록</a></dd>
    					<dd><a href="#">구매 상품 View 등록</a></dd>
    					<dd><a href="#">구매 내역 공유</a></dd>
    					<dd><a href="#">추천인 회원 가입</a></dd>
    					<dd><a href="#">이메일 수신 동의</a></dd>
    					<dd class="more"><a href="#">더보기</a></dd>
    				</dl>
    			</div>
    			<div class="ms_icon">
    				<strong class="membership_tit">멤버쉽 혜택</strong>
    				<div class="fun_badge_list">
    					<ul class="type_b">
    						<li>
    							<img src="../img/membership_icon_01.png" alt="">
    							<span>
    								<em>90일 이내</em>
    								무료 교환/반품
    							</span>
    						</li>
    						<li>
    							<img src="../img/membership_icon_01.png" alt="">
    							<span>
    								<em>상시 할인</em>
    								3%
    							</span>
    						</li>
    						<li>
    							<img src="../img/membership_icon_01.png" alt="">
    							<span>
    								<em>업그레이드</em>
    								기념 쿠폰
    							</span>
    						</li>
    						<li>
    							<img src="../img/membership_icon_01.png" alt="">
    							<span>
    								<em>신상품 조기 접근</em>
    								3순위
    							</span>
    						</li>
    						<li>
    							<img src="../img/membership_icon_01.png" alt="">
    							<span>
    								<em>할인 상품 조기 접근</em>
    								2순위
    							</span>
    						</li>
    					</ul>
    				</div>
    			</div>
			</div>
			<div class="membership_foot">
				<strong class="next_level">
    				<a href="#">다음 등급 혜택<em>Silver III</em></a>
				</strong>
				<ul class="membership_link">
					<li><a href="#">&#183;&nbsp;90일 이내 무료 교환/반품</a></li>
					<li><a href="#">&#183;&nbsp;당일 출고</a></li>
					<li><a href="#">&#183;&nbsp;상시할인 1.5%</a></li>
					<li><a href="#">&#183;&nbsp;선구매 기회 3순위</a></li>
					<li><a href="#">&#183;&nbsp;등업 기념 쿠폰</a></li>
				</ul>
			</div>
		</section>
		<h3 class="tit_sub_a">나의 뱃지</h3>
		<section class="my_badge_box">
			<h4 class="tit_sub_c">나의 멤버쉽 등급</h4>
			<div class="my_badge_inner">
    			<ul class="my_badge_list">
    				<li>
    					<img src="../img/review-1.png" alt="" class="my_badge_icon">
    					<strong class="my_badge_name">리뷰</strong>
    					<span class="my_badge_msg">
    						처음으로 '가장 도움 되는 상품평'에<br>선정 되었습니다.
    					</span>
    				</li>
    				<li class="active">
    					<img src="../img/review-1.png" alt="" class="my_badge_icon">
    					<strong class="my_badge_name">리뷰</strong>
    					<span class="my_badge_msg">
    						처음으로 '가장 도움 되는 상품평'에<br>선정 되었습니다.
    					</span>
    					<em class="my_badge_select">공개 뱃지로 설정중</em>
    					<div class="my_badge_tip">
    						<p>다른 회원이 이 뱃지를 보게 됩니다.</p>
    					</div>
    				</li>
    				<li>
    					<img src="../img/review-1.png" alt="" class="my_badge_icon">
    					<strong class="my_badge_name">리뷰</strong>
    					<span class="my_badge_msg">
    						처음으로 '가장 도움 되는 상품평'에<br>선정 되었습니다.
    					</span>
    				</li>
    			</ul>
    			<dl class="my_badge_next">
    				<dt><strong>다음 도전</strong></dt>
    				<dd><a href="#">더블 엄지척!</a></dd>
    				<dd><a href="#">샷 파이브</a></dd>
    				<dd><a href="#">핫 링크</a></dd>
    			</dl>
			</div>
		</section>
		
		<section class="my_fun_badge">
			<h4 class="tit_sub_c">재미 뱃지</h4>
			<div class="my_fun_inner">
				<ul class="my_fun_list">
					<li class="active">
						<img src="../img/fun_badge_01.png" alt="">
						<em>엄지척x10</em>
						<span>2017. 07. 20</span>
						<div class="my_badge_tip">
							<p>
								<img src="../img/fun_badge_01.png" alt="">
								<strong>다중노출</strong>
								<em>한 개의 상품에 4장 이상 사진을 등록한 사용자만이 받을 수 있는 재미뱃지 입니다.</em>
							</p>
    					</div>
					</li>
					<li class="active">
						<img src="../img/fun_badge_01.png" alt="">
						<em>엄지척x10</em>
						<span>2017. 07. 20</span>
						<div class="my_badge_tip">
							<p>
								<img src="../img/fun_badge_01.png" alt="">
								<strong>다중노출</strong>
								<em>한 개의 상품에 4장 이상 사진을 등록한 사용자만이 받을 수 있는 재미뱃지 입니다.</em>
							</p>
    					</div>
					</li>
					<li>
						<img src="../img/off_badge_01.png" alt="">
						<em>엄지척x10</em>
						<span>미획득</span>
						<div class="my_badge_tip">
							<p>
								<img src="../img/fun_badge_01.png" alt="">
								<strong>다중노출</strong>
								<em>한 개의 상품에 4장 이상 사진을 등록한 사용자만이 받을 수 있는 재미뱃지 입니다.</em>
							</p>
    					</div>
					</li>
					<li>
						<img src="../img/off_badge_01.png" alt="">
						<em>엄지척x10</em>
						<span>미획득</span>
						<div class="my_badge_tip">
							<p>
								<img src="../img/fun_badge_01.png" alt="">
								<strong>다중노출</strong>
								<em>한 개의 상품에 4장 이상 사진을 등록한 사용자만이 받을 수 있는 재미뱃지 입니다.</em>
							</p>
    					</div>
					</li>
					<li>
						<img src="../img/off_badge_01.png" alt="">
						<em>엄지척x10</em>
						<span>미획득</span>
						<div class="my_badge_tip">
							<p>
								<img src="../img/fun_badge_01.png" alt="">
								<strong>다중노출</strong>
								<em>한 개의 상품에 4장 이상 사진을 등록한 사용자만이 받을 수 있는 재미뱃지 입니다.</em>
							</p>
    					</div>
					</li>
					<li>
						<img src="../img/off_badge_01.png" alt="">
						<em>엄지척x10</em>
						<span>미획득</span>
						<div class="my_badge_tip">
							<p>
								<img src="../img/fun_badge_01.png" alt="">
								<strong>다중노출</strong>
								<em>한 개의 상품에 4장 이상 사진을 등록한 사용자만이 받을 수 있는 재미뱃지 입니다.</em>
							</p>
    					</div>
					</li>
				</ul>
			</div>
		</section>
	</article>
</section>
<?php include "../inc/footer.php" ?>