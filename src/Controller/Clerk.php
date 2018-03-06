<?php
/**
 * vim:ft=php
 * @author Dotcra <dotcra@gmail.com>
 * @version
 * @todo
 */

namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class Clerk extends Controller{
	private $a;
	private $b;
	private $c;
	function __construct(){
	}

	function __destruct(){
	}

	function list(){
		$a = [
			'root' => '/sym',
			'sitename' => 'fuckme',
			'uname' => 'jess',
		];
		return $this->render('personnel.html.twig', $a);
	}
}

#new pus();
#pus::f();

