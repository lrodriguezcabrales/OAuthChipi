<?php

/*
 * Copyright (C) 2013-2016 Mailgun
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace OauthChipi;

/**
 * This class is the base class for the Mailgun SDK.
 */
class OauthChipi
{
	private $key;

	private $secret;

	public function __construct($key, $secret){

		$this->key = $key;
		$this->secret = $secret;

		echo "ajjajaj	aja";

	}

}