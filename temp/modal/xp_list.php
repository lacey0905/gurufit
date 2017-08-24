<?php include "../inc/header.php" ?>

<!-- 모달 팝업 -->
<!-- 모달팝업 부모 앨리먼트 -->
<!-- 
    팝업의 그림자가 모든 팝업에 1개만 적용 되어야 하기 때문에  [f_modal_perant] 앨리먼트를 별도로 껏다켰다를 반복 해야 합니다.
    따라서 팝업이 1개 이상 보여져야 할 경우에는   [f_modal_perant] 앨리먼트에 [open] 클래스를 추가 합니다.
-->
<div class="f_modal_perant open">

	<!-- 모달 팝업 우선순위 [z1 ~ z6]까지 클래스로 만들어 놓았습니다. [z6]이 가장 우선순위가 높습니다. -->
	<!-- 디자인상 팝업마다 그림자가 투명하게 들어가 있습니다. 때문에 팝업이 겹칠 경우에는  [f_modal_shadow]를 가장 하위 우선순위 팝업에만 적용 해야 합니다.-->
	
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
	<div class="f_modal_layer big open">
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
								<col width="95">
								<col width="150">
								<col width="419">
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
<!-- 								<tr class="mem_list_line">
									<td class="icon_tit">
    									<i class="icon-envelope"></i>
    									이메일
									</td>
									<td>
										<ul class="check_list">
											<li>100xp</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list">
											<li>이메일 링크로 사이트 방문</li>
										</ul>
									</td>
									<td>
										<ul class="dot_list_b">
											<li>
												이메일 링크를 통한 사이트 방문이 10회가 되면 경험치가 올라갑니다.
												<div class="count_gauge_wrap">
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
												</div>
											</li>
										</ul>
									</td>
								</tr> -->
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
		<div class="f_modal_blind"></div>
	</div>
</section>
<?php include "../inc/footer.php" ?>