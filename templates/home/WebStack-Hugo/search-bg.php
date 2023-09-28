<?php
if(!empty($theme_config['canvas-bg'])){
    //格式是否正确,正确则按配置选择
    if(preg_match('/^(?:1[0-7]|[1-9])(?:,(?:1[0-7]|[1-9]))*$/', $theme_config['canvas-bg'])){
        $src_s = explode(",", $theme_config['canvas-bg']);
        $src = $src_s[array_rand($src_s)];
    }else{
        $src = rand(1,17);//格式错误时随机选一个
    }
    //清除横幅图,避免浪费资源
    $theme_config['light_bg'] = '';
    $theme_config['night_bg'] = '';
    //HTML代码
    $iframe = '<iframe class="canvas-bg" scrolling="no" sandbox="allow-scripts allow-same-origin" src="'."{$theme_dir}/assets/fx/{$src}.html".'"></iframe>';
}

?>
            <!--search-bg-start-->
            <div class="header-big  post-top css-color mb-4" id="search-bg" light_bg="<?php echo $theme_config['light_bg'];?>" night_bg="<?php echo $theme_config['night_bg'];?>">
                <?php echo @$iframe; ?>
                <div class="s-search">
                    <div id="search" class="s-search mx-auto" data="<?php echo $theme_config['suggestion'] == 1 ? 1 : 0 ;?>">
                        <div id="search-list-menu" class="hide-type-list">
                            <div class="s-type text-center">
                                <div class="s-type-list big">
                                    <div class="anchor" style="position: absolute; left: 50%; opacity: 0;"></div>
                                    <label for="type-baidu"   data-id="group-a"><span>常用</span></label>
                                    <label for="type-baidu1"  data-id="group-b"><span>搜索</span></label>
                                    <label for="type-br"      data-id="group-c"><span>工具</span></label>
                                    <label for="type-zhihu"   data-id="group-d"><span>社区</span></label>
                                    <label for="type-taobao1" data-id="group-e"><span>生活</span></label>
                                    <label for="type-zhaopin" data-id="group-f"><span>求职</span></label>
                                </div>
                            </div>
                        </div>
            
                        <form action="https://www.baidu.com?s=" method="get" target="_blank" class="super-search-fm">
                            <input type="text" id="search-text" class="form-control smart-tips search-key" 
                                zhannei="" placeholder="输入关键字搜索" style="outline:0" autocomplete="off">
                            <button class="submit" type="submit"><i class="iconfont icon-search"></i></button>
                        </form>
            
                        <div id="search-list" class="hide-type-list">
                            <div class="search-group group-a">
                                <ul class="search-type">
                                    <li>
                                        <input hidden="" type="radio" name="type" checked="checked" id="type-baidu" value="https://www.baidu.com/s?wd=" data-placeholder="百度一下，你就知道">
                                        <label for="type-baidu"><span class="text-muted">百度</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-bing" value="https://cn.bing.com/search?q=" data-placeholder="微软 Bing 搜索">
                                        <label for="type-bing"><span class="text-muted">必应</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-google" value="https://www.google.com/search?q=" data-placeholder="谷歌搜索">
                                        <label for="type-google"><span class="text-muted">谷歌</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-anaconda" value="https://anaconda.org/search?q=" data-placeholder="Anaconda 软件搜索">
                                        <label for="type-anaconda"><span class="text-muted">软件</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-pubmed" value="https://pubmed.ncbi.nlm.nih.gov/?term=" data-placeholder="PubMed 搜索/文章标题/关键字">
                                        <label for="type-pubmed"><span class="text-muted">文献</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-group group-b">
                                <ul class="search-type">
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-baidu1" value="https://www.baidu.com/s?wd=" data-placeholder="百度一下，你就知道">
                                        <label for="type-baidu1"><span class="text-muted">百度</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-google1" value="https://www.google.com/search?q=" data-placeholder="谷歌搜索">
                                        <label for="type-google1"><span class="text-muted">谷歌</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-360" value="https://www.so.com/s?q=" data-placeholder="360 好搜">
                                        <label for="type-360"><span class="text-muted">360</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-sogo" value="https://www.sogou.com/web?query=" data-placeholder="搜狗搜索"> 
                                        <label for="type-sogo"><span class="text-muted">搜狗</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-bing1" value="https://cn.bing.com/search?q=" data-placeholder="微软 Bing 搜索">
                                        <label for="type-bing1"><span class="text-muted">必应</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-sm" value="https://yz.m.sm.cn/s?q=" data-placeholder="UC 移动端搜索">
                                        <label for="type-sm"><span class="text-muted">神马</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-group group-c">
                                <ul class="search-type">
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-br" value="https://rank.chinaz.com/all/" data-placeholder="请输入网址(不带 https://)">
                                        <label for="type-br"><span class="text-muted">权重查询</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-links" value="https://link.chinaz.com/" data-placeholder="请输入网址(不带 https://)">
                                        <label for="type-links"><span class="text-muted">友链检测</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-icp" value="https://icp.aizhan.com/" data-placeholder="请输入网址(不带 https://)">
                                        <label for="type-icp"><span class="text-muted">备案查询</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-ping" value="https://ping.chinaz.com/" data-placeholder="请输入网址(不带 https://)">
                                        <label for="type-ping"><span class="text-muted">PING 检测</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-404" value="https://tool.chinaz.com/Links/?DAddress=" data-placeholder="请输入网址(不带https://)">
                                         <label for="type-404"><span class="text-muted">死链检测</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-ciku" value="https://www.ciku5.com/s?wd=" data-placeholder="请输入关键词">
                                        <label for="type-ciku"><span class="text-muted">关键词挖掘</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-group group-d">
                                <ul class="search-type">
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-zhihu" value="https://www.zhihu.com/search?type=content&q=" data-placeholder="知乎">
                                        <label for="type-zhihu"><span class="text-muted">知乎</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-wechat" value ="https://weixin.sogou.com/weixin?type=2&query=" data-placeholder="微信">
                                        <label for="type-wechat"><span class="text-muted">微信</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-weibo" value="https://s.weibo.com/weibo/" data-placeholder="微博">
                                        <label for="type-weibo"><span class="text-muted">微博</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-douban" value="https://www.douban.com/search?q=" data-placeholder="豆瓣">
                                        <label for="type-douban"><span class="text-muted">豆瓣</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-group group-e">
                                <ul class="search-type">
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-taobao1" value="https://s.taobao.com/search?q=" data-placeholder="淘宝">
                                        <label for="type-taobao1"><span class="text-muted">淘宝</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-jd" value="https://search.jd.com/Search?keyword=" data-placeholder="京东">
                                        <label for="type-jd"><span class="text-muted">京东</span></label> 
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-xiachufang" value="https://www.xiachufang.com/search/?keyword=" data-placeholder="下厨房">
                                        <label for="type-xiachufang"><span class="text-muted">下厨房</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-xiangha" value="https://www.xiangha.com/so/?q=caipu&s=" data-placeholder="香哈菜谱">
                                        <label for="type-xiangha"><span class="text-muted">香哈菜谱</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-12306" value="https://www.12306.cn/?" data-placeholder="12306">
                                        <label for="type-12306"><span class="text-muted">12306</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-qunar" value="https://www.qunar.com/?" data-placeholder="去哪儿">
                                        <label for="type-qunar"><span class="text-muted">去哪儿</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-group group-f">
                                <ul class="search-type">
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-zhaopin" value="https://sou.zhaopin.com/jobs/searchresult.ashx?kw=" data-placeholder="智联招聘">
                                        <label for="zhaopin"><span class="text-muted">智联招聘</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-51job" value="https://search.51job.com/?" data-placeholder="前程无忧">
                                        <label for="type-51job"><span class="text-muted">前程无忧</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-lagou" value="https://www.lagou.com/jobs/list_" data-placeholder="拉钩网">
                                        <label for="type-lagou"><span class="text-muted">拉钩网</span></label>
                                    </li>
                                    <li>
                                        <input hidden="" type="radio" name="type" id="type-liepin" value="https://www.liepin.com/zhaopin/?key=" data-placeholder="猎聘网">
                                        <label for="type-liepin"><span class="text-muted">猎聘网</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card search-smart-tips search-hot-text">
                            <ul id="word" style="display: none"></ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--search-bg-end-->