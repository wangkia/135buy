
 <?php $_from = $this->_var['index_category_info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_category');$this->_foreach['index_category_info'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_category_info']['total'] > 0):
    foreach ($_from AS $this->_var['index_category']):
        $this->_foreach['index_category_info']['iteration']++;
?>
<div class="categoryLine"></div>

<div class="container" style="padding-top:10px;" >

    <div class="row">
        <div class="col-lg-2"><h2><?php echo $this->_var['index_category']['cat_name']; ?></h2></div><div class="col-lg-4" style="margin-top:15px"><a href="<?php echo $this->_var['site_url']; ?>category.php?id=<?php echo $this->_var['index_category']['cat_id']; ?>"><h4><small>点击查看更多</small></h4></a></div>
    </div>


    <div class="banner row">
        <div class="col-lg-9 delmgn"><img src="http://i2.lifevccdn.com/upload/category_img/banner-29bdbba0-40d8-4852-8c3e-c7c02dd665b4_v140315141343.jpg" width="1170px" /></div>
    </div>


    <div class="goods_list row">  
        <?php $_from = $this->_var['index_category']['goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_info');$this->_foreach['index_category_goods_info'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['index_category_goods_info']['total'] > 0):
    foreach ($_from AS $this->_var['goods_info']):
        $this->_foreach['index_category_goods_info']['iteration']++;
?>
         <?php if ($this->_foreach['index_category_goods_info']['iteration'] % 3 == 0): ?>
            <div class="goods_info" style="margin-right:0px">
            <?php else: ?>
            <div class="goods_info">
            <?php endif; ?>
                <a href="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods_info']['url']; ?>" title="<?php echo $this->_var['goods_info']['goods_name']; ?>" target="_blank">         
                <img src="<?php echo $this->_var['goods_info']['goods_img']; ?>" alt="<?php echo $this->_var['goods_info']['goods_name']; ?>"  style="display: block;">
                </a>
                <div class="goods_title"><?php echo $this->_var['goods_info']['goods_brief']; ?></div>
                <p><span class="activityTag">推荐价:</span><span><strong>￥<?php echo $this->_var['goods_info']['shop_price']; ?></strong></span> &nbsp;<s>￥<?php echo $this->_var['goods_info']['market_price']; ?></s><span class="priceTag">荐</span></p>    
                <p><span><a title="<?php echo $this->_var['goods_info']['goods_name']; ?>" target="_blank" href="/item/8797"><?php echo $this->_var['goods_info']['goods_name']; ?></a></span></p>
                <div class=" col-lg-9"> 
                   <!-- <span class="recentSale">累计售出：7348</span> -->
                </div>
            </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</div>

<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
