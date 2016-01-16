<?php
// Tweet Content Tagging System
// Author: Mohammad Mahdavi
// Email: moh.mahdavi@ut.ac.ir
// Date: Winter 2015
?> 

<?php echo form_open('site/nextTweet',array('onsubmit' => 'return isAllRadioSelected();')); ?>

<div class="show_example_div">
	<?php echo $tweet_text; ?>
</div>

<table class="my_table">
	<tr class="border_bottom_tr">
		<td>
			<div>
				<input type="radio" name="fun_degree_rdo" value="1" id="fun_radio1" class="radio"/>
				<label for="fun_radio1" class="rating_label"> هیچ </label>
			</div>
			<div>
				<input type="radio" name="fun_degree_rdo" value="2" id="fun_radio2" class="radio"/>
				<label for="fun_radio2" class="rating_label"> کم </label>
			</div>
			<div>	
				<input type="radio" name="fun_degree_rdo" value="3" id="fun_radio3" class="radio"/>
				<label for="fun_radio3" class="rating_label"> متوسط </label>
			</div>
			<div>	
				<input type="radio" name="fun_degree_rdo" value="4" id="fun_radio4" class="radio"/>
				<label for="fun_radio4" class="rating_label"> زیاد </label>
			</div>
		</td>
		<td>
			<h2 class="my_h persian_font center_font"> چه مقدار این توییت را «بامزه» ارزیابی می‌کنید؟ </h2>
		</td>
	</tr>
	<tr class="border_bottom_tr">
		<td>
			<div>
				<input type="radio" name="individual_degree_rdo" value="1" id="individual_radio1" class="radio"/>
				<label for="individual_radio1" class="rating_label"> هیچ </label>
			</div>
			<div>
				<input type="radio" name="individual_degree_rdo" value="2" id="individual_radio2" class="radio"/>
				<label for="individual_radio2" class="rating_label"> کم </label>
			</div>
			<div>	
				<input type="radio" name="individual_degree_rdo" value="3" id="individual_radio3" class="radio"/>
				<label for="individual_radio3" class="rating_label"> متوسط </label>
			</div>
			<div>	
				<input type="radio" name="individual_degree_rdo" value="4" id="individual_radio4" class="radio"/>
				<label for="individual_radio4" class="rating_label"> زیاد </label>
			</div>
		</td>
		<td>
			<h2 class="my_h persian_font center_font"> چه مقدار این توییت را «فردی» ارزیابی می‌کنید؟ </h2>
		</td>
	</tr>
	<tr class="border_bottom_tr">
		<td>
			<div>
				<input type="radio" name="social_degree_rdo" value="1" id="social_radio1" class="radio"/>
				<label for="social_radio1" class="rating_label"> هیچ </label>
			</div>
			<div>
				<input type="radio" name="social_degree_rdo" value="2" id="social_radio2" class="radio"/>
				<label for="social_radio2" class="rating_label"> کم </label>
			</div>
			<div>	
				<input type="radio" name="social_degree_rdo" value="3" id="social_radio3" class="radio"/>
				<label for="social_radio3" class="rating_label"> متوسط </label>
			</div>
			<div>	
				<input type="radio" name="social_degree_rdo" value="4" id="social_radio4" class="radio"/>
				<label for="social_radio4" class="rating_label"> زیاد </label>
			</div>
		</td>
		<td>
			<h2 class="my_h persian_font center_font"> چه مقدار این توییت را «اجتماعی» ارزیابی می‌کنید؟ </h2>
		</td>
	</tr>
	<tr class="border_bottom_tr">
		<td>
			<div>
				<input type="radio" name="positive_sentiment_degree_rdo" value="1" id="positive_sentiment_radio1" class="radio"/>
				<label for="positive_sentiment_radio1" class="rating_label"> هیچ </label>
			</div>
			<div>
				<input type="radio" name="positive_sentiment_degree_rdo" value="2" id="positive_sentiment_radio2" class="radio"/>
				<label for="positive_sentiment_radio2" class="rating_label"> کم </label>
			</div>
			<div>	
				<input type="radio" name="positive_sentiment_degree_rdo" value="3" id="positive_sentiment_radio3" class="radio"/>
				<label for="positive_sentiment_radio3" class="rating_label"> متوسط </label>
			</div>
			<div>	
				<input type="radio" name="positive_sentiment_degree_rdo" value="4" id="positive_sentiment_radio4" class="radio"/>
				<label for="positive_sentiment_radio4" class="rating_label"> زیاد </label>
			</div>
		</td>
		<td>
			<h2 class="my_h persian_font center_font"> چه مقدار این توییت را دارای «احساسات مثبت» ارزیابی می‌کنید؟ </h2>
		</td>
	</tr>
	<tr class="border_bottom_tr">
		<td>
			<div>
				<input type="radio" name="negetive_sentiment_degree_rdo" value="1" id="negetive_sentiment_radio1" class="radio"/>
				<label for="negetive_sentiment_radio1" class="rating_label"> هیچ </label>
			</div>
			<div>
				<input type="radio" name="negetive_sentiment_degree_rdo" value="2" id="negetive_sentiment_radio2" class="radio"/>
				<label for="negetive_sentiment_radio2" class="rating_label"> کم </label>
			</div>
			<div>	
				<input type="radio" name="negetive_sentiment_degree_rdo" value="3" id="negetive_sentiment_radio3" class="radio"/>
				<label for="negetive_sentiment_radio3" class="rating_label"> متوسط </label>
			</div>
			<div>	
				<input type="radio" name="negetive_sentiment_degree_rdo" value="4" id="negetive_sentiment_radio4" class="radio"/>
				<label for="negetive_sentiment_radio4" class="rating_label"> زیاد </label>
			</div>
		</td>
		<td>
			<h2 class="my_h persian_font center_font"> چه مقدار این توییت را دارای «احساسات منفی» ارزیابی می‌کنید؟ </h2>
		</td>
	</tr>
	<tr>
		<td>
			<div>
				<input type="radio" name="formal_language_degree_rdo" value="1" id="formal_language_radio1" class="radio"/>
				<label for="formal_language_radio1" class="rating_label"> هیچ‌کدام </label>
			</div>
			<div>
				<input type="radio" name="formal_language_degree_rdo" value="2" id="formal_language_radio2" class="radio"/>
				<label for="formal_language_radio2" class="rating_label"> غیررسمی </label>
			</div>
			<div>	
				<input type="radio" name="formal_language_degree_rdo" value="3" id="formal_language_radio3" class="radio"/>
				<label for="formal_language_radio3" class="rating_label"> رسمی </label>
			</div>
		</td>
		<td>
			<h2 class="my_h persian_font center_font"> «زبان» این توییت را چگونه ارزیابی می‌کنید؟ </h2>
		</td>
	</tr>
</table>

<div class="button_div" align="center">
	<?php
	echo form_submit('submit_smt','توییت بعدی','id="next_tweet_submit"');
	echo "<br>";
	echo anchor('site/index','درباره این توییت نظری ندارم');
	echo anchor('login/logout','خروج');
	echo form_hidden('tweet_id_hdn',$tweet_id);
	echo form_close(); 
	?>
</div>

<script type="text/javascript"> 
	function isAllRadioSelected()
	{
		var ctr = 0;
		var radio_list = document.getElementsByClassName("radio");
		for (var i = 0; i < radio_list.length; i++)
			if (radio_list[i].checked == true)
				ctr++;

		if (ctr != 6)
		{
			alert("لطفا به همه پرسش‌ها پاسخ دهید و یا گزینه «درباره این توییت نظری ندارم» را انتخاب کنید!");
		    return false;
		}
		else
			return true;
	}
</script>