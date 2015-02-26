<?php

/**
 * Преобразование стиля кода
 *
 * @param null|string $inputLine
 *
 * @return string|null
 */
function cameCaseToUnderscore($inputLine = null)
{
	$words = [];
	$word = null;
	if (preg_match_all('/([A-Z]+(?![a-z]))|((?>[A-Z])[a-z]+)|((?![A-Z])[a-z]+)/', $inputLine, $words) > 0)
	{
		$words = $words[0];
		$word = array_reduce($words, function ($prevWord, $word) {
				$underscore = $prevWord ? '_' : null;
				return $prevWord . $underscore . strtolower($word);
			}, null);
	}
	unset($words);
	return $word;
}
var_dump(cameCaseToUnderscore('getPostById')); // get_post_by_id
var_dump(cameCaseToUnderscore('setDBSettings')); // set_db_settings
