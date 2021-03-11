<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class CustController extends Controller
{

	public function index(Request $req)
	{
		$login_data['email']	=	$req->email;
		$login_data['password']	=	$req->password;

		$login = DB::table('test')->insert($login_data);

		return "success";
	}

	public function	list(Request $req)
	{
		$list['list_name'] = $req->list_name;
		$list['owner_name'] = $req->list_name;
		$list['owner_email'] = $req->list_name;
		$list['reply_email'] = $req->list_name;
		$list['bounce_email'] = $req->list_name;

		$sucess = DB::table('list')->insert($list);

		if($sucess)
		{
			return response()->json(['status' => 200, 'message' => 'list created successfully']);
		}else{
			return response()->json(['status' => 422, 'message' => 'there is something wrong']);
		}

	}



}