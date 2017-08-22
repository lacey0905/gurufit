<?php include "../inc/header.php" ?>
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
	<article class="sub_content custom_inner">
		<section class="sub_head">
			<h2>Help</h2>
			<div class="tab_active_type">
				<ul>
					<li><a href="#">FAQ</a></li>
					<li><a href="#">1:1문의</a></li>
					<li class="active"><a href="#">공지사항</a></li>
				</ul>
			</div>
		</section>
		<section id="mypage">
			<div class="tit_sub_wrap">
				<h3 class="tit_head tit_sub_b">공지사항</h3>
				<dl class="tit_opt select_sort">
    				<dt>정렬 기준</dt>
    				<dd>
    					<div class="sel_custom sel_nm_box sel_mid">
    						<select class="sel_mid">
    							<option>등록순서</option>
    						</select>
    					</div>
    				</dd>
    			</dl>
			</div>
			<div class="toggle_list_a">
				<h4 class="blind">1:1문의 리스트</h4>
				<ul>
					<li class="reply">
						<a href="#none">
							<span class="list_head_icon"><em class="icon_new">NEW</em></span>
							<strong class="subject">김하영님의 컬렉션과 일치하는 상품이 업데이트 되었습니다.</strong>
							<span class="list_head_opt">
								<em class="date">2017년 7월 20일</em>
								<em class="arr"></em>
							</span>
						</a>
						<div class="list_cont">
							<p class="toggle_cont toggle_fir">
                                                                           안녕하세요. 구루핏 입니다.<br/>
            					<br/>
                                2016년 9월 5일 적용 예정이었던 멤버십 약관 효력 및 개정, 기타 서비스 변경, 개인정보 수집/제공/활용 등<br/>
                    		        이용 약관 내용이 회사 내부 사정에 의해 연기됨에 따라 다시 재 안내드립니다.<br/>
             					<br/>
            					<br/>
                                1.변경항목 (멤버십 약관)<br/>
                              	변경 전	변경 후<br/>
             					<br/>
                                1장 4조 (멤버십 서비스 개요) 1항 1호<br/>
        						① 적립 서비스<br/>
        						회원은 당사와 제휴사에서 상품 또는 서비스 구입 시 나 이벤트 등에 의해 포인트를 적립 받을 수 있습니다. 단, 당사 및 제휴사의 사정에 따라 지정 된 일부 상품은 제외 될 수 있습니다.<br/>
         						<br/>
         						<br/>
         						<br/>
        						1장 4조 (멤버십 서비스 개요) 1항 4호<br/>  
							</p>
						</div>
					</li>
					<li class="reply">
						<a href="#none">
							<span class="list_head_icon"></span>
							<strong class="subject">김하영님의 컬렉션과 일치하는 상품이 업데이트 되었습니다.</strong>
							<span class="list_head_opt">
								<em class="date">2017년 7월 20일</em>
								<em class="arr"></em>
							</span>
						</a>
						<div class="list_cont">
							<p class="toggle_cont toggle_fir">
                                                                           안녕하세요. 구루핏 입니다.<br/>
            					<br/>
                                2016년 9월 5일 적용 예정이었던 멤버십 약관 효력 및 개정, 기타 서비스 변경, 개인정보 수집/제공/활용 등<br/>
                    		        이용 약관 내용이 회사 내부 사정에 의해 연기됨에 따라 다시 재 안내드립니다.<br/>
             					<br/>
            					<br/>
                                1.변경항목 (멤버십 약관)<br/>
                              	변경 전	변경 후<br/>
             					<br/>
                                1장 4조 (멤버십 서비스 개요) 1항 1호<br/>
        						① 적립 서비스<br/>
        						회원은 당사와 제휴사에서 상품 또는 서비스 구입 시 나 이벤트 등에 의해 포인트를 적립 받을 수 있습니다. 단, 당사 및 제휴사의 사정에 따라 지정 된 일부 상품은 제외 될 수 있습니다.<br/>
         						<br/>
         						<br/>
         						<br/>
        						1장 4조 (멤버십 서비스 개요) 1항 4호<br/>  
							</p>
						</div>
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
		</section>
	</article>
</section>
<script>
$(function(){
	// 게시판 토글 기능 설치
	// <li> 태그에 [reply] Class가 있어야만 토글 기능이 작동 합니다.
	toggleListActive($(".toggle_list_a > ul"));
});
</script>
<?php include "../inc/footer.php" ?>