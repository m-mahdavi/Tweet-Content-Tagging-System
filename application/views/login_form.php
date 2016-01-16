<?php
// Tweet Content Tagging System
// Author: Mohammad Mahdavi
// Email: moh.mahdavi@ut.ac.ir
// Date: Winter 2015
?> 

<h2 class="my_h persian_font center_font"> به سامانه برچسب‌گذاری محتوای توییت خوش آمدید. </h2>
<p class="my_p">
	پس از ثبت‌نام و ورود به سامانه، تعدادی از توییت‌های کاربران توییتر به شما نمایش داده شده و از شما خواسته می‌شود تا محتوای این توییت‌ها را از منظر ویژگی‌های «بامزه‌بودن»، «فردی‌بودن»، «اجتماعی‌بودن»، «احساسات مثبت» و «احساسات منفی» ارزیابی کنید. لطفا پیش از شروع به کار، از طریق <?php echo anchor_popup('login/help','این لینک،'); ?> مفاهیم ویژگی‌ها و شیوه برچسب‌گذاری توییت‌ها را مطالعه فرمایید. <br> این پژوهش به عنوان بخشی از پایان‌نامه کارشناسی ارشد «محمد مهدوی» در آزمایش‌گاه شبکه‌های اجتماعی دانشگاه تهران و به سرپرستی <a href="http://ece.ut.ac.ir/users/asadpour" target=”_blank”>«دکتر مسعود اسدپور» </a> شکل گرفته است و نتایج حاصل از آن طی مقاله‌ای برای همگان منتشر خواهد شد. <br> از همکاری شما در توسعه علم، صمیمانه سپاس‌گزاریم!
</p>

<div class="login_signup_div">
	<h3 class="my_h persian_font center_font"> لطفا وارد شوید: </h3>
    <?php 
		echo form_open('login/validateUser');
		echo form_input('username_lnd','','placeholder="Email Address"');
		echo form_password('password_pwd','','placeholder="Password"');
		echo "<div class='button_div' align='center'>";
		echo anchor('login/signup','ثبت نام');
		echo form_submit('submit_smt','ورود');
		echo "</div>";
		echo form_close();
	?>
</div>

<?php if (isset($message)) echo "<div class='error_div'> $message </div>"; ?>