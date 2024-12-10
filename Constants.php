<?php

namespace Test\Repo;

/**
 * Class Constants
 *
 * @package Test\Repo
 */
class Constants
{
    /**
     * Header type
     */
    const API_ACCEPT_HEADER_TYPE = 'application/json';

    /**
     * Charset
     */
    const API_CHARSET = 'utf-8';

    /**
     * Timeout limit
     */
    const API_TIMEOUT = 30;

    /**
     * Default language code
     */
    const API_DEFAULT_LANG_CODE = 'en';

    /**
     * Number of days for which card is stored within Saferpay
     */
    const API_PAYMENT_LIFE_TIME = 1000;

    /**
     * Id generator to be used by Saferpay
     */
    const API_ALIAS_ID_GENERATOR = 'RANDOM_UNIQUE';

    /**
     * Active status
     */
    const ACTIVE = 1;

    /**
     * Inactive status
     */
    const INACTIVE = 0;

   
}
