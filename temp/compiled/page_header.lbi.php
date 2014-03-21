<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdn.bootcss.com/twitter-bootstrap/3.0.3/css/starter-templete.min.css">
    <link rel="stylesheet" href="<?php echo $this->_var['ecs_css_path']; ?>">
    
    
    <!--[if lt IE 9]>
        <script src="http://cdn.bootcss.com/html5shiv/3.7.0/html5shiv.min.js"></script>
        <script src="http://cdn.bootcss.com/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div class="top">ss</div>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation"style="position:static">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">135BUY</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">成熟男人</a></li>
            <li><a href="#about">魅力女人</a></li>
            <?php $_from = $this->_var['nav_cat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');if (count($_from)):
    foreach ($_from AS $this->_var['cat']):
?>
            <li><a href="<?php echo $this->_var['cat']['cat_url']; ?>"><?php echo $this->_var['cat']['cat_name']; ?></a></li>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </ul>
        </div>
      </div>
    </div>
