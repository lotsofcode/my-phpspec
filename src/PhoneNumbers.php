<?php

class PhoneNumbers
{
	public function isValid($number)
	{
		$pattern = "/^((\(?0\d{4}\)?\s?\d{3}\s?\d{3})|(\(?0\d{3}\)?\s?\d{3}\s?\d{4})|(\(?0\d{2}\)?\s?\d{4}\s?\d{4}))(\s?\#(\d{4}|\d{3}))?$/";
		if (preg_match($pattern, $number)) {
			return true;
		}
		return false;
	}
}
