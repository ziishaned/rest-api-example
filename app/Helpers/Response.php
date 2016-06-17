<?php 

namespace App\Helpers;

class Response 
{
	public static function notFound($message)
	{
		return static::respondState('Resource not found', $message, 404);
	}

	public static function badRequest($message) {
		return static::respondState('Bad Request', $message, 400);
	}

	public static function deleted() {
		return static::respondState(null, null, 204);
	}

	public static function created($item) {
		return static::json($item, 201);
	}

	public static function internalError($message) {
		return static::respondState('Internal Error', $message, 500);
	}

	public static function conflict($message) {
		return static::respondState('Conflict', $message, 209);
	}

	public static function json($data, $status = 200)
	{
		return response()->json($data, $status);
	}

	public static function respondState($title, $message, $code) {
		return response()->json([
			'title' => $title, 
			'detail' => $message,
			'code' => $code,
		], $code);
	}
}