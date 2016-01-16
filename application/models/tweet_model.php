<?php

class Tweet_model extends CI_Model 
{
	private $TAGGING_COUNT_PER_TWEET = 2;

	function selectRandomUnlabeledTweet()
	{
		$tweet_selected_flag = false;
		while (!$tweet_selected_flag)
		{
			$this->db->where('tagging_count < ',$this->TAGGING_COUNT_PER_TWEET);
			$this->db->order_by('retweet_count','random');
			$this->db->limit(1);
			$query = $this->db->get('unlabeled_tweet_table');

			$tweet_id = $query->result()[0]->tweet_id;
			$user_id = $this->session->userdata('user_id');
			if (!$this->isTweetTaggedByUser($tweet_id,$user_id))
			{
				$tweet_selected_flag = true;
				return $query->result()[0];
			}
		}

		return false;
	}

	function isTweetTaggedByUser($tweet_id,$user_id)
	{
		$this->db->where('tweet_id',$tweet_id);
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('labeled_tweet_table');

		if ($query->num_rows() > 0) return true;
		else return false;
	}

	function incrementTweetTaggingCount($unlabeled_tweet_id)
	{
		$this->db->where('tweet_id',$unlabeled_tweet_id);
		$query = $this->db->get('unlabeled_tweet_table');
		$tweet_data = $query->result()[0];
		$tweet_data->tagging_count++;
		$this->db->where('tweet_id',$tweet_data->tweet_id);
		$this->db->update('unlabeled_tweet_table',$tweet_data); 
	}

	function saveLabeledTweet($new_record)
	{
		$this->db->insert('labeled_tweet_table',$new_record); 
	}

	function userTweetsNumber($user_id)
	{
		$this->db->where('user_id',$user_id);
		$query = $this->db->get('labeled_tweet_table');
		return $query->num_rows();
	}
}

?>