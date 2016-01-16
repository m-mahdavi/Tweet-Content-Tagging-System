<?php
// Tweet Content Tagging System
// Author: Mohammad Mahdavi
// Email: moh.mahdavi@ut.ac.ir
// Date: Winter 2015
?> 

<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="description" content="Tweet Content Tagging System"/>
	<meta name="keywords" content="Tweet,Content,Tagging,System,Twitter,Social Network"/>
	<meta name="author" content="Mohammad Mahdavi"/>
	<title> سامانه برچسب‌گذاری محتوای توییت </title>
    <link rel="icon" href="<?php echo base_url('image/icon.png'); ?>" type="image/gif"/>
	<!--<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>" type="text/css"/>-->
	<link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>" type="text/css"/>
</head>

<table class="my_table" >
  	<tr>
    	<td>
    		<a href="http://ece.ut.ac.ir/" target="_blank">
      	    	<img id="logo2_img" src="<?php echo base_url('image/logo2.png'); ?>"/>
      	    </a>
    	</td>
        <td  class='logo_td'>
            <?php echo anchor("login/index",
       			"<div>
         				دانشگاه تهران <br/>
         				پردیس فنی <br/>
         				دانشکده برق و کامپیوتر <br/>
         				گروه هوش‌مصنوعی و رباتیک
       			</div>"
            ); ?>
    	</td>
    	<td>
    		<a href="http://ut.ac.ir/" target="_blank">
      	  		<img id="logo1_img" src="<?php echo base_url('image/logo1.png'); ?>"/>
      	  	</a>
   		</td>
  	</tr>
</table>
<hr class="full_width"/>
<body>