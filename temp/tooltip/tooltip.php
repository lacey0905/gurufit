<?php include "../inc/header.php" ?>

<section>
	<!-- 배송조회 -->
	<div class="tooltip_wrapper">
		<div class="ship_check_w">
		  <div class="ship_check_c">
			<div class="ship_check_i">
				<h4>배송 조회</h4>
				<strong>상품이 <em>배송중(입고)</em> 상태입니다.</strong>
				<div class="ship_check_d">
					<dl class="invoice_num">
						<dt>송장번호</dt>
						<dd>877228702560</dd>
					</dl>
					<ul class="dil_com">
						<li>택배사 <span>KG로지스</span></li>
						<li>대표번호 <span>1588-0123</span></li>
					</ul>
				</div>
				<div class="ship_check_tb">
					<table class="ship_check_tb_i">
						<colgroup>
							<col width="132">
							<col width="124">
							<col width="115">
						</colgroup>
						<thead>
							<tr>
								<th>처리일시</th>
								<th>현재위치</th>
								<th>상태</th>
							</tr>
							<tr>
								<td>2017-08-17<br>03:32:00</td>
								<td>이천터미널</td>
								<td>상태</td>
							</tr>
							<tr>
								<td>2017-08-17<br>03:32:00</td>
								<td>이천터미널</td>
								<td>상태</td>
							</tr>							
						</thead>
					</table>
				</div>
				<p>
					본 정보는 스윗트래커에서 제공받는 정보로, 실제 배송상황과 다를 수 있습니다.
				</p>
			</div>
		  </div>	
		</div>
<style>		
.tooltip_wrapper {
	position:relative;
	height:1000px;
}
.ship_check_w {
	top:30px;
	left:100px;
	width:370px;
	position:absolute;	
}
.ship_check_c {
	background-color:#fff;
	width:370px;
	border: 1px solid #DDDDDD;
	border-radius: 5px;
}
.ship_check_c:after {
	content: " ";
    position: absolute;
    top: -7px;
    right: 57px;
    display: inline-block;
    width: 15px;
    height: 15px;
    background-color: #fff;
    border: solid 1px #DDDDDD;
    border-bottom: 0;
    border-right: 0;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);	
}
.ship_check_i {
	text-align:center;
}
.ship_check_i h4 {
	color: #000000;	
	font-size: 18px;	
	line-height: 27px;
	margin-top:28px;
	position:relative;
}
.ship_check_i h4:after {
    content: " ";
    position: absolute;
    top:36px;
    left:50%;
    width:1px;
    height:20px;
    border-left: solid 1px #979797;	
}
.ship_check_i strong {
	display:inline-block;
	margin-top:50px;
	margin-bottom:22px;
	color: #232122;		
	font-size: 22px;	
	line-height: 20px;	
	text-align: center;
}
.ship_check_i strong em {
	color: #71ca9c;		
	font-size: 22px;	
	line-height: 20px;	
	text-align: center;	
}
.ship_check_d {
	padding:0 32px;
}
/*송장번호*/
.ship_check_d .invoice_num{
	text-align:left;
}
.ship_check_d .invoice_num dt {
	display:inline-block;
	color: #000000;
	font-size: 13px;	
	line-height: 25px;	
}
.ship_check_d .invoice_num dd {
	display:inline-block;
	color: #b9b9b9;
	font-size: 13px;	
	line-height: 25px;	
}
/*택배사*/
.ship_check_d .dil_com{
}
.ship_check_d .dil_com li {
	color: #000000;
	font-size: 13px;	
	line-height: 25px;	
}
.ship_check_d .dil_com li span {
	color: #b9b9b9;
	font-size: 13px;	
	line-height: 25px;		
}
.ship_check_d .dil_com li:nth-child(1){
	float:left;
}
.ship_check_d .dil_com li:nth-child(2){
	float:right;
	margin-right:12px;
}
.ship_check_d .dil_com li:nth-child(2) span {
	color:#696969;
	text-decoration:underline;
}
/*테이블*/
.ship_check_tb {
	margin-top:50px;
}
.ship_check_tb_i {
	border-collapse: collapse;
	cellpadding:0; 
	cellspacing:0;
}
.ship_check_tb_i tr {
	border-bottom:1px solid #ececee;
}
.ship_check_tb_i tr th {
	border-top:1px solild #ececee;
	border-bottom:1px solild #ececee;
	background-color:#f3f2f7;
	padding:11px 0;
	color: #232122;
	font-size: 14px;	
	line-height: 20px;
}
.ship_check_tb_i tr td {
	color: #747474;
	font-size: 14px;	
	line-height: 20px;	
	text-align: center;
	padding:12px 0;	
}
.ship_check_i p {
	padding:17px 41px;
	color: #9B9B9B;
	font-size: 12px;	
	line-height: 18px;
	text-align:left;	
}
</style>		
		
		
	<!-- 선물용 툴팁 -->
	<div class="ps_text_w">
		<div class="ps_text_c">
			<p>
			생일 축하해 140자 이내라 이만 줄일께...생일축하해 140자 이내라 이만 줄일께...생일축하해 140자 이내라 이만 줄일께...<br>
			생일 축하해 140자 이내라 이만 줄일께...생일축하해 140자 이내라 이만 줄일께...생일축하해 140자 이내라 이만 줄일께...	
			</p>
		</div>
	</div>
	<style>
	.ps_text_w {
		position:absolute;
		top:600px;
		left:10%;		
	}
	.ps_text_w .ps_text_c {
		width: 962px;	
		border: 1px solid #ECECF3;	
		border-radius: 5px;	
		background-color: #F9F9FC;
	}
	.ps_text_w .ps_text_c:after {
		content: " ";
	    position: absolute;
	    top: -7px;
	    left: 33px;
	    display: inline-block;
	    width: 15px;
	    height: 15px;
	    background-color: #F9F9FC;
	    border: solid 1px #ECECF3;
	    border-bottom: 0;
	    border-right: 0;
	    -ms-transform: rotate(45deg);
	    -webkit-transform: rotate(45deg);
	    transform: rotate(45deg);	
	}
	.ps_text_w .ps_text_c p {
		padding:12px 0 12px 12px;
		color: #4A4A4A;		
		font-size: 14px;	
		line-height: 25px;		
	}
	</style>
	
	<div class="good_review_w">
		<div class="good_review_c">
			<div class="good_review_i">
				<dl>
					<dt><img src="../img/g_review.png" alt="이미지">좋은 리뷰를 작성하는 방법</dt>
					<dd>-리뷰를 작성하기 전,제품을 충분히 사용해 주세요.</dd>
					<dd class="gr_line">-제품의 기능에 초점을 맞추고 구체적으로 작성해주세요.</dd>	
					<dt><img src="../img/g_review.png" alt="이미지">적절하지 않은 내용</dt>
					<dd>-가격,프로모션 정보와 같이 자주 변경되는 정보</dd>
					<dd>-부적절한 용어 사용</dd>
					<dd>-다른 회사 및 웹사이트 광고</dd>
					<dd>-개인정보</dd>
				</dl>
			</div>
		</div>
	</div>
	<style>
		.good_review_w {
			position:absolute;
			top:40px; 
			right:100px;
		}
		.good_review_c {
			width: 320px;	
			border: 1px solid #DDDDDD;	
			border-radius: 5px;	
			background-color: #FFFFFF;	
			box-shadow: 8px -8px 1px 0 rgba(0,0,0,0.09);
			padding:21px 14px 13px 19px;		
		}
		.good_review_c:after {
			 content: " ";
			 position: absolute;
			 top: 222px;
			 left: 159px;
			 display: inline-block;
			 width: 15px;
			 height: 15px;
			 background-color: #fff;
			 border: solid 1px #DDD;
			 border-bottom: 0;
			 border-right: 0;
			 -ms-transform: rotate(135deg);
			 -webkit-transform: rotate(135deg);
			 transform: rotate(-135deg);			
		}
		.good_review_i dt {
			color: #000000;	
			font-family: "Noto Sans CJK KR";	
			font-size: 14px;	
			line-height: 20px;
			margin-bottom:8px;			
		}
		.good_review_i dt img {
			display:inline-block;
			width:18px;
			height:16px;
			vertical-align:middle;
			margin-right:11px;
		}
		.good_review_i dd {
			color: #9B9B9B;		
			font-size: 13px;	
			line-height: 20px;		
		}
		.good_review_i .gr_line {
			margin-bottom:18px;
		}
	</style>
			
		
		
</div>




	
	
</section>


