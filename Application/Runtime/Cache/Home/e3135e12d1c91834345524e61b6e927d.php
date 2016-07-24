<?php if (!defined('THINK_PATH')) exit();?><div class="blog-sidebar">
    <h4>美好回忆</h4>
    <ul class="cat-list">
        <script>
            var title = <?php echo ($title); ?>;
            var len = title.length;
            var li = '';
            for (var i = 0; i < len; ++i) {
                li += '<li><a href="#">' +title[i]+ '</a></li>';
            }
            document.write(li);
        </script>
    </ul>
    <h4>新鲜款式</h4>
    <ul class="cat-list">
        <li><a href="#"><img src="/Public/Home/images/bl.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"><img src="/Public/Home/images/bl2.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"><img src="/Public/Home/images/bl3.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"><img src="/Public/Home/images/bl4.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"><img src="/Public/Home/images/bl.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"><img src="/Public/Home/images/bl4.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
        <li><a href="#"> <img src="/Public/Home/images/bl3.jpg" alt="" />&nbsp;&nbsp;最新商品名称</a></li>
    </ul>
</div>