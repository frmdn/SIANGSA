<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use JWTAuth;
use JWTAuthException;
use App\User;

class ApiAuthController extends Controller
{
	public function store(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required|min:5'
		]);

		$name = $request->input('name');
		$email = $request->input('email');
		$password = $request->input('password');
		$phone = $request->input('phone');
		$address = $request->input('address');
		$qty = $request->input('qty');
		$address_lat = $request->input('address_lat');
		$address_lng = $request->input('address_lng');
		$layanan_id = $request->input('layanan_id');
		$status = "0";
		$userid = rand(10000000,99999999);

		$user = new User([
			'name' => $name,
			'email' => $email,
			'password' => bcrypt($password),
			'user_id' => $userid,
			'phone' => $phone,
			'address' => $address,
			'address_lng' => $address_lng,
			'address_lat' => $address_lat,
			'layanan_id' => $layanan_id,
			'qty' => $qty,
			'status' => $status,
		]);

		$credentials = [
			'email' => $email,
			'password' => $password
		];

		if ($user->save()) {
			$token = null;
			try {
				if (!$token = JWTAuth::attempt($credentials)) {
					return response()->json([
						'msg' => 'Email or Password are incorrect.'
					], 404);
				}
			} catch (JWTAuthException $e) {
				return response()->json([
					'msg' => 'failed to create token',
				], 404);
			}
			$user->signin = [
				'href' => 'api/login',
				'method' => 'post',
				'params' => 'email, password'
			];

			$response = [
				'msg' => 'user created',
				'user' => $user,
				'token' => $token,
			];

			return response()->json($response, 201);
		}

		$response = [
			'msg' => 'an error occured',
		];

		return response()->json($response, 404);
	}

	public function signin(Request $request)
	{
		$this->validate($request, [
			'email' => 'required|email',
			'password' => 'required|min:5'
		]);

		$email = $request->input('email');
		$password = $request->input('password');

		if ($user = User::where('email', $email)->first()) {
			$credentials = [
				'email' => $email,
				'password' => $password
			];
			$token = null;
			try {
				if (!$token = JWTAuth::attempt($credentials)) {
					return response()->json([
						'msg' => 'Email or Password are incorrect.'
					], 404);
				}
			} catch (JWTAuthException $e) {
				return response()->json([
					'msg' => 'failed to create token',
				], 404);
			}
			$user->signin = [
				'href' => 'api/login',
				'method' => 'post',
				'params' => 'email, password'
			];

			$response = [
				'msg' => 'user signin',
				'user' => $user,
				'token' => $token,
			];

			return response()->json($response, 201);
		}
	}
}
