<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1">
    <meta name="description" content="微行天下帮助企业快速通过微信获得生意，推广企业品牌。" />
    <title>会员卡</title>
    <link rel="stylesheet"  href="jquery.mobile-1.3.1.min.css">
    <link rel="stylesheet"  href="usercard.css?t=10">
    <script src="jquery-1.10.0.min.js"></script>
    <script src="usercard.js"></script>
    <script src="jquery.mobile-1.3.1.min.js"></script>
</head>

<body>
    <div id="cardPage" data-role="page">
        <div data-role="popup" id="confirmDialog" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px;min-width:250px;" class="ui-corner-all">
            <div data-role="header" data-theme="b" class="ui-corner-top">
                <h1 class="confirm_title" style="min-width: 100px">使用优惠券</h1>
            </div>
            <div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
                <p class="confirm_content">使用一次就要少一次哦.使用一次就要少一次哦.使用一次就要少一次哦.使用一次就要少一次哦.</p>
                <p style="text-align: right">
                    <div class="button click_cancel" data-role="button" _data-inline="true" data-theme="b">取消</div>
                    <div class="button click_ok" data-role="button" _data-inline="true" data-transition="flow" data-theme="d">确定</div>
                </p>
            </div>
        </div>
        
        <div data-role="popup" id="alertDialog" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px; min-width:250px;" class="ui-corner-all">
            <div data-role="header" data-theme="b" class="ui-corner-top">
                <h1 class="alert_title" style="min-width: 100px">标题</h1>
            </div>
            <div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
                <p class="alert_content">使用成功啦！</p>
                <div class="button click_ok" data-role="button" _data-inline="true" data-theme="b">确定</div>
            </div>
        </div>
        
        <div data-role="popup" id="alertDialog" class="ui-corner-all">
            <div data-role="content" data-theme="d" class="ui-corner-bottom ui-content">
                <p>你确定要使用这个优惠券吗？</p>
                <a href="#" data-role="button" data-inline="true">确定</a>
                <a href="#" data-role="button" data-inline="true" data-rel="back" data-transition="flow">取消</a>
            </div>
        </div>
        <div data-role="content" class="page-content">
            <!--欢迎等待界面-->
            <div class="wellcome">
                <p><a href="#card">go!!!</a>正在努力加载会员卡</p><p>稍等哈... ...</p>
            </div>
            <!--会员卡主界面-->
            <div class="index" id="cardBox" data-weixin-open-id="oDfzMjkHamkVNvrd3LDRAaHyFbp4">
            	<!--头部占位-->
                <div class="page-head">
                    <div class="page-head-line"></div>
                </div>
                <div class="card">
                    <div class="card-side sideA" style="background:url('images/vip-bg03.png'); background-size:100%">
                        <div class="card-name">杭州卡迪娱乐</div>
                        <img class="card-logo" src="images/c87fee531771b5612a1899bdd8d23517_248_122.png" width="88" height="88" />
                        <div class="card-no">No.10000064</div>
                    </div>
                    <div class="card-side Curr sideB" style="background:url('images/vip-bg03.png');background-size:100%">
                        <a class="card-item card-address" style="width:90%" href="#">地址： 杭州市 西湖区 申花路789号剑桥公社A座3F</a>
                        <a class="card-item card-tel" href="tel:0571-88991010 ?">电话： 0571-88991010 ?</a>
                        <a class="card-item card-tel2" href="tel:0571-88859195">电话： 0571-88859195</a>
						                        <div class="card-sayhi">杭州卡迪娱乐</div>
                    </div>
                    <div class="card-light"></div>
                </div>
                <!--优惠券-->
                                                <div class="part coupon">
                    <div class="part-head coupon-head">最新会员优惠活动</div>
                                    <div class="coupon-box" data-role="collapsible-set" data-collapsed-icon="arrow-d" data-expanded-icon="arrow-u" data-iconpos="right" data-content-theme="d">
                        <!--一个优惠券开始-->
                                                <div class="coupon-item" data-marketing-id="51b496358e7f3048" data-role="collapsible" data-collapsed="true">
                            <h3>
                                <div class="title">
                                    <span class="icon"></span>
                                    <div class="tiltline">
                                        <span class="text">微信包厢费现金劵50元</span>
		                            			                            	<span class="status">
		                            																							剩<span id="remain-chance-51b496358e7f3048" class="remain-count"> 2</span> 次
																							                            			                            			                            	</span>
		                            		                                    
                                    </div>
                                </div>	                            
                            </h3>
                            <!--//优惠券内容-->	                            
                            <div class="coupon-item-content">
                            使用说明：凭次微信到柜台兑换一张价值<strong><span style="color:#E53333;">50元现金卷</span></strong><span style="color:#E53333;"><br />
<span style="color:#333333;">支持店面：<span style="color:#E53333;"><strong>紫金港店 汽车城店</strong></span><strong></strong></span></span><br />
备注：优惠劵当日不可以使用仅供下次使用，不可与任何优惠劵团购劵合并使用
                            </div>                               
                            <!--//操作区域-->                                
                        	                               <div class="coupon-item-control">
                                   <div id="coupon-verbox-51b496358e7f3048" class="coupon-verbox">
                                       <div class="verbox-tip">请商家输入验证码</div>
                                       <input class="verbox-input" name="vercode" type="text" placeholder="请商家输入验证码" value="" data-clear-btn="true">
                                   	<div class="button-ver" data-marketing-id="51b496358e7f3048" data-type="2" data-role="button">验证</div>
                                   </div>                                    
                               </div>
		                    <div id="success-51b496358e7f3048" class="coupon-item-control" style="display: none;">
		                        <div style="color:#6F9F0A;text-align:center;">验证成功</div>
		                        <div class="button-ok" data-marketing-id="51b496358e7f3048" data-role="button">继续使用</div>
		                    </div>
                        								<!--发放型-->
							                        </div>
                                                <div class="coupon-item" data-marketing-id="51b4cbd144379090" data-role="collapsible" data-collapsed="true">
                            <h3>
                                <div class="title">
                                    <span class="icon"></span>
                                    <div class="tiltline">
                                        <span class="text">置换实体会员卡只要19元</span>
		                            			                            	<span class="status">
		                            																							剩<span id="remain-chance-51b4cbd144379090" class="remain-count"> 2</span> 次
																							                            			                            			                            	</span>
		                            		                                    
                                    </div>
                                </div>	                            
                            </h3>
                            <!--//优惠券内容-->	                            
                            <div class="coupon-item-content">
                            原价：38元<br />
凭微信会员卡领取只需要在补交工本费19元即可领取<br />
会员特权：会员享受专属活动，包厢费8.8折、当日庆生赠送庆生礼包、第一时间了解最新优惠活动、定期赠送优惠劵。<br />
                            </div>                               
                            <!--//操作区域-->                                
                        	                               <div class="coupon-item-control">
                                   <div id="coupon-verbox-51b4cbd144379090" class="coupon-verbox">
                                       <div class="verbox-tip">请商家输入验证码</div>
                                       <input class="verbox-input" name="vercode" type="text" placeholder="请商家输入验证码" value="" data-clear-btn="true">
                                   	<div class="button-ver" data-marketing-id="51b4cbd144379090" data-type="2" data-role="button">验证</div>
                                   </div>                                    
                               </div>
		                    <div id="success-51b4cbd144379090" class="coupon-item-control" style="display: none;">
		                        <div style="color:#6F9F0A;text-align:center;">验证成功</div>
		                        <div class="button-ok" data-marketing-id="51b4cbd144379090" data-role="button">继续使用</div>
		                    </div>
                        								<!--发放型-->
							                        </div>
                                            </div>
                    <div class="part-foot coupon-foot">
                    </div>                    
                </div>             
                                
                <!--会员卡说明-->
                                
                <div class="part records">
                    <div class="part-head records-head">我的消费记录</div>
                    <div class="records-box">                                           
                        <ul id="recordsList" data-role="listview">
                        		                            <li class="noRecords">暂无消费记录</li>
	                                                    
                        </ul>
                    </div>
                    <div class="part-foot coupon-foot">
                </div>
                <!--拖动加载消费记录的提示-->
                <div id="divLoadRecords" class="records-loading" data-record-page="1" data-record-per-page="5">
                                    </div>
                
            </div>
        </div>
        </div>
        <div data-role="footer" data-tap-toggle="false" data-position="fixed" data-theme="a" style="height: 30px; border-top: 0px; background: url(images/bg-mokuai.jpg) repeat-x left; ">
	<div class="scrollDiv" style="float: left; width: 62%;  color:#fff; text-shadow: black 0px 1px 0px ;float:left;overflow: hidden;">
		<ul style="margin-top:0;font-size: 12px; padding-left:5px;">

		</ul>
	 </div>
	 
	 	 <div class="footer_logo"><a  style=" text-decoration: none; color: #AAFF00; font-size:12px;font-family: '宋体'; font-weight: lighter;" href="http://m.bama555.com/" target="_blank">微行天下技术支持</a></div>
	 </div>
<style type="text/css">
.scrollDiv {
    height: 25px;
    line-height: 25px;
    margin-top: 10px;
    overflow: hidden;
	text-overflow: ellipsis;
    white-space: nowrap;
}

.scrollDiv li {
    height: 25px;
}

.scrollDiv ul, .scrollDiv li {
    list-style-type: none;
}
.footer_logo{
    float: right; 
    width: 35%; 
    text-align: right;
    margin: 5px 5px auto auto;
}
</style>


<script type="text/javascript">
$(function() {
	
	AutoScroll = (function(obj){
		$(obj).find("ul:first").animate({
			marginTop:"-25px"
		},500,function(){
			$(this).css({marginTop:"0px"}).find("li:first").appendTo(this);
		});
	});
	if($('.scrollDiv li').length >1){
	   setInterval('AutoScroll(".scrollDiv")',4000);
	}
});
</script>
        
    </div>
</body>
</html>