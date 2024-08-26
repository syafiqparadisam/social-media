<?php

namespace WebWaifu\Utils;

class Response {
	public $statusCode;
	public $msg;
	public $data;
	public function __construct(int $statusCode, string $msg = null, $data = null) {
		$this->statusCode = $statusCode;
		$this->data = $data;
		$this->msg = $msg;
	}

	public function create() {
		header("Content-type: application/json");
		http_response_code($this->statusCode);

		return ["statusCode" => $this->statusCode, "data" => $this->data, "message" => $this->msg];
	}
}