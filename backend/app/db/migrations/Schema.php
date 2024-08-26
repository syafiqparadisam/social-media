<?php

require "../../Core/DB.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create("image", function ($table) {
	$table->string("id");
	$table->string("name");
	$table->string("password");
	$table->string("token");
	$table->string("email");
	$table->string("createdAt");
});

Capsule::schema()->create("image", function ($table) {
	$table->string("user_id");
	$table->string("public_id");
	$table->string("public_url");
	$table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
});