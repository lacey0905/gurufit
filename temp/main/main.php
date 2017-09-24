<?php include "../inc/header.php" ?>

<script>
$(function(){

	var hei = $(".gauge_slide_banner figure img").height();

	$("#dualTopSlide").height(hei);
	
	var slideElem = $('#dualTopSlide #front');
	var mainBanner = new Swiper(slideElem, {
		 pagination: '.swiper-pagination',
        direction: 'vertical',
        slidesPerView: 1,
        paginationClickable: true,
      //  mousewheelControl: true,
        parallax: true,
        initialSlide:0,
        speed:1000,
        autoHeight:true,
        loop:true,
        simulateTouch:false,
        autoHeight:true,
    });

	var slideElem2 = $('#dualTopSlide #back');
	
	var mainBanner2 = new Swiper(slideElem2, {
		 pagination: '.swiper-pagination',
        direction: 'vertical',
        slidesPerView: 1,
        paginationClickable: true,
      //  mousewheelControl: true,
        parallax: true,
        initialSlide:2,
        speed:1000,
        autoHeight:true,
        loop:true,
        simulateTouch:false,
        autoHeight:true,
    });	
    /*
	setInterval(function(){
		mainBanner.slideNext();
		mainBanner2.slidePrev();
	}, 5000);
	*/

	$("#dualTopSlide").height("auto");

	mainBanner.onResize ();
	
	var bnrHei = 0;
	$(window).resize(function(){
		
		
	});

});

</script>

<style>
    #dualTopSlide {
    }
    #dualTopSlide > .swiper-container {
        width:50%;
        float:left;
    }
    #dualTopSlide .swiper-slide {
     position:relative;
        overflow:hidden;
    }
    #dualTopSlide figcaption {
    }
</style>

<!-- 
<script>
    $(function(){

    	// 설치 할 슬라이드 엘리먼트
		var slideElem = $('#mainTopSlide .swiper-container');
    	var currentIndex = 0; // 현재 슬라이드 인덱스
    	var slideLength = slideElem.find(".swiper-slide").length - 1; // 슬라이드 전체 갯수
    	// 슬라이드가 마지막 인지 검사
		var slideLast = function(cur, length){
			if(currentIndex >= slideLength){
				$("#mainTopSlide .swiper-pagination").addClass("last");
            }
		}
		// 슬라이드가 마지막이 아닐 경우 검사
		var slideNotLast = function(cur, length){
			if(currentIndex < slideLength){
            	$("#mainTopSlide .swiper-pagination").removeClass("last");
            }
		}
		// 슬라이드 인덱스 갱신
		var setCurrentIdx = function(cur){
			currentIndex = cur + 1;
		} 
    	var mainBanner = new Swiper(slideElem, {
            //pagination: '#cartSlide .swiper-pagination',
            paginationClickable: true,
            slidesPerView: 2,
            pagination: '#mainTopSlide .swiper-pagination',
            paginationType: 'progress',
            resistanceRatio:0,
            //loop:true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            parallax: true,
            speed:1000,
            onInit(swiper){
            	// 인덱스 갱신
            	setCurrentIdx(swiper.realIndex);
				// 마지막이 아닌지 체크
				slideNotLast(currentIndex, slideLength);
            },
            onTransitionStart(swiper){
            	// 인덱스 갱신
            	setCurrentIdx(swiper.realIndex);
            	// 마지막이 아닌지 체크
            	slideNotLast(currentIndex, slideLength);

            	console.log("current : " + currentIndex + " / " + "length : " + slideLength);
            },
            onTransitionEnd(swiper){
                // 마지막 슬라이드 인지 체크
            	slideLast(currentIndex, slideLength);
            },
        });
    });
</script>
 -->
<section id="main">

	<div id="dualTopSlide" class="gauge_slide_banner">
		<div class="tit">
			Featured Contents
			<span class="tit_arr_line l_left"></span>
			<span class="tit_arr_line l_right"></span>
		</div>
		<div id="front" class="swiper-container">
    		<ul class="swiper-wrapper">
    			<li class="swiper-slide">
    				<figure class="bnr_left">
    					<img src="../img/m1.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption data-swiper-parallax="-600" data-swiper-parallax-duration="600">
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
    				<figure class="bnr_left">
    					<img src="../img/m2.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption data-swiper-parallax="-600" data-swiper-parallax-duration="600">
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
    					<img src="../img/m1.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption data-swiper-parallax="-1000" data-swiper-parallax-duration="600">
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
    					<img src="../img/m2.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption data-swiper-parallax="-1000"  data-swiper-parallax-duration="600">
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
    					<img src="../img/m2.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption data-swiper-parallax="-1000"  data-swiper-parallax-duration="600">
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

<!-- 
	<div id="mainTopSlide" class="gauge_slide_banner">
		<div class="swiper-container">
			<div class="tit">
    			Featured Contents
    			<!-- 
    			<span class="tit_arr_line l_left"></span>
    			<span class="tit_arr_line l_right"></span>
    			 --
    		</div>
    		<div class="swiper-pagination"></div>
    		<!-- Add Arrows --
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    		<ul class="swiper-wrapper">
    			<li class="swiper-slide">
    				<figure class="bnr_left">
    					<img src="../img/m1.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption  data-swiper-parallax-duration="600">
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
    					<img src="../img/m2.png" alt="바타의 2017년 여름시즌 룩북촬영" />
    					<figcaption data-swiper-parallax="0"  data-swiper-parallax-duration="600">
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
    				<figure class="bnr_left">
    					<img src="../img/m1.png" alt="바타의 2017년 여름시즌 룩북촬영" data-swiper-parallax="0" />
    					<figcaption data-swiper-parallax="0"  data-swiper-parallax-duration="600">
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
    					<img src="../img/m2.png" alt="바타의 2017년 여름시즌 룩북촬영" data-swiper-parallax="0"/>
    					<figcaption data-swiper-parallax="0"  data-swiper-parallax-duration="600">
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
-->


	<article class="bnr_box_type blind">
		<ul>
			<li>
				<h2>
					Featured Contents
					<span class="tit_arr_line l_left"></span>
					<span class="tit_arr_line l_right"></span>
				</h2>
				<figure class="bnr_left">
					<img src="../img/m1.png" alt="바타의 2017년 여름시즌 룩북촬영" />
					<figcaption>
						<a href="#">
							<h3>룩북</h3>
							<h4>바타의 2017년 여름시즌<br>룩북촬영</h4>
							<p>
								By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
								<strong>바타를 발라버려.</strong>
							</p>
							<span class="hash"># Bata  #바타  #발라  #여름시즌  #2017</span>
						</a>
					</figcaption>
				</figure>
				<figure class="bnr_right">
					<img src="../img/m2.png" alt="바타의 2017년 여름시즌 룩북촬영" />
					<figcaption>
						<a href="#">
    						<h3>룩북</h3>
    						<h4>바타의 2017년 여름시즌 룩북촬영</h4>
    						<p>
    							By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
    							<strong>바타를 발라버려.</strong>
    						</p>
    						<span class="hash"># Bata  #바타  #발라  #여름시즌  #2017</span>
						</a>
					</figcaption>
				</figure>
			</li>
		</ul>
	</article>
	<!-- 
	<article class="bnr_box_type swiper-container">
		<h2>
			Featured Contents
			<span class="tit_arr_line l_left"></span>
			<span class="tit_arr_line l_right"></span>
		</h2>
		<ul class="swiper-wrapper">
			<li class="swiper-slide">
				<figure class="bnr_left">
					<img src="../img/m1.png" alt="바타의 2017년 여름시즌 룩북촬영" />
					<figcaption>
						<a href="#">
							<h3>룩북</h3>
							<h4>바타의 2017년 여름시즌<br>룩북촬영</h4>
							<p>
								By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
								<strong>바타를 발라버려.</strong>
							</p>
							<span class="hash"># Bata  #바타  #발라  #여름시즌  #2017</span>
						</a>
					</figcaption>
				</figure>
			</li>
			<li class="swiper-slide">
				<figure class="bnr_right">
					<img src="../img/m2.png" alt="바타의 2017년 여름시즌 룩북촬영" />
					<figcaption>
						<a href="#">
    						<h3>룩북</h3>
    						<h4>바타의 2017년 여름시즌 룩북촬영</h4>
    						<p>
    							By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
    							<strong>바타를 발라버려.</strong>
    						</p>
    						<span class="hash"># Bata  #바타  #발라  #여름시즌  #2017</span>
						</a>
					</figcaption>
				</figure>
			</li>
			<li class="swiper-slide">
				<figure class="bnr_left">
					<img src="../img/m1.png" alt="바타의 2017년 여름시즌 룩북촬영" />
					<figcaption>
						<a href="#">
							<h3>룩북</h3>
							<h4>바타의 2017년 여름시즌<br>룩북촬영</h4>
							<p>
								By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
								<strong>바타를 발라버려.</strong>
							</p>
							<span class="hash"># Bata  #바타  #발라  #여름시즌  #2017</span>
						</a>
					</figcaption>
				</figure>
			</li>
			<li class="swiper-slide">
				<figure class="bnr_right">
					<img src="../img/m2.png" alt="바타의 2017년 여름시즌 룩북촬영" />
					<figcaption>
						<a href="#">
    						<h3>룩북</h3>
    						<h4>바타의 2017년 여름시즌 룩북촬영</h4>
    						<p>
    							By <em>Jin Hong Park</em>&nbsp;&middot;&nbsp;2017.05.10<br>
    							<strong>바타를 발라버려.</strong>
    						</p>
    						<span class="hash"># Bata  #바타  #발라  #여름시즌  #2017</span>
						</a>
					</figcaption>
				</figure>
			</li>
		</ul>
	</article>
	 -->
	<article class="custom_inner custom_prd prd_type_a">
		<h2>Recommanded Contents</h2>
		<ul class="x4">
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
			<li>
				<a href="#">
					<figure>
						<img src="../img/prd_sample.png" alt="샘플상품">
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
						<img src="../img/prd_sample.png" alt="샘플상품">
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
