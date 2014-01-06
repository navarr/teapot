<?php
/**
 * Interface representing extended HTTP status codes for Web servers. These codes are
 * represented as an interface so that developers may implement it and then use
 * parent::[CODE] to gain a code, or to extend the codes using static::[CODE]
 * and override their default description.
 *
 * This allows for codes to be repurposed in a natural way where the core,
 * traditional use would not be meaningful.
 *
 * PHP version 5.3
 *
 * @category   StatusCode
 * @package    Teapot
 * @subpackage HttpResponse
 * @author     Barney Hanlon <barney@shrikeh.net>
 * @copyright  2013 B Hanlon. All rights reserved.
 * @license    MIT http://opensource.org/licenses/MIT
 * @link       http://shrikeh.github.com/teapot
 */
namespace Teapot\StatusCode;

/**
 * Interface representing extended HTTP status codes for Web servers. These codes are
 * represented as an interface so that developers may implement it and then use
 * parent::[CODE] to gain a code, or to extend the codes using static::[CODE]
 * and override their default description.
 *
 * This allows for codes to be repurposed in a natural way where the core,
 * traditional use would not be meaningful.
 *
 * @category   StatusCode
 * @package    Teapot
 * @subpackage HttpResponse
 * @author     Barney Hanlon <barney@shrikeh.net>
 * @copyright  2013 B Hanlon. All rights reserved.
 * @license    MIT http://opensource.org/licenses/MIT
 * @link       http://shrikeh.github.com/teapot
 */

interface Webserver
{

    /**
     * NUsed in Nginx logs to indicate that the server has returned no 
     * information to the client and closed the connection (useful as 
     * a deterrent for malware).
     * 
     * @var integer
     */
    const NGINX_NO_RESPONSE = 444;

    /**
     * Nginx internal code similar to 431 but it was introduced earlier.
     * 
     * @var integer
     */
    const NGINX_REQUEST_HEADER_TOO_LARGE = 494;

    /**
     * Nginx internal code used when SSL client certificate error occurred to 
     * distinguish it from 4XX in a log and an error page redirection.
     * 
     * @var integer
     */
    const NGINX_CERT_ERROR = 495;

    /**
     * Nginx internal code used when client didn't provide certificate to 
     * distinguish it from 4XX in a log and an error page redirection.
     * 
     * @var integer
     */
    const NGINX_NO_CERT = 496;

    /**
     * Nginx internal code used for the plain HTTP requests that are sent to 
     * HTTPS port to distinguish it from 4XX in a log and an error page 
     * redirection.
     * 
     * @var integer
     */
    const NGINX_HTTP_TO_HTTPS = 497;

    /**
     * Used in Nginx logs to indicate when the connection has been closed by 
     * client while the server is still processing its request, making server 
     * unable to send a status code back.
     * 
     * @var integer
     */
    const NGINX_CLIENT_CLOSED_REQUEST = 499;

    /**
     * This status code, while used by many servers, is not specified in any RFCs. 
     * Apache-specific.
     * 
     * @var integer
     */
    const BANDWIDTH_LIMIT_EXCEEDED = 509;
}
