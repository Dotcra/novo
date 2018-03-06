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

class Staff extends Controller{
	private $a;
	private $b;
	private $c;
	function __construct(){
	}

	function __destruct(){
	}

	function list(){
		$a = [
			'root' => '/n',
			'sitename' => 'fuckme',
			'uname' => 'jess',
		];
		return $this->render('staff.html.twig', $a);
	}
}
