<?php

namespace UgurKormaz\CosineSimilarity;

class Calculate
{
	public function __invoke(array $vectorOne, array $vectorSecond): float
	{
		$vectorKey = array_keys(array_merge($vectorOne, $vectorSecond));

		$dotProduct = 0;
		$magnitudeVectorOne = 0;
		$magnitudeVectorSecond = 0;

		foreach ($vectorKey as $key) {
			$keyVectorOneValue = isset($vectorOne[$key]) ? $vectorOne[$key] : 0;
			$keyVectorSecondValue = isset($vectorSecond[$key]) ? $vectorSecond[$key] : 0;
			$dotProduct += ($keyVectorOneValue * $keyVectorSecondValue);
			$magnitudeVectorOne += ($keyVectorOneValue * $keyVectorOneValue);
			$magnitudeVectorSecond += ($keyVectorSecondValue * $keyVectorSecondValue);
		}

		$magnitudeVectorOne = sqrt($magnitudeVectorOne);
		$magnitudeVectorSecond = sqrt($magnitudeVectorSecond);

		$similarity = $dotProduct / ($magnitudeVectorOne * $magnitudeVectorSecond);

		return floatval($similarity);
	}
}
