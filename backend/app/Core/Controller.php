<?php

namespace WebWaifu\Core;

class Controller
{
	public function model(string $model)
	{
		try {
			$model = "\\WebWaifu\\Models\\$model";

			if (class_exists($model)) {
				return new $model;
			}
		} catch (\Throwable $e) {
			throw new \Exception("Model $model not found");
		}

	}
}