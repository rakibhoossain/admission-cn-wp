<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<section>
<footer id="footer-bot">


<div class="footer-sub1">
<div class="sociality">
<div class="footerul">
<h2>Find Us on:</h2><span class="Connect widthss"><a title="Facebook" class="facebook" href="https://www.facebook.com/helpstudyinchina" target="_blank"></a> <a title="Twitter" class="twitter" href="https://twitter.com/china_union" target="_blank"></a> <a title="Google+" class="youtube" href="https://plus.google.com/u/0/" target="_blank"></a> 
<a title="Linkedin" class="sinins" href="http://www.linkedin.com/in/studyinchina" target="_blank"></a><a title="Youku" class="youkus" href="http://i.youku.com/studyinchina" target="_blank"></a></span></div>
<div class="footerul">Free APP:<span class="Connect"><a title="Available on the App Store" class="appleios" href="https://itunes.apple.com/cn" target="_blank"></a> <a title="Available on Android" class="android" href="http://apk.hiapk.com/" target="_blank"></a></span></div>
<div class="footerul clears">
<h2>Stay Connected:</h2>
<form class="footer-sub2"><input name="keyword" class="inputsi" placeholder="Your email address" value="" type="text"> 
            
<input name="submit" title="submit" class="submits" value="Submit" type="submit"> 
          </form></div></div></div>
		  

  
  



<div class="footer-sub5">
<div class="footer-xini clearfix">
<div class="footer-xifl">
<div><a href="#/aboutus.html">About Us</a> ? <a href="#/Testimonials.html">Testimonials</a> 
? <a href="#/job-offer.html">Job Offer</a> ? <a href="#/feedback.html">Feedback</a> 
? <a href="#/privacy-policy.html">Privacy Policy</a> ? <a href="#/terms-of-use.html">Terms of Use</a> ? <a href="#/site-map.html">Site 
map</a> ? <a href="#/contact-us.html">Contact 
Us</a></div>
<div><a href="http://www.studyinchina.help/" target="_blank">Need Assistance? 
Have Questions?</a><!-- &nbsp;&nbsp;
            Skype: <a href="skype:www.admissions.cn?call">www.admissions.cn</a> -->&nbsp;&nbsp; 
           E-mail: <a href="mailto:Help@admissions.cn">Help@admissions.cn</a></div>
<p class="jicheng">Copyright &copy; 2015-<?php echo date('Y');?> <a href="#/"> Rakib</a> Inc. All Rights Reserved. <a href="http://www.miibeian.gov.cn/" target="_blank">?ICP?10029054-1?</a><span style="display: none;">
<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1253680717'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/z_stat.php%3Fid%3D1253680717' type='text/javascript'%3E%3C/script%3E"));</script><span id="cnzz_stat_icon_1253680717"></span><script src=" http://s11.cnzz.com/z_stat.php?id=1253680717" type="text/javascript"></script>
</span></p></div><!-- <div class="footer-xiri">
          <figure> <img src="/theme/img/footer/phones.png" width="199" height="45" alt="" title=""> </figure>
        </div> --> 
      </div></div></footer>
</section>

<section>
<div class="side-bar" id="share"><a style="display: block;" title="top" id="totop"></a><a title="Live Chat" class="tencent" onclick="openChat()" href="javascript:void(0)"></a><!-- <a href="skype:www.admissions.cn" target="_blank" class="skype" title="Skype"> </a> --> 
</div>
</section>











<script src="<?php bloginfo('template_url');?>/scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
     
<script src="<?php bloginfo('template_url');?>/scripts/setionfl.js" type="text/javascript"></script>
     
<script src="<?php bloginfo('template_url');?>/scripts/shcooltab2.js" type="text/javascript"></script>
     
<script src="<?php bloginfo('template_url');?>/scripts/Mobilehover.js" type="text/javascript"></script>
     
<script src="<?php bloginfo('template_url');?>/scripts/banner.js" type="text/javascript"></script>
     
<script src="<?php bloginfo('template_url');?>/scripts/jquery.nicescroll.js" type="text/javascript"></script>
     
<script src="<?php bloginfo('template_url');?>/scripts/jQselect.js" type="text/javascript"></script>
     <!-- <script type="text/javascript" src="theme/js/scrolltopcontrol.js"></script> --> 
    
<script src="<?php bloginfo('template_url');?>/scripts/Carousel.js" type="text/javascript"></script>
     
<script src="<?php bloginfo('template_url');?>/scripts/common.js" type="text/javascript"></script>
     
<script src="<?php bloginfo('template_url');?>/scripts/admissions.js" type="text/javascript"></script>
     
<script src="<?php bloginfo('template_url');?>/scripts/jquery.slides.min.js" type="text/javascript"></script>
 
<script type="text/javascript">
$(function(){

  $('#slides').slidesjs({
        width: 380,
        height: 80,
        play: {
          active: false,
          auto: true,
          interval: 5000,
          swap: true
        },
        navigation:false,
        pagination:false
      });
  $("#mynew").hover(function(){
          $("#isshow").show();
        });
        $("#mynew").mouseout(function(){
          $("#isshow").hide();
        });
        $("#mynew2").hover(function(){
          $("#isshow2").show();
        });
        $("#mynew2").mouseout(function(){
          $("#isshow2").hide();
        });
          //????
        $('.all-goods .item').hover(function(){
            $(this).addClass('active').find('s').hide();
            $(this).find('.product-wrap').show();
        },function(){
            $(this).removeClass('active').find('s').show();
            $(this).find('.product-wrap').hide();
        });
         $("#nav .tit").slide({
        type:"menu",
        titCell:".mod_cate",
        targetCell:".mod_subcate",
        delayTime:0,
        triggerTime:10,
        defaultPlay:false,
        returnDefault:true
    });
        /*/*/
        // for studnets
        $(".hephonediv li").each(function(i){
            $(this).click((function(k){
                var _index = k;
                return function(){
                    $(this).addClass("active").siblings().removeClass("active");
                    $(".hehides2").hide();
                    $(".hehides2:eq(" + _index + ")").show();
                }
            })(i));
        });

        $("#example-two .nav li").each(function(i){
            $(this).hover((function(k){
              var _index = k;
              return function(){
                $(this).addClass("licurrent").siblings().removeClass("licurrent");
                $(".smyul").hide();
                $(".smyul:eq(" + _index + ")").show();
              }
            })(i));
        });
        $("#example-two1 .nav li").each(function(i){
          $(this).hover((function(k){
              var _index = k;
              return function(){
                  $(this).addClass("licurrent2").siblings().removeClass("licurrent2");
                  $(".smyul2").hide();
                  $(".smyul2:eq(" + _index + ")").show();
              }
          })(i));
        });
        // banner scroll
        $('.banner').unslider({arrows:true,dots:true});
        $('.banner .dots').eq(1).hide();
        $('.banner .dot').mouseover(function(){
            $(this).closest('.banner').find('ul').stop();
            $(this).click();
        });
        $('.banner').hover(function(){
            $(this).toggleClass('hover');
        });
        //hot school
        $("#sucai").niceScroll({
          cursorcolor:"#0099d1",
          cursoropacitymax:1,
          touchbehavior:false,
          cursorwidth:"8px",
          cursorborder:"0",
          cursorborderradius:"8px"
        });
});
$(function(){
        $(window).scroll(function(){
            if($(window).scrollTop()>100){
                $("#side-bar .gotop").fadeIn();
            }
            else{
                $("#side-bar .gotop").hide();
            }
        });
        /*$("#side-bar .gotop").click(function(){
            $('html,body').animate({'scrollTop':0},500);
        });*/
    });
</script>
 
<script src="<?php bloginfo('template_url');?>/scripts/live800.js" type="text/javascript"></script>

<?php wp_footer(); ?>
</body></html>
