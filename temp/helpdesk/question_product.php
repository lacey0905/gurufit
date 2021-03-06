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
					<li class="active"><a href="#">1:1문의</a></li>
					<li><a href="#">공지사항</a></li>
				</ul>
			</div>
		</section>
		<section id="service">
			<form action="">
			<fieldset>
				<legend class="blind">1:1 문의</legend>
    			<div class="tit_sub_wrap">
    				<h3 class="tit_head tit_sub_b">1:1 문의</h3>
    				<dl class="tit_opt select_sort">
        				<dt class="blind">카테고리</dt>
        				<dd>
        					<span>문의하실 유형을 선택해주세요.</span>
        					<div class="sel_custom sel_nm_box sel_small">
        						<select>
        							<option>문의 유형 선택</option>
        						</select>
        					</div>
        				</dd>
        			</dl>
    			</div>
				<div class="board_write_wrap">
					<table class="product prd_list_a">
    					<caption class="blind">장바구니</caption>
    					<colgroup>
    						<col class="col_thum">
    						<col class="col_cont">
    						<col class="col_btn">
    					</colgroup>
    					<tbody>
    						<tr>
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
    								<p class="price">
    									<strong>184,000원</strong>
    									<del>199,000원</del>
    								</p>
    							</td>
    							<td class="btn">
    								<ul class="prd_list_btn">
										<!-- <li><a href="#" class="btn_ btn_x_s2 btn_rnd_x1 btn_hover_a btn_np2">장비구니에 담기</a></li> -->
									</ul>
    							</td>
    						  </tr>
    					 </tbody>
    				</table>
	    			<div class="q_txt_title">
	    				<input type="text" name="title" class="q_txt_title_ip" placeholder="제목을 입력해 주세요.">
	    			</div>    				 
					<textarea rows="" cols="" class="txtarea_a" placeholder="문의하실 내용을 입력해 주세요."></textarea>		
				</div>
				<div class="form_submit_wrap">
					<div class="form_submit_r">
						<a href="#" class="btn_ btn_xl_l1 btn_hover_shadow submit">확인</a>
					</div>
				</div>
			</fieldset>
			<style>
				.select_sort dd span {
					color: #BBBBBB;	
					font-size: 14px;	
					line-height: 23px;	
					text-align: right;
					display:inline-block;
					vertical-align:middle;
					margin-right:9px;
					padding-bottom:7px;
				}
				.q_txt_title .q_txt_title_ip {
					height: 50px;
					width:1100px;
					border-top:1px solid #DDDDDD;
					border-left:1px solid #DDDDDD;
					border-right:1px solid #DDDDDD;
					background-color:#f9f9fc;
					text-indent:25px;
				}
				.q_txt_title input::-webkit-input-placeholder { /* Chrome/Opera/Safari */
					color: #BBBBBB;	
					font-size: 14px;	
					line-height: 23px;		  
				}
				.q_txt_title input::-moz-placeholder { /* Firefox 19+ */
					color: #BBBBBB;	
					font-size: 14px;	
					line-height: 23px;					
				}
				.q_txt_title input:-ms-input-placeholder { /* IE 10+ */
					color: #BBBBBB;	
					font-size: 14px;	
					line-height: 23px;					
				}
				.q_txt_title input:-moz-placeholder { /* Firefox 18- */
					color: #BBBBBB;	
					font-size: 14px;	
					line-height: 23px;					
				}
			</style>			
			</form>
		</section>
	</article>
</section>
<?php include "../inc/footer.php" ?>
 