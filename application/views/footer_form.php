<?php
// Tweet Content Tagging System
// Author: Mohammad Mahdavi
// Email: moh.mahdavi@ut.ac.ir
// Date: Winter 2015
?> 

</body>
<hr class="full_width"/>

<table class="my_table">
	<tr>
		<td class="third_width">
			<h3 class="my_h persian_font center_font"> <?php echo anchor_popup('login/contactInfo','ارتباط با ما'); ?> </h3>
		</td>
		<td class="third_width">
			<h4 class='my_h english_font center_font'> <?php if (isset($active_user)) echo $active_user . ' #' . $user_tweets_number; ?> </h4>
		</td>
		<td class="third_width">
			<h3 class="my_h persian_font center_font"> <?php echo anchor_popup('login/help','آشنایی با سامانه'); ?> </h3>
		</td>
	</tr>
</table>
</html>