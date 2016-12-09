<script language="JavaScript" type="text/javascript" src="http://mocdn.web-12.com/js/superslide.2.1.js"></script>
<style>
    /* fullSlide */
    /*.fullSlide{width:100%;position:relative;height:625px;background:#000;}*/
    .fullSlide{width:100%;position:relative;min-width:1170px;height:625px;}
    .fullSlide .bdfullscreen{margin:0 auto;position:relative;z-index:0;overflow:hidden;}
    .fullSlide .bdfullscreen ul{width:100% !important;}
    .fullSlide .bdfullscreen li{width:100% !important;height:625px; background-position:center; background-repeat:no-repeat;overflow:hidden;text-align:center;}
    .fullSlide .bdfullscreen li a{display:block;height:625px;}
    .fullSlide .hdfullscreen{width:100%;position:absolute;z-index:1;bottom:0;left:0;height:30px;line-height:30px;}
    .fullSlide .hdfullscreen ul{text-align:center;}
    .fullSlide .hdfullscreen ul li{cursor:pointer;display:inline-block;*display:inline;zoom:1;width:42px;height:11px;margin:1px;overflow:hidden;background:#000;filter:alpha(opacity=50);opacity:0.5;line-height:999px;}
    .fullSlide .hdfullscreen ul .on{background:#f00;}
    .fullSlide .prev,.fullSlide .next{display:block;position:absolute;z-index:1;top:50%;margin-top:-30px;left:15%;z-index:1;width:40px;height:60px;background:url(public/image/slider-arrow.png) -126px -137px #000 no-repeat;cursor:pointer;filter:alpha(opacity=50);opacity:0.5;display:none;}
    .fullSlide .next{left:auto;right:15%;background-position:-6px -137px;}
</style>
<script type="text/javascript">
    $(function(){
        $(".fullSlide").hover(function(){
                $(this).find(".prev,.next").stop(true, true).fadeTo("show", 1.5)
            },
            function(){
                $(this).find(".prev,.next").fadeOut()
            });
        $(".fullSlide").slide({
            titCell: ".hdfullscreen ul",
            mainCell: ".bdfullscreen ul",
            effect: "fold",
            autoPlay: true,
            autoPage: true,
            trigger: "click",
            startFun: function(i) {
                var curLi = jQuery(".fullSlide .bdfullscreen li").eq(i);
                if ( !! curLi.attr("_src")) {
                    curLi.css("background-image", curLi.attr("_src")).removeAttr("_src")
                }
            }
        });
    });
</script>
<div class="fullSlide">
    <div class="bdfullscreen">
        <ul>
            <?php print_r($banners);?>
            <?php if (!empty($banners)){

                foreach ($banners as $banner){
//                    echo base_url($banner['url']);
//                    exit();
            ?>
                <li _src="url(<?php echo base_url($banner['url']);?>)" ><a href="index.html"></a></li>
            <?php
                    }
                }
            ?>
        </ul>
    </div>
    <div class="hdfullscreen"><ul></ul></div>
    <span class="prev"></span><span class="next"></span>
</div>

<div style="width:100%;">
    <div class="quanpinbj">

        <div style="width:100%; position:absolute; z-index:-1; top:394px;height:1450px;background-color:#f5f5f5;background-image:url(user/253/image/20161710524471.png);"></div>
        <div style="width:100%; position:absolute; z-index:-1; top:2661px;height:500px;background-color:#2baae1;background-image:url(user/253/image/20161710524471.png);"></div>
        <div style="width:100%; position:absolute; z-index:-1; top:-5px;height:400px;background-color:#ffffff;"></div>
        <div style="width:100%; position:absolute; z-index:-1; top:1843px;height:820px;background-color:#ffffff;"></div>
    </div>
    <div class="main_css" id="main_body" style="position:relative;">

        <div class="box_css_1" id="mokuai_1" style="position:absolute;width:1170px; height:215px; top:100px; left:0px; z-index:1; overflow:hidden">

            <div class="box_css_main_1" style="">
                <div id="last_box_1"><div class="col-md-3 col-sm-6 list" style="box-sizing:border-box;position:relative;min-height:1px;padding-right:15px;padding-left:15px;float:left;width:292.5px;text-align:center;margin-bottom:0px;color:#444444;font-family:'Helvetica Neue', Helvetica, Arial, 'Microsoft Yahei', 'Hiragino Sans GB', 'Heiti SC', 'WenQuanYi Micro Hei', sans-serif;font-size:14px;line-height:21px;white-space:normal;background-color:#FFFFFF;">
                        <a href="http:/gywm/nyw.html" title="关于我们" style="box-sizing:border-box;color:#444444;text-decoration:none;background-color:transparent;"><span class="fa fa-newspaper-o" style="box-sizing:border-box;display:inline-block;font-stretch:normal;line-height:100px;font-family:FontAwesome;font-size:50px;text-rendering:auto;-webkit-font-smoothing:antialiased;color:#25A8E0;border:3px solid #25A8E0;width:100px;height:100px;border-radius:99px;"></span>
                            <h3 style="box-sizing:border-box;font-family:inherit;line-height:1.1;color:#46B6E5;margin:30px 0px 15px;font-size:18px;word-break:break-all;">
                                关于我们
                            </h3>
                            <p style="box-sizing:border-box;margin:0px 20px;line-height:1.6;word-break:break-all;">
                                全球范围内被信赖、受尊敬的企业这一目标的"全球优良企业集团构想"
                            </p>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 list" style="box-sizing:border-box;position:relative;min-height:1px;padding-right:15px;padding-left:15px;float:left;width:292.5px;text-align:center;margin-bottom:0px;color:#444444;font-family:'Helvetica Neue', Helvetica, Arial, 'Microsoft Yahei', 'Hiragino Sans GB', 'Heiti SC', 'WenQuanYi Micro Hei', sans-serif;font-size:14px;line-height:21px;white-space:normal;background-color:#FFFFFF;">
                        <a href="http:/gywm/qwh.html" title="企业文化" style="box-sizing:border-box;color:#444444;text-decoration:none;background-color:transparent;"><span class="fa fa-shield" style="box-sizing:border-box;display:inline-block;font-stretch:normal;line-height:100px;font-family:FontAwesome;font-size:50px;text-rendering:auto;-webkit-font-smoothing:antialiased;color:#25A8E0;border:3px solid #25A8E0;width:100px;height:100px;border-radius:99px;"></span>
                            <h3 style="box-sizing:border-box;font-family:inherit;line-height:1.1;color:#46B6E5;margin:30px 0px 15px;font-size:18px;word-break:break-all;">
                                企业文化
                            </h3>
                            <p style="box-sizing:border-box;margin:0px 20px;line-height:1.6;word-break:break-all;">
                                自律，自立：为客户提供高质量和最大价值的专业化产品和服务
                            </p>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 list" style="box-sizing:border-box;position:relative;min-height:1px;padding-right:15px;padding-left:15px;float:left;width:292.5px;text-align:center;margin-bottom:0px;color:#444444;font-family:'Helvetica Neue', Helvetica, Arial, 'Microsoft Yahei', 'Hiragino Sans GB', 'Heiti SC', 'WenQuanYi Micro Hei', sans-serif;font-size:14px;line-height:21px;white-space:normal;background-color:#FFFFFF;">
                        <a href="gywm/qyj.html" title="企业愿景" style="box-sizing:border-box;color:#444444;text-decoration:none;background-color:transparent;"><span class="fa fa-paper-plane-o" style="box-sizing:border-box;display:inline-block;font-stretch:normal;line-height:100px;font-family:FontAwesome;font-size:50px;text-rendering:auto;-webkit-font-smoothing:antialiased;color:#25A8E0;border:3px solid #25A8E0;width:100px;height:100px;border-radius:99px;"></span>
                            <h3 style="box-sizing:border-box;font-family:inherit;line-height:1.1;color:#46B6E5;margin:30px 0px 15px;font-size:18px;word-break:break-all;">
                                企业愿景
                            </h3>
                            <p style="box-sizing:border-box;margin:0px 20px;line-height:1.6;word-break:break-all;">
                                品牌造就辉煌。致力于打造全球最专业数码应用品牌的一流企业
                            </p>
                        </a>
                    </div>
                    <div class="col-md-3 col-sm-6 list" style="box-sizing:border-box;position:relative;min-height:1px;padding-right:15px;padding-left:15px;float:left;width:292.5px;text-align:center;margin-bottom:0px;color:#444444;font-family:'Helvetica Neue', Helvetica, Arial, 'Microsoft Yahei', 'Hiragino Sans GB', 'Heiti SC', 'WenQuanYi Micro Hei', sans-serif;font-size:14px;line-height:21px;white-space:normal;background-color:#FFFFFF;">
                        <a href="gywm/lxwm.html" title="联系我们" style="box-sizing:border-box;color:#444444;text-decoration:none;background-color:transparent;"><span class="fa fa-map-marker" style="box-sizing:border-box;display:inline-block;font-stretch:normal;line-height:100px;font-family:FontAwesome;font-size:50px;text-rendering:auto;-webkit-font-smoothing:antialiased;color:#25A8E0;border:3px solid #25A8E0;width:100px;height:100px;border-radius:99px;"></span>
                            <h3 style="box-sizing:border-box;font-family:inherit;line-height:1.1;color:#46B6E5;margin:30px 0px 15px;font-size:18px;word-break:break-all;">
                                联系我们
                            </h3>
                            <p style="box-sizing:border-box;margin:0px 20px;line-height:1.6;word-break:break-all;">
                                地 址:长沙市开福区芙蓉中路2段 公司总机：0731—88888888
                            </p>
                        </a>
                    </div></div>

            </div>
        </div>
        <div class="box_css_1" id="mokuai_2" style="position:absolute;width:63px; height:49px; top:133px; left:114px; z-index:2; overflow:hidden">

            <div class="box_css_main_1" style="">
                <div id="last_box_2"><div style="text-align:center;">
                        <img src="http://mocdn.web-12.com/user/253/image/20160107/20160107104430913091.png" alt="" style="line-height:1.5;" />
                    </div></div>

            </div>
        </div>
        <div class="box_css_1" id="mokuai_3" style="position:absolute;width:63px; height:49px; top:129px; left:697px; z-index:3; overflow:hidden">

            <div class="box_css_main_1" style="">
                <div id="last_box_3"><div style="text-align:center;">
                        <img src="http://mocdn.web-12.com/user/253/image/20160107/20160107104637153715.jpg" alt="" style="line-height:1.5;" />
                    </div></div>

            </div>
        </div>
        <div class="box_css_1" id="mokuai_4" style="position:absolute;width:63px; height:49px; top:133px; left:408px; z-index:4; overflow:hidden">

            <div class="box_css_main_1" style="">
                <div id="last_box_4"><div style="text-align:center;">
                        <img src="http://mocdn.web-12.com/user/253/image/20160107/20160107104537663766.png" alt="" style="line-height:1.5;" />
                    </div></div>

            </div>
        </div>
        <div class="box_css_1" id="mokuai_5" style="position:absolute;width:63px; height:49px; top:129px; left:992px; z-index:5; overflow:hidden">

            <div class="box_css_main_1" style="">
                <div id="last_box_5"><div style="text-align:center;">
                        <img src="http://mocdn.web-12.com/user/253/image/20160107/20160107104532363236.jpg" alt="" style="line-height:1.5;" />
                    </div></div>

            </div>
        </div>
        <div class="box_css_1" id="mokuai_7" style="position:absolute;width:1170px; height:53px; top:440px; left:0px; z-index:2; overflow:hidden">

            <div class="box_css_main_1" style="">
                <div id="last_box_7"><h3 style="text-align:center;">
                        <span style="font-size:32px;">推荐产品</span>
                    </h3></div>

            </div>
        </div>
        <div class="box_css_1" id="mokuai_8" style="position:absolute;width:1170px; height:1283px; top:532px; left:0px; z-index:2; overflow:hidden">

            <div class="box_css_main_1" style="">
                <div id="last_box_8" class="shop_tw1_css_6">
                    <ul id="ul_box_8" class="clearfix">
                        <?php
                            if (!empty($shops)){
                                foreach ($shops as $shop){

                        ?>
                                    <li><a href="erj/pro30473.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711324987140_260×300.jpg" border="0" alt="<?php echo $shop['name'];?>"></a><span><a href="erj/pro30473.html"><?php echo $shop['name']?></a></span><div><b>￥<?php echo $shop['price'];?></b><i class="scj">￥<?php echo $shop['pe_price'];?></i></div></li>
                        <?php
                                }
                            }else{

                            }
//                        ?>
                        <li><a href="erj/pro30473.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711324987140_260×300.jpg" border="0" alt="耳机默认商品名称信息"></a><span><a href="erj/pro30473.html">耳机默认商品名称信息</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li>
<!--                        <li><a href="erj/pro29523.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711339734894_260×300.jpg" border="0" alt="耳机默认商品名称信息"></a><span><a href="erj/pro29523.html">耳机默认商品名称信息</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li><li><a href="erj/pro28956.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711348803449_260×300.jpg" border="0" alt="耳机默认商品名称信息"></a><span><a href="erj/pro28956.html">耳机默认商品名称信息</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li><li><a href="erj/pro27124.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711356607398_260×300.jpg" border="0" alt="耳机默认商品名称信息"></a><span><a href="erj/pro27124.html">耳机默认商品名称信息</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li><li><a href="erj/pro26420.html"><img src="http://mocdn.web-12.com/user/253/product/201617/2016171143926660_260×300.jpg" border="0" alt="耳机默认商品名称信息"></a><span><a href="erj/pro26420.html">耳机默认商品名称信息</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li><li><a href="erj/pro25991.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711411623713_260×300.jpg" border="0" alt="耳机默认商品名称信息"></a><span><a href="erj/pro25991.html">耳机默认商品名称信息</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li><li><a href="erj/pro24824.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711435424202_260×300.jpg" border="0" alt="耳机默认商品名称信息"></a><span><a href="erj/pro24824.html">耳机默认商品名称信息</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li><li><a href="erj/pro23166.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711450483418_260×300.jpg" border="0" alt="耳机默认商品名称信息"></a><span><a href="erj/pro23166.html">耳机默认商品名称信息</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li><li><a href="erj/pro22923.html"><img src="http://mocdn.web-12.com/user/253/product/201617/2016171152247817_260×300.jpg" border="0" alt="耳机默认商品名称信息"></a><span><a href="erj/pro22923.html">耳机默认商品名称信息</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li><li><a href="erj/pro21848.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711517651453_260×300.jpg" border="0" alt="耳机默认商品名称信息"></a><span><a href="erj/pro21848.html">耳机默认商品名称信息</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li><li><a href="smsxj/pro20326.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711532884198_260×300.jpg" border="0" alt="数码摄像机默认商品名称信息"></a><span><a href="smsxj/pro20326.html">数码摄像机默认商品名</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li><li><a href="smsxj/pro19152.html"><img src="http://mocdn.web-12.com/user/253/product/201617/20161711543699230_260×300.jpg" border="0" alt="数码摄像机默认商品名称信息"></a><span><a href="smsxj/pro19152.html">数码摄像机默认商品名</a></span><div><b>￥888</b><i class="scj">￥999</i></div></li>-->
                    </ul>
                </div>

            </div>
        </div>
        <div class="box_css_1" id="mokuai_9" style="position:absolute;width:1170px; height:53px; top:1872px; left:0px; z-index:3; overflow:hidden">

            <div class="box_css_main_1" style="">
                <div id="last_box_9"><h3 style="text-align:center;">
                        <span style="font-size:32px;">常见问题</span>
                    </h3></div>

            </div>
        </div>
        <div class="box_css_1" id="mokuai_10" style="position:absolute;width:1170px; height:673px; top:1956px; left:0px; z-index:11; overflow:hidden">

            <div class="box_css_main_1" style="">
                <div id="last_box_10">
                    <ul id="ul_box_10" class="a_tw2_css_4 clearfix">
                        <?php
                            if (!empty($questions)){
                                foreach ($questions as question){
                         ?>
                                    <li><a href="cjwt/article20998.html"><img src="sys_img/no_picture.gif" alt="常见问题默认文章标题内容信息" border="0"></a><span><b><a href="cjwt/article20998.html" title="常见问题默认文章标题内容信息">常见问题默认文章标题内容信息</a></b><p style="font-size:12px;">常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。常见问题默认文章简介内容信息，文章简介到</p></span></li>
                        <?php
                                }
                            }else{

                            }
                        ?>
                        <li><a href="cjwt/article20998.html"><img src="sys_img/no_picture.gif" alt="常见问题默认文章标题内容信息" border="0"></a><span><b><a href="cjwt/article20998.html" title="常见问题默认文章标题内容信息">常见问题默认文章标题内容信息</a></b><p style="font-size:12px;">常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。常见问题默认文章简介内容信息，文章简介到</p></span></li>
                        <li><a href="cjwt/article19936.html"><img src="sys_img/no_picture.gif" alt="常见问题默认文章标题内容信息" border="0"></a><span><b><a href="cjwt/article19936.html" title="常见问题默认文章标题内容信息">常见问题默认文章标题内容信息</a></b><p style="font-size:12px;">常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。常见问题默认文章简介内容信息，文章简介到</p></span></li>
                        <li><a href="cjwt/article18583.html"><img src="sys_img/no_picture.gif" alt="常见问题默认文章标题内容信息" border="0"></a><span><b><a href="cjwt/article18583.html" title="常见问题默认文章标题内容信息">常见问题默认文章标题内容信息</a></b><p style="font-size:12px;">常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。</p></span></li>
                        <li><a href="cjwt/article17706.html"><img src="sys_img/no_picture.gif" alt="常见问题默认文章标题内容信息" border="0"></a><span><b><a href="cjwt/article17706.html" title="常见问题默认文章标题内容信息">常见问题默认文章标题内容信息</a></b><p style="font-size:12px;">常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。</p></span></li>
                        <li><a href="cjwt/article16945.html"><img src="sys_img/no_picture.gif" alt="常见问题默认文章标题内容信息" border="0"></a><span><b><a href="cjwt/article16945.html" title="常见问题默认文章标题内容信息">常见问题默认文章标题内容信息</a></b><p style="font-size:12px;">常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。</p></span></li>
                        <li><a href="cjwt/article15674.html"><img src="sys_img/no_picture.gif" alt="常见问题默认文章标题内容信息" border="0"></a><span><b><a href="cjwt/article15674.html" title="常见问题默认文章标题内容信息">常见问题默认文章标题内容信息</a></b><p style="font-size:12px;">常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。</p></span></li>
                        <li><a href="cjwt/article14507.html"><img src="sys_img/no_picture.gif" alt="常见问题默认文章标题内容信息" border="0"></a><span><b><a href="cjwt/article14507.html" title="常见问题默认文章标题内容信息">常见问题默认文章标题内容信息</a></b><p style="font-size:12px;">常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。</p></span></li>
                        <li><a href="cjwt/article13806.html"><img src="sys_img/no_picture.gif" alt="常见问题默认文章标题内容信息" border="0"></a><span><b><a href="cjwt/article13806.html" title="常见问题默认文章标题内容信息">常见问题默认文章标题内容信息</a></b><p style="font-size:12px;">常见问题默认文章简介内容信息，文章简介到文章描述里进行编辑。</p></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="box_css_1" id="mokuai_12" style="position:absolute;width:983px; height:237px; top:2898px; left:116px; z-index:2; overflow:hidden">

            <div class="box_css_main_1" style="">
                <form action="http://253.web-12.com/inc/addgbook.asp?act=post" target="t_frame" method="post"><table width="100%" border="0" cellspacing="2" cellpadding="3"><tr><td align="right" height="22"><font color=#FF0000>*</font><strong>姓名：</strong></td><td><input name="guest_xm" type="text" id="guest_xm" class="input_style" style="width:100px;" /></td></tr><tr><td align="right"><font color=#FF0000>*</font><strong>电话：</strong></td><td><input name="guest_dh" type="text" id="guest_dh" class="input_style" style="width:140px;" /></td></tr><tr><td align="right"><font color=#FF0000>*</font><strong>邮箱：</strong></td><td><input name="guest_yx" type="text" id="guest_yx" class="input_style" style="width:140px;" /></td></tr><tr><td colspan="2" style="text-align:center;"><textarea name="guest_content" rows="4" id="guest_content" style="width:600px;" class="input_style"></textarea></td></tr><tr><td height="28" colspan="2" style="text-align:center;"><input type="submit" value="提交" class="button_style"> &nbsp; <a href="gbook/index.html" target="_blank">【查看留言】</a></td></tr></table></form>
            </div>
        </div>
        <div class="box_css_1" id="mokuai_13" style="position:absolute;width:1170px; height:171px; top:2713px; left:0px; z-index:4; overflow:hidden">

            <div class="box_css_main_1" style="">
                <div id="last_box_13"><h3 style="text-align:center;">
                        <span style="font-size:32px;color:#FFFFFF;">留言给我们</span>
                    </h3>
                    <p style="text-align:center;">
	<span style="font-size:32px;"><span style="font-size:14px;color:#FFFFFF;">公司自2003年创业以来，始终以创造世界一流产品为奋斗目标</span><span style="font-size:14px;color:#FFFFFF;"></span><br />
</span>
                    </p>
                    <p style="text-align:center;">
	<span style="font-size:32px;"><span style="font-size:14px;"><br />
</span></span>
                    </p>
                    <p style="text-align:center;">
	<span style="font-size:32px;"><span style="font-size:14px;"><span style="color:#003399;">邮箱：233128722789@qq.com</span><br />
<span style="color:#003399;">电话：1399989942342</span><br />
<br />
</span></span>
                    </p></div>

            </div>
        </div>
    </div>
</div><div class="bot_all" id="bot_all">
    <div class="bot_main" id="bot_main" style="position:relative">

        <div style="position:absolute;width:1165px; height:95px; top:16px; left:0px; z-index:1;overflow:hidden;">
            <div style="">
                <div id="tb_last_box_2"><div style="text-align:center;">
                        <span style="color:#FFFFFF;font-family:'Microsoft YaHei';font-size:14px;line-height:2;">地址：这里是您的公司地址 电话： +86-0000-96877</span>
                    </div>
                    <span style="font-family:'Microsoft YaHei';font-size:14px;line-height:2;color:#FFFFFF;">
<div style="text-align:center;">
	<span style="line-height:2;">传真： +86-0000-96877版权所有：这里是您的网站名称</span>
</div>
</span> <span style="font-family:'Microsoft YaHei';font-size:14px;line-height:2;color:#FFFFFF;">
<div style="text-align:center;">
	<span style="line-height:2;">技术支持：我们【我们】 ICP备案编号： ICP备********号</span>
</div>
</span></div>

            </div>
        </div>

    </div>
</div>
<script language="JavaScript" src="js/page_common.js"></script>
</body>
</html>