<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Register extends Controller{
	
	public function action_index()
	{
		$posts = ORM::factory('Post')->find_all();
		$view = View::factory('form')
			->bind('posts', $posts);
		$this->response->body($view);
	}

public function post_it(){
	if($_POST){
	$post = ORM::factory('post');
	$post->name = $_POST['name'];
	$post->Phone = $_POST['phone'];
	$post->age = $_POST['age'];
	$post->email = $_POST['email'];
	$post->occupation = $_POST['occupation'];
	$post->save();
	$this->redirect('success');
	}
	$view = View::factory('form');
	$this->response->body($view);
	
}

} // End Welcome
