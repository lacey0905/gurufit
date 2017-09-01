<style>
	.guru_profile_info {
	}
	.guru_profile_info h4 {
		position: relative;
		font-weight: bold;
		font-size: 35px;
		text-align: center;
		color: #000;
		line-height: 55px;
		padding: 30px 0px;
		margin-bottom: 30px;
	}
	.guru_profile_info h4:after {
		content: " ";
		position: absolute;
		left: 50%;
		bottom: 0;
		width: 1px;
		height: 16px;
		border-left: solid 1px #979797;
	}
	.guru_p_inner {
		margin-bottom:40px;	
	}
	.guru_p_inner:after {
		content:"";
		display:block;
		clear:both;
	}
	.guru_p_inner ul li {
		float:left;
	}
	.guru_p_tag {
		width:360px;
	}
	.guru_p_tag > p {
		color: #9B9B9B;	
		font-size: 13px;	
		line-height: 18px;
		margin-top: 67px;					
	}
	.guru_p_tag > em {
		color: #BBBBBB;	
		font-size: 13px;	
		line-height: 15px;
		margin-top:12px;
		margin-bottom:18px;
		display:inline-block;					
	}
	.guru_p_tag .hash li {
		display:inline-block;
		margin: 0 6px 6px 0;
	}
	.guru_p_tag .hash li a {
		display: block;
		min-width: 52px;
		font-size: 14px;
		line-height: 28px;
		color: #9B9B9B;
		text-align: center;
		background-color: #F0F0F0;
		padding:0 15px;
		border-radius:5px;
	}
	.guru_p_pho {
		margin-left:48px;
	}
	.guru_p_pho img {
		width:300px;
		height:300px;
	}
	.guru_p_button {
		margin-top:130px;
		margin-left:34px;	
	}
	.guru_p_button span {
		display:inline-block;
		color: #BBBBBB;	
		font-size: 12px;	
		line-height: 15px;	
		text-align: right;
		margin-right:13px;					
	}
	.guru_p_button .btn {
		display:inline-block;
		width:140px;
		border-radius:3px;
		background-color:#7053FF;
		text-align:center;					
	}
	.guru_p_button .btn:hover {
		box-shadow: 3px 3px 0 0 #e6e1ff;					
	}
	.guru_p_button .btn a {
		display:block;
		padding-top:9px;
		padding-bottom:9px;
		text-align:center;
		color: #FFFFFF;		
		font-size: 15px;	
		line-height: 22px;	
		text-align: center;					
	}
	.guru_f_cont .tab_info_count {
		display:table;
		width:100%;
		padding: 45px 0 37px;
		border:solid 1px #ebebeb;
	}
	.guru_f_cont .tab_info_count li {
		display:table-cell;
		width:33%;
		text-align:center;
		padding-bottom:10px;
		border-left: solid 1px #ebebeb;
	}
	.guru_f_cont .tab_info_count li:first-child {
		border-left:0;
	}
	.guru_f_cont .tab_info_count .cate {
		display:block;
		font-size: 16px;
		font-weight: 400;
		line-height: 24px;
		color:#4a4a4a;
	}
	.guru_f_cont .tab_info_count .count {
		display:block;
		font-size:70px;
		color:#000;
		line-height:103px;
	}					
</style>
<?php include "../inc/header.php" ?>
<section id="member" class="sub_layout">
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
		<section id="mypage">
			<div class="guru_profile_info">
				<h4>언니네 이발소</h4>
				<div class="guru_p_inner">
					<ul>
						<li class="guru_p_tag">
							<p>
								슈즈 블로거 언니네이발소가 제안하는 유니크한 자수 디테일이<br>
								매력적인 자라 청바지 스타일링 데님의 변신은 과연 어디까지<br>
								기대하시라
							</p>
							<em>등록 2017년 8월 12일</em>
							<ul class="hash">
								<li><a href="#">#부스트</a></li>
								<li><a href="#">#아디다스</a></li>
								<li><a href="#">#도심</a></li>
								<li><a href="#">#탐험</a></li>
								<li><a href="#">#탐험</a></li>
								<li><a href="#">#탐험</a></li>
							</ul>
						</li>
						<li class="guru_p_pho">
							<img src="../img/guru_profile_photo.png" alt="샘플상품">
						</li>
						<li class="guru_p_button">
							<span>
								구루를 팔로우 하면 새로운 콘텐츠를<br>
								가장 빨리 받아볼 수 있습니다.
							</span>
							<div class="btn"><a href="#">팔로우</a></div>
						</li>
					</ul>
				</div>
			</div>
			<div class="tab_cont guru_f_cont">
				<ul class="tab_info_count">
					<li>
						<strong class="cate">콘텐츠</strong>
						<em class="count">172</em>
					</li>
					<li>
						<strong class="cate">팔로워</strong>
						<em class="count">36</em>
					</li>
					<li>
						<strong class="cate">도움</strong>
						<em class="count">84</em>
					</li>
				</ul>			
			</div>
			<div class="dash_tab_wrap">			
				<nav class="detail_nav">
					<div class="custom_inner">
						<ul>
							<li><a href="#none">최신 콘텐츠</a></li>
							<li class="active"><a href="#none">인기 콘텐츠</a></li>
						</ul>
					</div>
				</nav>
			</div>	
			<div class="prd_list_type">
                <article class="custom_prd prd_type_a">
            		<ul class="x4">
            			<li>
            				<a href="#">
            					<figure>
            						<img src="../img/hc_contents.png" alt="샘플상품">
            						<figcaption>
            							<span class="kind">인터뷰</span>
            							<span class="like"><strong class="up">52</strong><strong class="dw">4</strong></span>
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
            						<img src="../img/hc_contents.png" alt="샘플상품">
            						<figcaption>
            							<span class="kind">인터뷰</span>
            							<span class="like"><strong class="up">52</strong><strong class="dw">4</strong></span>
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
            						<img src="../img/hc_contents.png" alt="샘플상품">
            						<figcaption>
            							<span class="kind">인터뷰</span>
            							<span class="like"><strong class="up">52</strong><strong class="dw">4</strong></span>
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
            						<img src="../img/hc_contents.png" alt="샘플상품">
            						<figcaption>
            							<span class="kind">인터뷰</span>
            							<span class="like"><strong class="up">52</strong><strong class="dw">4</strong></span>
            							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
            							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
            							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
            						</figcaption>
            					</figure>
            				</a>
            			</li>
            		</ul>
            		<ul class="x4">
            			<li>
            				<a href="#">
            					<figure>
            						<img src="../img/hc_contents.png" alt="샘플상품">
            						<figcaption>
            							<span class="kind">인터뷰</span>
            							<span class="like"><strong class="up">52</strong><strong class="dw">4</strong></span>
            							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
            							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
            							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
            						</figcaption>
            					</figure>
            				</a>
            			</li>
            		</ul>                    		
            		<div class="prd_more">
            			<a href="#" class="btn_hover_a">더보기</a>
            		</div>                    		
                </article>	    										
			</div>		
		</section>
	</article>
	<script>
		// 결제 정보 탭
   		$(function(){
   			$(".dash_tab_wrap").sectionDisplay({
   				act : "click",
   				start:0,
   				nav : $('.dash_tab_wrap .detail_nav'),
   				auto: false
   			});
   		});
	</script>	
</section>
<?php include "../inc/footer.php" ?>