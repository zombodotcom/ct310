<?php
/**
 * Demo for CT310
 */
/**
 * The Demo Controller.
 *
 * A basic MVC example using the classic view/addEdit/delete pattern
 */
class Controller_Arizona extends Controller
{
	/**
	 * Shows a list of all demo items
	 */
	public function action_index()
	{
// 		$layout = View::forge('arizona/layoutfull');

		$content = View::forge('arizona/index');

		$layout->content = Response::forge($content);

		return $layout;
	}
	public function action_a1()
	{
// 		$layout = View::forge('arizona/layoutfull');

		$content = View::forge('arizona/a1');

		$layout->content = Response::forge($content);

		return $layout;
	}

	public function action_a2()
	{
// 		$layout = View::forge('arizona/layoutfull');

		$content = View::forge('arizona/a2');

		$layout->content = Response::forge($content);

		return $layout;
	}
	public function action_a3()
	{
// 		$layout = View::forge('arizona/layoutfull');

		$content = View::forge('arizona/a3');

		$layout->content = Response::forge($content);

		return $layout;
	}
	public function action_about()
	{
// 		$layout = View::forge('arizona/layoutfull');

		$content = View::forge('arizona/about');

		$layout->content = Response::forge($content);

		return $layout;
	}
	public function action_contact()
	{
// 		$layout = View::forge('arizona/layoutfull');

		$content = View::forge('arizona/contact');

		$layout->content = Response::forge($content);

		return $layout;
	}

	public function action_check()
	{

		$username = Input::post('username');

		$password = Input::post('password');


		if($username === 'ct310' && md5($password) === 'a6cebbf02cc311177c569525a0f119d7')
		{
			Session::create();

			Session::set('username', $username);

			Session::set('userid', 11);

			Response::redirect("arizona/index");
		}
		if($username === 'tsciano' && md5($password) === '827ccb0eea8a706c4c34a16891f84e7b')//12345
		{
			Session::create();

			Session::set('username', $username);

			Session::set('userid', 22);
            Response::redirect("arizona/index");
		}
		if($username === 'jonhunt' && md5($password) === '827ccb0eea8a706c4c34a16891f84e7b')//12345
		{
			Session::create();

			Session::set('username', $username);

			Session::set('userid', 33);

				Response::redirect("arizona/index");
		}



		else
		{

				Response::redirect("https://www.zombo.com");

		}

	}

	public function action_printUserDetails()
	{
		$session = Session::instance();

		$username = $session->get('username');

		$id = $session->get('userid');

		if(isset($username) && isset($id))
		{

			$content = View::forge('login/print');

			$content->set_safe('username',$username);

			$content->set_safe('id',$id);

			return $content;

		}
		else
		{
			$content = View::forge('login/notLoggedIn');

			return $content;
		}

	}

	public function action_logout()
	{
		$session = Session::instance();

		$session->destroy();

		$content = View::forge('login/logout');

		return $content;
	}






}
