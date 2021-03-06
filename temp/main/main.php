<?php include "../inc/header.php" ?>
<script>
$(function(){
	var slideHei = 0;
	
	// 스와이퍼 설치 전 이미지 세로 값 저장 
	slideHei = $("#dualTopSlide figure img").height();
	// 스와이퍼의 세로를 이미지 세로로 지정
	$("#dualTopSlide").height(slideHei);
		
	// 첫 번째 슬라이드
	var slideFront = $('#dualTopSlide #front');
	slideFront = new Swiper(slideFront, {
		pagination: '.swiper-pagination',
        direction: 'vertical',
        slidesPerView: 1,
		paginationClickable: true,
        parallax: true,
        initialSlide:0,
        speed:1500,
        autoHeight:true,
        loop:true,
        simulateTouch:false,
        autoHeight:true,
        onTransitionEnd(swiper){
        },
    });

    function color_check(){
    	getImageLightness("../img/m2.png",function(brightness){
    	    console.log("color : " + brightness);
			if(brightness > 100){
				$(".gauge_slide_banner .tit").css("color","white");
			} else {
				$(".gauge_slide_banner .tit").css("color","black");
			}
    	});
    }
    
	// 두 번째 슬라이드
	var slideBack = $('#dualTopSlide #back');
	slideBack = new Swiper(slideBack, {
		pagination: '.swiper-pagination',
        direction: 'vertical',
        slidesPerView: 1,
        paginationClickable: true,
        parallax: true,
        initialSlide:2,
        speed:1500,
        autoHeight:true,
        loop:true,
        simulateTouch:false,
        autoHeight:true,
    });	

	// 게이지 앨리먼트
	var dualBnrGauge = $("#dualTopSlide .tit .l_left");
	// 배너 시작
	function dualBnrStart(){
		$(".gauge_slide_banner .tit").removeClass("empty");
		dualBnrGauge.stop().animate({
	    	width:100 + "%",
	    }, 7000, function() {
		    // 100% 되면 Full 클래스 추가
	    	dualBnrFull();
			// 기다렸다가 0%로 리셋
	    	dualBnrWait("reset");
	    });
	}
	// 배너 리셋
	function dualBnrReset(){
		$(".gauge_slide_banner .tit").removeClass("full");
		dualBnrGauge.stop().animate({
	    	width:0 + "%",
	    }, 800, function() {
		    // 0%가 되면 Empty 클래스 추가
	    	dualBnrEmpty();
	    	// 기다렸다가 배너 재시작
	    	dualBnrWait("start");
	    });
	}
	// 배너 액션
	function dualBnrWait(type){
		setTimeout(function(){
			if(type == "reset"){
				dualBnrReset();
				slideFront.slideNext();
		    	slideBack.slidePrev();
			} else {
				dualBnrStart();
			}
		}, 200);
	}
	
	function dualBnrFull(){
		$(".gauge_slide_banner .tit").addClass("full");
	}

	function dualBnrEmpty(){
		$(".gauge_slide_banner .tit").addClass("empty");
	}

	$(".gauge_slide_banner .control_prev").bind("click", function(){
		dualBnrWait("reset");
	});
	$(".gauge_slide_banner .control_next").bind("click", function(){
		dualBnrWait("reset");
	});
	$(window).resize(function(){
		// 화면이 리사이즈 되면 슬라이드 이미지의 새로를 다시 받아 옴
		slideHei = $("#dualTopSlide figure img").height();
		// 슬라이드의 세로를 재정의
		$("#dualTopSlide").height(slideHei);
		// 스와이퍼 업데이트
		slideBack.onResize();
		slideFront.onResize();
	});

	dualBnrStart();


	
});


function getImageLightness(imageSrc,callback) {
    var img = document.createElement("img");
    img.src = imageSrc;
    img.style.display = "none";
    document.body.appendChild(img);

    var colorSum = 0;

    img.onload = function() {
        // create canvas
        var canvas = document.createElement("canvas");
        canvas.width = this.width;
        canvas.height = this.height;

        var ctx = canvas.getContext("2d");
        ctx.drawImage(this,0,0);

        var imageData = ctx.getImageData(0,0,canvas.width,canvas.height);
        var data = imageData.data;
        var r,g,b,avg;

        for(var x = 0, len = data.length; x < len; x+=4) {
            r = data[x];
            g = data[x+1];
            b = data[x+2];

            avg = Math.floor((r+g+b)/3);
            colorSum += avg;
        }

        var brightness = Math.floor(colorSum / (this.width*this.height));
        callback(brightness);
    }
}


</script>



<section id="main">
	<div id="dualTopSlide" class="gauge_slide_banner">
		<div class="controls">
			<a href="#none" class="control_btn control_prev">Prev</a>
			<a href="#none" class="control_btn control_next">Next</a>
		</div>
		<div class="tit">
			Featured Contents
			<span class="tit_arr_line l_left"></span>
			<span class="tit_arr_line l_right"></span>
		</div>
		<div id="front" class="swiper-container">
    		<ul class="swiper-wrapper">
    			<li class="swiper-slide">
    				<figure class="bnr_left">
    					<img src="../img/temp_01.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption data-swiper-parallax="-300" data-swiper-parallax-duration="1500">
    						<h3>룩북</h3>
    						<h4><a href="#">바타의 2017년 여름시즌<br>룩북촬영</a></h4>
    						<p>
    							By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
    							<strong>바타를 발라버려.</strong>
    						</p>
    						<span class="hash">
    							<span>#Bata</span>
    							<span>#바타</span>
    							<span>#발라</span>
    							<span>#여름시즌</span>
    							<span>#2017</span>
    					</figcaption>
    				</figure>
    			</li>
    			<li class="swiper-slide">
    				<figure class="bnr_left">
    					<img src="../img/m2.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption data-swiper-parallax="-300" data-swiper-parallax-duration="1500">
    						<h3>룩북</h3>
    						<h4><a href="#">바타의 2017년 여름시즌<br>룩북촬영</a></h4>
    						<p>
    							By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
    							<strong>바타를 발라버려.</strong>
    						</p>
    						<span class="hash"># Bata  #바타  #발라  #여름시즌  #2017</span>
    					</figcaption>
    				</figure>
    			</li>
    		</ul>
		</div>
		<div id="back" class="swiper-container">
    		<ul class="swiper-wrapper">
    			<li class="swiper-slide">
    				<figure class="bnr_right">
    					<img src="../img/m2.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption data-swiper-parallax="-300" data-swiper-parallax-duration="1500">
    						<h3>룩북</h3>
    						<h4><a href="#">바타의 2017년 여름시즌<br>룩북촬영</a></h4>
    						<p>
    							By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
    							<strong>바타를 발라버려.</strong>
    						</p>
    						<span class="hash"># Bata  #바타  #발라  #여름시즌  #2017</span>
    					</figcaption>
    				</figure>
    			</li>
    			<li class="swiper-slide">
    				<figure class="bnr_right">
    					<img src="../img/m1.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption data-swiper-parallax="-300"  data-swiper-parallax-duration="1500">
    						<h3>룩북</h3>
    						<h4><a href="#">바타의 2017년 여름시즌<br>룩북촬영</a></h4>
    						<p>
    							By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
    							<strong>바타를 발라버려.</strong>
    						</p>
    						<span class="hash"># Bata  #바타  #발라  #여름시즌  #2017</span>
    					</figcaption>
    				</figure>
    			</li>
    		</ul>
		</div>
	</div>
	<article class="custom_inner custom_prd prd_type_a">
		<h2>Recommanded Contents</h2>
		<ul class="x3">
			<li class="type_a">
				<a href="#">
					<figure>
						<img src="../img/sample_content2.jpg" alt="샘플상품">
						<figcaption>
							<span class="kind">인터뷰</span>
							<span class="like">74</span>
							<span class="subject">나이키랩줌플라이SP 국내발매예정일공개</span>
							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
						</figcaption>
					</figure>
				</a>
			</li>
			<li class="type_c">
				<a href="#">
					<figure>
						<img src="../img/sample_content2.jpg" alt="샘플상품">
						<figcaption>
							<span class="kind">인터뷰</span>
							<span class="like">74</span>
							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
						</figcaption>
					</figure>
				</a>
			</li>
			<li class="type_d">
				<a href="#">
					<figure>
						<img src="../img/sample_content2.jpg" alt="샘플상품">
						<figcaption>
							<span class="kind">인터뷰</span>
							<span class="like">74</span>
							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
						</figcaption>
					</figure>
				</a>
			</li>
			<li class="type_b">
				<a href="#">
					<figure>
						<img src="../img/sample_content2.jpg" alt="샘플상품">
						<figcaption>
							<span class="kind">인터뷰</span>
							<span class="like">74</span>
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
						<img src="../img/sample_content2.jpg" alt="샘플상품">
						<figcaption>
							<span class="kind">인터뷰</span>
							<span class="like">74</span>
							<span class="subject">나이키랩 줌 플라이 SP 국내 발매 예정일 공개</span>
							<span class="name_date">By&nbsp;<em>Jin Hong Park</em><i>&nbsp;&middot;&nbsp;</i>May 10.2017</span>
							<span class="hash">#부스트 #DPR #퓨어부스트 #도심</span>
						</figcaption>
					</figure>
				</a>
			</li>
		</ul>
	</article>
	<article class="custom_prd prd_type_b prd_type_bgc">
		<h2>
			<!-- <a href="#" class="more btn_hover_a">자세히 보기</a>  -->
			<em class="user_name">Kimhayoung</em>
			님의 구루핏 활동에 바탕한 추천상품
		</h2>
		<div id="relatedProduct" class="slide_prd swiper-container">
    		<div class="swiper-wrapper">
        		<ul class="x4 swiper-slide">
        			<li>
        				<a href="#">
        					<figure>
            					<span class="thum"><img src="../img/store_sample_255x177.png" alt="샘플상품"></span>
            					<div class="rating">
            						<span class="sale">Sale 40%</span>
            						<strong class="star_rating">
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_off"></i>
           							</strong>
            						<span class="cnt">(29)</span>
            						<span class="like">74</span>
            					</div>
            					<figcaption>
            						<span class="subject">NIKE FREE 5.0</span>
            						<span class="price">
            							<strong class="sell_price">89,100<em>원</em></strong>
            							<del class="customer_price">99,000원</del>
            						</span>
            					</figcaption>
        					</figure>
        				</a>
        			</li>				
        			<li>
        				<a href="#">
        					<figure>
            					<span class="thum"><img src="../img/store_sample_255x177.png" alt="샘플상품"></span>
            					<div class="rating">
            						<span class="sale">Sale 40%</span>
            						<strong class="star_rating">
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_off"></i>
           							</strong>
            						<span class="cnt">(29)</span>
            						<span class="like">74</span>
            					</div>
            					<figcaption>
            						<span class="subject">NIKE FREE 5.0</span>
            						<span class="price">
            							<strong class="sell_price">89,100<em>원</em></strong>
            							<del class="customer_price">99,000원</del>
            						</span>
            					</figcaption>
        					</figure>
        				</a>
        			</li>				
        			<li>
        				<a href="#">
        					<figure>
            					<span class="thum"><img src="../img/store_sample_255x177.png" alt="샘플상품"></span>
            					<div class="rating">
            						<span class="sale">Sale 40%</span>
            						<strong class="star_rating">
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_off"></i>
           							</strong>
            						<span class="cnt">(29)</span>
            						<span class="like">74</span>
            					</div>
            					<figcaption>
            						<span class="subject">NIKE FREE 5.0</span>
            						<span class="price">
            							<strong class="sell_price">89,100<em>원</em></strong>
            							<del class="customer_price">99,000원</del>
            						</span>
            					</figcaption>
        					</figure>
        				</a>
        			</li>				
        			<li>
        				<a href="#">
        					<figure>
            					<span class="thum"><img src="../img/store_sample_255x177.png" alt="샘플상품"></span>
            					<div class="rating">
            						<span class="sale">Sale 40%</span>
            						<strong class="star_rating">
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_off"></i>
           							</strong>
            						<span class="cnt">(29)</span>
            						<span class="like">74</span>
            					</div>
            					<figcaption>
            						<span class="subject">NIKE FREE 5.0</span>
            						<span class="price">
            							<strong class="sell_price">89,100<em>원</em></strong>
            							<del class="customer_price">99,000원</del>
            						</span>
            					</figcaption>
        					</figure>
        				</a>
        			</li>				
        			<li>
        				<a href="#">
        					<figure>
            					<span class="thum"><img src="../img/store_sample_255x177.png" alt="샘플상품"></span>
            					<div class="rating">
            						<span class="sale">Sale 40%</span>
            						<strong class="star_rating">
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_off"></i>
           							</strong>
            						<span class="cnt">(29)</span>
            						<span class="like">74</span>
            					</div>
            					<figcaption>
            						<span class="subject">NIKE FREE 5.0</span>
            						<span class="price">
            							<strong class="sell_price">89,100<em>원</em></strong>
            							<del class="customer_price">99,000원</del>
            						</span>
            					</figcaption>
        					</figure>
        				</a>
        			</li>				
        			<li>
        				<a href="#">
        					<figure>
            					<span class="thum"><img src="../img/store_sample_255x177.png" alt="샘플상품"></span>
            					<div class="rating">
            						<span class="sale">Sale 40%</span>
            						<strong class="star_rating">
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_off"></i>
           							</strong>
            						<span class="cnt">(29)</span>
            						<span class="like">74</span>
            					</div>
            					<figcaption>
            						<span class="subject">NIKE FREE 5.0</span>
            						<span class="price">
            							<strong class="sell_price">89,100<em>원</em></strong>
            							<del class="customer_price">99,000원</del>
            						</span>
            					</figcaption>
        					</figure>
        				</a>
        			</li>				
        			<li>
        				<a href="#">
        					<figure>
            					<span class="thum"><img src="../img/store_sample_255x177.png" alt="샘플상품"></span>
            					<div class="rating">
            						<span class="sale">Sale 40%</span>
            						<strong class="star_rating">
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_off"></i>
           							</strong>
            						<span class="cnt">(29)</span>
            						<span class="like">74</span>
            					</div>
            					<figcaption>
            						<span class="subject">NIKE FREE 5.0</span>
            						<span class="price">
            							<strong class="sell_price">89,100<em>원</em></strong>
            							<del class="customer_price">99,000원</del>
            						</span>
            					</figcaption>
        					</figure>
        				</a>
        			</li>				
        			<li>
        				<a href="#">
        					<figure>
            					<span class="thum"><img src="../img/store_sample_255x177.png" alt="샘플상품"></span>
            					<div class="rating">
            						<span class="sale">Sale 40%</span>
            						<strong class="star_rating">
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_off"></i>
           							</strong>
            						<span class="cnt">(29)</span>
            						<span class="like">74</span>
            					</div>
            					<figcaption>
            						<span class="subject">NIKE FREE 5.0</span>
            						<span class="price">
            							<strong class="sell_price">89,100<em>원</em></strong>
            							<del class="customer_price">99,000원</del>
            						</span>
            					</figcaption>
        					</figure>
        				</a>
        			</li>				
        		</ul>		
        		<ul class="x4 swiper-slide">
        			<li>
        				<a href="#">
        					<figure>
            					<span class="thum"><img src="../img/store_sample_255x177.png" alt="샘플상품"></span>
            					<div class="rating">
            						<span class="sale">Sale 40%</span>
            						<strong class="star_rating">
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_on"></i>
            							<i class="star_off"></i>
           							</strong>
            						<span class="cnt">(29)</span>
            						<span class="like">74</span>
            					</div>
            					<figcaption>
            						<span class="subject">NIKE FREE 5.0</span>
            						<span class="price">
            							<strong class="sell_price">89,100<em>원</em></strong>
            							<del class="customer_price">99,000원</del>
            						</span>
            					</figcaption>
        					</figure>
        				</a>
        			</li>				
        		</ul>	
    		</div>
            <!-- Add Arrows -->
            <div class="control">
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
	</article>

    <!-- 메인 상품 진열 슬라이드 -->
    <script>
    var swiper = new Swiper('#relatedProduct', {
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    });
    </script>
	
	<article class="lookbook_type">
		<dl>
			<dt>
				<i>Lookbook</i>
				<strong>바타의 2017년<br> 여름시준 룩북 촬영</strong>
				<p>
					By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
					<em>바타를 발라버려.</em><br>
					<span class="hash">#Beta #바타 #발라 #여름시즌 #2017</span>
				</p>
				<a href="#" class="more btn_type_more btn_hover_a">자세히보기</a>
			</dt>
			<dd><a href="#"><img src="../img/lookbook_bnr_01.png" alt="lookbook"></a></dd>
			<dd><a href="#"><img src="../img/lookbook_bnr_02.png" alt="lookbook"></a></dd>
			<dd><a href="#"><img src="../img/lookbook_bnr_03.png" alt="lookbook"></a></dd>
			<dd class="big"><a href="#"><img src="../img/lookbook_bnr_04.png" alt="lookbook"></a></dd>
		</dl>
	</article>
	<article class="vote_bnr">
		<h2>투표</h2>
		<h3>니가 진짜로 원하는게 뭐야?</h3>
		<h4>Jordan&nbsp;&nbsp;VS&nbsp;&nbsp;Kobe</h4>
		<p>
			시그니쳐 농구화란 유명 농구 선수들의 이름을 달고 나오는 농구화들을 의미합니다.<br>
			에어 조던 시리즈, 줌 코비 시리즈, 줌 르브론 시리즈 등이 여기에 해당됩니다.<br>
                           우리는 여기서 갈등하게 됩니다.<br>
                           내가 진짜 원하는 농구화는 뭐지?
		</p>
		<img src="../img/vote_bnr.png" alt="Jordan VS Kobe" class="banner">
		<a href="#" class="vote btn_type_more btn_hover_a">투표하기</a>
	</article>
	<article class="custom_inner prd_type_a btn_x_m1">
		<h2>Recent Contents</h2>
		<ul class="x4">
			<li>
				<a href="#">
					<figure>
						<img src="../img/prd_sample.png" alt="샘플상품">
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
		<a href="#" class="btn_more_big btn_hover_a">더보기</a>
	</article>
</section>
<?php include "../inc/footer.php" ?>
