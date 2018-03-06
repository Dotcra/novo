<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

namespace App\Controller;
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Index extends Controller{
	private $a;
	private $b;
	private $c;
	function __construct(){
	}

	function __destruct(){
	}

	function index($her='jess'){
		$a = [
			'root' => '/sym',
			'sitename' => 'fuckme',
			'uname' => 'jess',
		];
		return $this->render('index.html.twig', $a);
	}
}

#new pus();
#pus::f();

