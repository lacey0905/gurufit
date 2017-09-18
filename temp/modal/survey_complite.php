<?php include "../inc/header.php" ?>
<section class="sub_layout">
	<div class="f_modal_layer">
		<div class="f_modal_wrap">
			<div class="f_modal_area">
        		<div class="f_modal_head">
        			<h2>설문 완료</h2>
        			<a href="#" class="btn_close">Close</a>
        		</div>
        		<div class="f_modal_cont servey_modal_cont">
        			<img src="../img/servey_com.png" alt="나이키" >
					<p>
					설문을 끝까지 마쳤습니다!<br>
					보답으로 경험치 <span>200xp</span>을 드립니다.
					</p>
        		</div>
        		<div class="f_modal_foot">
        				<div class="f_modal_btn btn_x2">
	        				<a href="#" class="btn_ btn_l_l1 btn_hover_a">그만하기</a>        			
	        				<a href="#" class="btn_ btn_l_l1 btn_cp btn_hover_shadow">설문 계속하기</a>
	        			</div>		
        		</div>
    		</div>
		</div>
		<style>
		.servey_modal_cont {
			padding:106px 180px 91px 180px;
			text-align:center;
		}
		.servey_modal_cont p {
			margin-top:26px;
			color: #4A4A4A;		
			font-size: 18px;	
			font-weight: 300;	
			line-height: 27px;	
			text-align: center;
		}
		.servey_modal_cont p span {
			color:#000;
			font-weight:600;
		}
		</style>
		<div class="f_modal_blind"></div>
	</div>
</section>
<?php include "../inc/footer.php" ?>