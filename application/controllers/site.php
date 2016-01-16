<?php

class Site extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		if (!$this->isLoggedIn()) redirect('login/index');
		$this->load->model('tweet_model');
	}

	function isLoggedIn()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');
		return (isset($is_logged_in) && $is_logged_in == true);	
	}

	function index()
	{
		$random_unlabeled_tweet = $this->tweet_model->selectRandomUnlabeledTweet();
		$data['tweet_text'] = $random_unlabeled_tweet->tweet_text;
		$data['tweet_id'] = $random_unlabeled_tweet->tweet_id;
		$data['active_user'] = $this->session->userdata('username');
		$data['user_tweets_number'] = $this->tweet_model->userTweetsNumber($this->session->userdata('user_id'));
		
		$this->load->view('header_form');
		$this->load->view('site_form',$data);
		$this->load->view('footer_form',$data);
	}
	
	function nextTweet()
	{
		$unlabeled_tweet_id = $this->input->post('tweet_id_hdn');
		$user_id = $this->session->userdata('user_id');
		$fun_degree = $this->input->post('fun_degree_rdo');
		$individual_degree = $this->input->post('individual_degree_rdo');
		$social_degree =  $this->input->post('social_degree_rdo');
		$positive_sentiment_degree =  $this->input->post('positive_sentiment_degree_rdo');
		$negetive_sentiment_degree =  $this->input->post('negetive_sentiment_degree_rdo');
		$formal_language_degree =  $this->input->post('formal_language_degree_rdo');

		// Value Checking
		$MIN = 1;
		$MAX = 4;
		$MAX2 = 3;
		if (!(is_numeric($unlabeled_tweet_id) && 
			  is_numeric($user_id) &&
			  is_numeric($fun_degree) &&
			  is_numeric($individual_degree) &&
			  is_numeric($social_degree) &&
			  is_numeric($positive_sentiment_degree) &&
			  is_numeric($negetive_sentiment_degree) &&
			  is_numeric($formal_language_degree) &&
			  $MIN <= $fun_degree && $fun_degree <= $MAX &&
			  $MIN <= $individual_degree && $individual_degree <= $MAX && 
			  $MIN <= $social_degree && $social_degree <= $MAX &&
			  $MIN <= $positive_sentiment_degree && $positive_sentiment_degree <= $MAX &&
			  $MIN <= $negetive_sentiment_degree && $negetive_sentiment_degree <= $MAX &&
			  $MIN <= $formal_language_degree && $formal_language_degree <= $MAX2))
		{
			redirect('site/index');
		}

		$new_record = array(
			'tweet_id' => $unlabeled_tweet_id,
			'user_id' => $user_id,
			'fun_degree' => $fun_degree,
			'individual_degree' => $individual_degree,
			'social_degree' => $social_degree,
			'positive_sentiment_degree' => $positive_sentiment_degree,
			'negetive_sentiment_degree' => $negetive_sentiment_degree,
			'formal_language_degree' => $formal_language_degree
			);

		$this->tweet_model->saveLabeledTweet($new_record);
		$this->tweet_model->incrementTweetTaggingCount($unlabeled_tweet_id);
		$this->index();
	}
}

?>
