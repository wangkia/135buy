
  <?php echo $this->fetch('library/page_header.lbi'); ?>

<div class="container" >
    <div class="banners_list row">
        <?php $_from = $this->_var['top_ads']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'top_ad');$this->_foreach['top_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['top_ad']['total'] > 0):
    foreach ($_from AS $this->_var['top_ad']):
        $this->_foreach['top_ad']['iteration']++;
?> 
            <?php if ($this->_foreach['top_ad']['iteration'] % 3 == 0): ?>
                <div class="banner_small" style="margin-right:0px">
            <?php else: ?>
                <div class="banner_small">
            <?php endif; ?>
            <a href="<?php echo $this->_var['top_ad']['ad_link']; ?>" target="_blank">
                <img src="/data/afficheimg/<?php echo $this->_var['top_ad']['ad_code']; ?>" width="1170px" alt="<?php echo $this->_var['top_ad']['ad_name']; ?>" />
            </a>
           </div>         
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </div>
</div>

</div>

<div class="container" style="padding-top:10px;" >

    <div class="row">
        <div class="col-lg-2"><h2>天天新品</h2></div><div class="col-lg-4" style="margin-top:15px"><h4><small>点击查看更多</small></h4></div>
    </div>


    <div class="banner row">
        <div class="col-lg-9 delmgn">
            <?php $_from = $this->_var['best_goods_ads']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'best_goods_ad');$this->_foreach['best_goods_ad'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods_ad']['total'] > 0):
    foreach ($_from AS $this->_var['best_goods_ad']):
        $this->_foreach['best_goods_ad']['iteration']++;
?>
                <img src="/data/afficheimg/<?php echo $this->_var['best_goods_ad']['ad_code']; ?>" width="1170px" alt="<?php echo $this->_var['best_goods_ad']['ad_link']; ?>" />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div>
    </div>


    <div class="goods_list row">   
        <?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'best_good');$this->_foreach['best_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['best_goods']['total'] > 0):
    foreach ($_from AS $this->_var['best_good']):
        $this->_foreach['best_goods']['iteration']++;
?>
            <?php if ($this->_foreach['best_goods']['iteration'] % 3 == 0): ?>
            <div class="goods_info" style="margin-right:0px">
            <?php else: ?>
            <div class="goods_info">
            <?php endif; ?>
                <a href="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['best_good']['url']; ?>" title="<?php echo $this->_var['best_good']['good_name']; ?>" target="_blank">         
                <img src="<?php echo $this->_var['best_good']['goods_img']; ?>" alt="<?php echo $this->_var['best_good']['goods_name']; ?>"  style="display: block;">
                </a>
                <div class="goods_title"><?php echo $this->_var['best_good']['goods_brief']; ?></div>
                <p><span>推荐价:</span><span><strong>￥<?php echo $this->_var['best_good']['shop_price']; ?></strong></span> &nbsp;<s>￥<?php echo $this->_var['best_good']['market_price']; ?></s><span class="priceTag">新</span></p>
                <p><a title="<?php echo $this->_var['best_good']['goods_name']; ?>" target="_blank" href="/item/8797"><?php echo $this->_var['best_good']['goods_name']; ?></a></p>
                <div class=" col-lg-9"> 
                   <!-- <span class="recentSale">累计售出：7348</span> -->
                </div>
            </div>
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>         
    </div>
</div>



<?php echo $this->fetch('library/page_index_categorys_goods.lbi'); ?>


<?php echo $this->fetch('library/page_footer.lbi'); ?>


    