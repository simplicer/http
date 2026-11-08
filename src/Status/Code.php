<?php

declare(strict_types=1);

namespace Simplicer\Http\Status;

/**
 * Class Code
 *
 * Contains HTTP status codes and their associated RFC descriptions.
 */
class Code
{
    // Informational responses
    /** @var int Continue (RFC 9110, 15.2.1) */
    public const CONTINUE = 100; // RFC 9110, 15.2.1
    /** @var int Switching Protocols (RFC 9110, 15.2.2) */
    public const SWITCHING_PROTOCOLS = 101; // RFC 9110, 15.2.2
    /** @var int Processing (RFC 2518, 10.1) */
    public const PROCESSING = 102; // RFC 2518, 10.1
    /** @var int Early Hints (RFC 8297) */
    public const EARLY_HINTS = 103; // RFC 8297

    // Successful responses
    /** @var int OK (RFC 9110, 15.3.1) */
    public const OK = 200; // RFC 9110, 15.3.1
    /** @var int Created (RFC 9110, 15.3.2) */
    public const CREATED = 201; // RFC 9110, 15.3.2
    /** @var int Accepted (RFC 9110, 15.3.3) */
    public const ACCEPTED = 202; // RFC 9110, 15.3.3
    /** @var int Non-Authoritative Information (RFC 9110, 15.3.4) */
    public const NON_AUTHORITATIVE_INFO = 203; // RFC 9110, 15.3.4
    /** @var int No Content (RFC 9110, 15.3.5) */
    public const NO_CONTENT = 204; // RFC 9110, 15.3.5
    /** @var int Reset Content (RFC 9110, 15.3.6) */
    public const RESET_CONTENT = 205; // RFC 9110, 15.3.6
    /** @var int Partial Content (RFC 9110, 15.3.7) */
    public const PARTIAL_CONTENT = 206; // RFC 9110, 15.3.7
    /** @var int Multi-Status (RFC 4918, 11.1) */
    public const MULTI_STATUS = 207; // RFC 4918, 11.1
    /** @var int Already Reported (RFC 5842, 7.1) */
    public const ALREADY_REPORTED = 208; // RFC 5842, 7.1
    /** @var int IM Used (RFC 3229, 10.4.1) */
    public const IM_USED = 226; // RFC 3229, 10.4.1

    // Redirection messages
    /** @var int Multiple Choices (RFC 9110, 15.4.1) */
    public const MULTIPLE_CHOICES = 300; // RFC 9110, 15.4.1
    /** @var int Moved Permanently (RFC 9110, 15.4.2) */
    public const MOVED_PERMANENTLY = 301; // RFC 9110, 15.4.2
    /** @var int Found (RFC 9110, 15.4.3) */
    public const FOUND = 302; // RFC 9110, 15.4.3
    /** @var int See Other (RFC 9110, 15.4.4) */
    public const SEE_OTHER = 303; // RFC 9110, 15.4.4
    /** @var int Not Modified (RFC 9110, 15.4.5) */
    public const NOT_MODIFIED = 304; // RFC 9110, 15.4.5
    /** @var int Use Proxy (RFC 9110, 15.4.6) */
    public const USE_PROXY = 305; // RFC 9110, 15.4.6
    /** @var int Temporary Redirect (RFC 9110, 15.4.8) */
    public const TEMPORARY_REDIRECT = 307; // RFC 9110, 15.4.8
    /** @var int Permanent Redirect (RFC 9110, 15.4.9) */
    public const PERMANENT_REDIRECT = 308; // RFC 9110, 15.4.9

    // Client error responses
    /** @var int Bad Request (RFC 9110, 15.5.1) */
    public const BAD_REQUEST = 400; // RFC 9110, 15.5.1
    /** @var int Unauthorized (RFC 9110, 15.5.2) */
    public const UNAUTHORIZED = 401; // RFC 9110, 15.5.2
    /** @var int Payment Required (RFC 9110, 15.5.3) */
    public const PAYMENT_REQUIRED = 402; // RFC 9110, 15.5.3
    /** @var int Forbidden (RFC 9110, 15.5.4) */
    public const FORBIDDEN = 403; // RFC 9110, 15.5.4
    /** @var int Not Found (RFC 9110, 15.5.5) */
    public const NOT_FOUND = 404; // RFC 9110, 15.5.5
    /** @var int Method Not Allowed (RFC 9110, 15.5.6) */
    public const METHOD_NOT_ALLOWED = 405; // RFC 9110, 15.5.6
    /** @var int Not Acceptable (RFC 9110, 15.5.7) */
    public const NOT_ACCEPTABLE = 406; // RFC 9110, 15.5.7
    /** @var int Proxy Authentication Required (RFC 9110, 15.5.8) */
    public const PROXY_AUTH_REQUIRED = 407; // RFC 9110, 15.5.8
    /** @var int Request Timeout (RFC 9110, 15.5.9) */
    public const REQUEST_TIMEOUT = 408; // RFC 9110, 15.5.9
    /** @var int Conflict (RFC 9110, 15.5.10) */
    public const CONFLICT = 409; // RFC 9110, 15.5.10
    /** @var int Gone (RFC 9110, 15.5.11) */
    public const GONE = 410; // RFC 9110, 15.5.11
    /** @var int Length Required (RFC 9110, 15.5.12) */
    public const LENGTH_REQUIRED = 411; // RFC 9110, 15.5.12
    /** @var int Precondition Failed (RFC 9110, 15.5.13) */
    public const PRECONDITION_FAILED = 412; // RFC 9110, 15.5.13
    /** @var int Request Entity Too Large (RFC 9110, 15.5.14) */
    public const REQUEST_ENTITY_TOO_LARGE = 413; // RFC 9110, 15.5.14
    /** @var int Request URI Too Long (RFC 9110, 15.5.15) */
    public const REQUEST_URI_TOO_LONG = 414; // RFC 9110, 15.5.15
    /** @var int Unsupported Media Type (RFC 9110, 15.5.16) */
    public const UNSUPPORTED_MEDIA_TYPE = 415; // RFC 9110, 15.5.16
    /** @var int Requested Range Not Satisfiable (RFC 9110, 15.5.17) */
    public const REQUESTED_CATEGORY_NOT_SATISFIABLE = 416; // RFC 9110, 15.5.17
    /** @var int Expectation Failed (RFC 9110, 15.5.18) */
    public const EXPECTATION_FAILED = 417; // RFC 9110, 15.5.18
    /** @var int I"m a teapot (RFC 9110, 15.5.19) */
    public const TEAPOT = 418; // RFC 9110, 15.5.19 (Unused)
    /** @var int Misdirected Request (RFC 9110, 15.5.20) */
    public const MISDIRECTED_REQUEST = 421; // RFC 9110, 15.5.20
    /** @var int Unprocessable Entity (RFC 9110, 15.5.21) */
    public const UNPROCESSABLE_ENTITY = 422; // RFC 9110, 15.5.21
    /** @var int Locked (RFC 4918, 11.3) */
    public const LOCKED = 423; // RFC 4918, 11.3
    /** @var int Failed Dependency (RFC 4918, 11.4) */
    public const FAILED_DEPENDENCY = 424; // RFC 4918, 11.4
    /** @var int Too Early (RFC 8470, 5.2.) */
    public const TOO_EARLY = 425; // RFC 8470, 5.2.
    /** @var int Upgrade Required (RFC 9110, 15.5.22) */
    public const UPGRADE_REQUIRED = 426; // RFC 9110, 15.5.22
    /** @var int Precondition Required (RFC 6585, 3) */
    public const PRECONDITION_REQUIRED = 428; // RFC 6585, 3
    /** @var int Too Many Requests (RFC 6585, 4) */
    public const TOO_MANY_REQUESTS = 429; // RFC 6585, 4
    /** @var int Request Header Fields Too Large (RFC 6585, 5) */
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431; // RFC 6585, 5
    /** @var int Unavailable For Legal Reasons (RFC 7725, 3) */
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451; // RFC 7725, 3

    // Server error responses
    /** @var int Internal Server Error (RFC 9110, 15.6.1) */
    public const INTERNAL_SERVER_ERROR = 500; // RFC 9110, 15.6.1
    /** @var int Not Implemented (RFC 9110, 15.6.2) */
    public const NOT_IMPLEMENTED = 501; // RFC 9110, 15.6.2
    /** @var int Bad Gateway (RFC 9110, 15.6.3) */
    public const BAD_GATEWAY = 502; // RFC 9110, 15.6.3
    /** @var int Service Unavailable (RFC 9110, 15.6.4) */
    public const SERVICE_UNAVAILABLE = 503; // RFC 9110, 15.6.4
    /** @var int Gateway Timeout (RFC 9110, 15.6.5) */
    public const GATEWAY_TIMEOUT = 504; // RFC 9110, 15.6.5
    /** @var int HTTP Version Not Supported (RFC 9110, 15.6.6) */
    public const HTTP_VERSION_NOT_SUPPORTED = 505; // RFC 9110, 15.6.6
    /** @var int Variant Also Negotiates (RFC 2295, 8.1) */
    public const VARIANT_ALSO_NEGOTIATES = 506; // RFC 2295, 8.1
    /** @var int Insufficient Storage (RFC 4918, 11.5) */
    public const INSUFFICIENT_STORAGE = 507; // RFC 4918, 11.5
    /** @var int Loop Detected (RFC 5842, 7.2) */
    public const LOOP_DETECTED = 508; // RFC 5842, 7.2
    /** @var int Not Extended (RFC 2774, 7) */
    public const NOT_EXTENDED = 510; // RFC 2774, 7
    /** @var int Network Authentication Required (RFC 6585, 6) */
    public const NETWORK_AUTHENTICATION_REQUIRED = 511; // RFC 6585, 6

    // Code texts
    protected const TEXT_CONTINUE = "Continue";
    protected const TEXT_SWITCHING_PROTOCOLS = "Switching Protocols";
    protected const TEXT_PROCESSING = "Processing";
    protected const TEXT_EARLY_HINTS = "Early Hints";
    protected const TEXT_OK = "OK";
    protected const TEXT_CREATED = "Created";
    protected const TEXT_ACCEPTED = "Accepted";
    protected const TEXT_NON_AUTHORITATIVE_INFO = "Non-Authoritative Information";
    protected const TEXT_NO_CONTENT = "No Content";
    protected const TEXT_RESET_CONTENT = "Reset Content";
    protected const TEXT_PARTIAL_CONTENT = "Partial Content";
    protected const TEXT_MULTI_STATUS = "Multi-Status";
    protected const TEXT_ALREADY_REPORTED = "Already Reported";
    protected const TEXT_IM_USED = "IM Used";
    protected const TEXT_MULTIPLE_CHOICES = "Multiple Choices";
    protected const TEXT_MOVED_PERMANENTLY = "Moved Permanently";
    protected const TEXT_FOUND = "Found";
    protected const TEXT_SEE_OTHER = "See Other";
    protected const TEXT_NOT_MODIFIED = "Not Modified";
    protected const TEXT_USE_PROXY = "Use Proxy";
    protected const TEXT_TEMPORARY_REDIRECT = "Temporary Redirect";
    protected const TEXT_PERMANENT_REDIRECT = "Permanent Redirect";
    protected const TEXT_BAD_REQUEST = "Bad Request";
    protected const TEXT_UNAUTHORIZED = "Unauthorized";
    protected const TEXT_PAYMENT_REQUIRED = "Payment Required";
    protected const TEXT_FORBIDDEN = "Forbidden";
    protected const TEXT_NOT_FOUND = "Not Found";
    protected const TEXT_METHOD_NOT_ALLOWED = "Method Not Allowed";
    protected const TEXT_NOT_ACCEPTABLE = "Not Acceptable";
    protected const TEXT_PROXY_AUTH_REQUIRED = "Proxy Authentication Required";
    protected const TEXT_REQUEST_TIMEOUT = "Request Timeout";
    protected const TEXT_CONFLICT = "Conflict";
    protected const TEXT_GONE = "Gone";
    protected const TEXT_LENGTH_REQUIRED = "Length Required";
    protected const TEXT_PRECONDITION_FAILED = "Precondition Failed";
    protected const TEXT_REQUEST_ENTITY_TOO_LARGE = "Request Entity Too Large";
    protected const TEXT_REQUEST_URI_TOO_LONG = "Request URI Too Long";
    protected const TEXT_UNSUPPORTED_MEDIA_TYPE = "Unsupported Media Type";
    protected const TEXT_REQUESTED_CATEGORY_NOT_SATISFIABLE = "Requested Range Not Satisfiable";
    protected const TEXT_EXPECTATION_FAILED = "Expectation Failed";
    protected const TEXT_TEAPOT = "I'm a teapot";
    protected const TEXT_MISDIRECTED_REQUEST = "Misdirected Request";
    protected const TEXT_UNPROCESSABLE_ENTITY = "Unprocessable Entity";
    protected const TEXT_LOCKED = "Locked";
    protected const TEXT_FAILED_DEPENDENCY = "Failed Dependency";
    protected const TEXT_TOO_EARLY = "Too Early";
    protected const TEXT_UPGRADE_REQUIRED = "Upgrade Required";
    protected const TEXT_PRECONDITION_REQUIRED = "Precondition Required";
    protected const TEXT_TOO_MANY_REQUESTS = "Too Many Requests";
    protected const TEXT_REQUEST_HEADER_FIELDS_TOO_LARGE = "Request Header Fields Too Large";
    protected const TEXT_UNAVAILABLE_FOR_LEGAL_REASONS = "Unavailable For Legal Reasons";
    protected const TEXT_INTERNAL_SERVER_ERROR = "Internal Server Error";
    protected const TEXT_NOT_IMPLEMENTED = "Not Implemented";
    protected const TEXT_BAD_GATEWAY = "Bad Gateway";
    protected const TEXT_SERVICE_UNAVAILABLE = "Service Unavailable";
    protected const TEXT_GATEWAY_TIMEOUT = "Gateway Timeout";
    protected const TEXT_HTTP_VERSION_NOT_SUPPORTED = "HTTP Version Not Supported";
    protected const TEXT_VARIANT_ALSO_NEGOTIATES = "Variant Also Negotiates";
    protected const TEXT_INSUFFICIENT_STORAGE = "Insufficient Storage";
    protected const TEXT_LOOP_DETECTED = "Loop Detected";
    protected const TEXT_NOT_EXTENDED = "Not Extended";
    protected const TEXT_NETWORK_AUTHENTICATION_REQUIRED = "Network Authentication Required";
    protected const TEXT_DEFAULT = "Unknown Status";

    // Code descriptions
    protected const DESCRIPTION_CONTINUE = "The initial part of a request has been received and has not yet been rejected by the server.";
    protected const DESCRIPTION_SWITCHING_PROTOCOLS = "The server is switching protocols as requested by the client.";
    protected const DESCRIPTION_PROCESSING = "The server has received the request but is still processing it.";
    protected const DESCRIPTION_EARLY_HINTS = "The server is sending early hints to help the client start preloading resources.";
    protected const DESCRIPTION_OK = "The request was successful.";
    protected const DESCRIPTION_CREATED = "The request was successful and a new resource was created.";
    protected const DESCRIPTION_ACCEPTED = "The request has been accepted for processing, but the processing is not complete.";
    protected const DESCRIPTION_NON_AUTHORITATIVE_INFO = "The request was successful but the information may be from a third party.";
    protected const DESCRIPTION_NO_CONTENT = "The request was successful but there is no content to return.";
    protected const DESCRIPTION_RESET_CONTENT = "The request was successful; reset the content view.";
    protected const DESCRIPTION_PARTIAL_CONTENT = "The request was partially successful.";
    protected const DESCRIPTION_MULTI_STATUS = "Indicates that the response contains information about multiple resources, each with its own status.";
    protected const DESCRIPTION_ALREADY_REPORTED = "Signifies that the client's requested changes or effects have already been reported in a previous response, avoiding repetition of information.";
    protected const DESCRIPTION_IM_USED = "Suggests that the response contains a representation of how the server has applied the requested actions, reflecting the results of those operations.";
    protected const DESCRIPTION_MULTIPLE_CHOICES = "There are multiple options for the resource that the client may follow.";
    protected const DESCRIPTION_MOVED_PERMANENTLY = "The resource has been permanently moved to a new location.";
    protected const DESCRIPTION_FOUND = "The resource has been temporarily moved to a new location.";
    protected const DESCRIPTION_SEE_OTHER = "The client should look at another location.";
    protected const DESCRIPTION_NOT_MODIFIED = "The resource has not been modified since the last request.";
    protected const DESCRIPTION_USE_PROXY = "The requested resource is only available through a proxy.";
    protected const DESCRIPTION_TEMPORARY_REDIRECT = "The resource is temporarily located at a different URI.";
    protected const DESCRIPTION_PERMANENT_REDIRECT = "The resource has been permanently moved to a different URI.";
    protected const DESCRIPTION_BAD_REQUEST = "The request could not be understood by the server due to malformed syntax.";
    protected const DESCRIPTION_UNAUTHORIZED = "The request requires user authentication.";
    protected const DESCRIPTION_PAYMENT_REQUIRED = "Payment is required to complete the request.";
    protected const DESCRIPTION_FORBIDDEN = "The server understood the request, but refuses to authorize it.";
    protected const DESCRIPTION_NOT_FOUND = "The requested resource could not be found.";
    protected const DESCRIPTION_METHOD_NOT_ALLOWED = "The method specified in the request is not allowed.";
    protected const DESCRIPTION_NOT_ACCEPTABLE = "The resource is not available in a format acceptable to the client.";
    protected const DESCRIPTION_PROXY_AUTH_REQUIRED = "Proxy authentication is required to access the requested resource.";
    protected const DESCRIPTION_REQUEST_TIMEOUT = "The server timed out waiting for the request.";
    protected const DESCRIPTION_CONFLICT = "The request could not be completed due to a conflict with the current state of the resource.";
    protected const DESCRIPTION_GONE = "The resource is no longer available and will not be available again.";
    protected const DESCRIPTION_LENGTH_REQUIRED = "The request did not specify the length of its content, which is required by the resource.";
    protected const DESCRIPTION_PRECONDITION_FAILED = "The server does not meet one of the preconditions specified by the client.";
    protected const DESCRIPTION_REQUEST_ENTITY_TOO_LARGE = "The request is larger than the server is willing or able to process.";
    protected const DESCRIPTION_REQUEST_URI_TOO_LONG = "The URI provided was too long for the server to process.";
    protected const DESCRIPTION_UNSUPPORTED_MEDIA_TYPE = "The server does not support the media format of the requested data.";
    protected const DESCRIPTION_REQUESTED_CATEGORY_NOT_SATISFIABLE = "The range specified by the Range header field in the request cannot be fulfilled.";
    protected const DESCRIPTION_EXPECTATION_FAILED = "The server cannot meet the requirements of the Expect header field in the request.";
    protected const DESCRIPTION_TEAPOT = "I'm a teapot.";
    protected const DESCRIPTION_MISDIRECTED_REQUEST = "The request was sent to a server that is not able to produce a response.";
    protected const DESCRIPTION_UNPROCESSABLE_ENTITY = "The server understands the content type of the request, but was unable to process the contained instructions.";
    protected const DESCRIPTION_LOCKED = "The resource that is being accessed is locked.";
    protected const DESCRIPTION_FAILED_DEPENDENCY = "The request failed because it depended on another request and that request failed.";
    protected const DESCRIPTION_TOO_EARLY = "The server is unwilling to risk processing a request that might be replayed.";
    protected const DESCRIPTION_UPGRADE_REQUIRED = "The client should switch to a different protocol such as TLS/1.0.";
    protected const DESCRIPTION_PRECONDITION_REQUIRED = "The origin server requires the request to be conditional.";
    protected const DESCRIPTION_TOO_MANY_REQUESTS = "The user has sent too many requests in a given amount of time ('rate limiting').";
    protected const DESCRIPTION_REQUEST_HEADER_FIELDS_TOO_LARGE = "The server is unwilling to process the request because its header fields are too large.";
    protected const DESCRIPTION_UNAVAILABLE_FOR_LEGAL_REASONS = "The resource is unavailable for legal reasons.";
    protected const DESCRIPTION_INTERNAL_SERVER_ERROR = "The server encountered an internal error and was unable to complete your request.";
    protected const DESCRIPTION_NOT_IMPLEMENTED = "The server does not support the functionality required to fulfill the request.";
    protected const DESCRIPTION_BAD_GATEWAY = "The server received an invalid response from the upstream server.";
    protected const DESCRIPTION_SERVICE_UNAVAILABLE = "The server is currently unavailable (because it is overloaded or down for maintenance).";
    protected const DESCRIPTION_GATEWAY_TIMEOUT = "The server did not receive a timely response from the upstream server.";
    protected const DESCRIPTION_HTTP_VERSION_NOT_SUPPORTED = "The server does not support the HTTP protocol version used in the request.";
    protected const DESCRIPTION_VARIANT_ALSO_NEGOTIATES = "Transparent content negotiation for the request results in a circular reference.";
    protected const DESCRIPTION_INSUFFICIENT_STORAGE = "The server is unable to store the representation needed to complete the request.";
    protected const DESCRIPTION_LOOP_DETECTED = "The server detected an infinite loop while processing the request.";
    protected const DESCRIPTION_NOT_EXTENDED = "Further extensions to the request are required for the server to fulfill it.";
    protected const DESCRIPTION_NETWORK_AUTHENTICATION_REQUIRED = "The client needs to authenticate to gain network access.";
    protected const DESCRIPTION_DEFAULT = "This status is unknown or not implemented";

    // Status code categories
    protected const CATEGORY_INFORMATIONAL = 'Informational';
    protected const CATEGORY_SUCCESSFUL = 'Successful';
    protected const CATEGORY_REDIRECTION = 'Redirection';
    protected const CATEGORY_CLIENT_ERROR = 'Client Error';
    protected const CATEGORY_SERVER_ERROR = 'Server Error';
    protected const CATEGORY_UNKNOWN = 'Unknown';

    /**
     * Prevent instantiation of the class.
     */
    public function __construct()
    {
    }

    /**
     * Let available call status code as method.
     *
     * This magic method allows calling status code constants as methods.
     *
     * @param string $code HTTP status code constant name
     * @param array $arguments Arguments (not used)
     * @return int HTTP status code
     * @throws InvalidStatusCodeException if the name is not a status code constant
     */
    public static function __callStatic(string $code, array $arguments): int
    {
        $invalidPrefixes = ['TEXT', 'DESCRIPTION', 'CATEGORY'];
        $constParts = explode('_', $code);
        if (count($constParts) >= 1 && in_array($constParts[0], $invalidPrefixes)) {
            throw new InvalidStatusCodeException($code);
        }

        $statusCodesConstants = (new \ReflectionClass(__CLASS__))->getConstants();
        if (!array_key_exists($code, $statusCodesConstants)) {
            throw new InvalidStatusCodeException($code);
        }
        return $statusCodesConstants[$code];
    }

    /**
     * Returns a text for the HTTP status code.
     *
     * @param int $code HTTP status code
     * @return string Text for the given HTTP status code, or "Unknown Status" if the code is unknown
     */
    public static function getStatusText(int $code): string
    {
        switch ($code) {
            case self::CONTINUE:
                return self::TEXT_CONTINUE;
            case self::SWITCHING_PROTOCOLS:
                return self::TEXT_SWITCHING_PROTOCOLS;
            case self::PROCESSING:
                return self::TEXT_PROCESSING;
            case self::EARLY_HINTS:
                return self::TEXT_EARLY_HINTS;
            case self::OK:
                return self::TEXT_OK;
            case self::CREATED:
                return self::TEXT_CREATED;
            case self::ACCEPTED:
                return self::TEXT_ACCEPTED;
            case self::NON_AUTHORITATIVE_INFO:
                return self::TEXT_NON_AUTHORITATIVE_INFO;
            case self::NO_CONTENT:
                return self::TEXT_NO_CONTENT;
            case self::RESET_CONTENT:
                return self::TEXT_RESET_CONTENT;
            case self::PARTIAL_CONTENT:
                return self::TEXT_PARTIAL_CONTENT;
            case self::MULTI_STATUS:
                return self::TEXT_MULTI_STATUS;
            case self::ALREADY_REPORTED:
                return self::TEXT_ALREADY_REPORTED;
            case self::IM_USED:
                return self::TEXT_IM_USED;
            case self::MULTIPLE_CHOICES:
                return self::TEXT_MULTIPLE_CHOICES;
            case self::MOVED_PERMANENTLY:
                return self::TEXT_MOVED_PERMANENTLY;
            case self::FOUND:
                return self::TEXT_FOUND;
            case self::SEE_OTHER:
                return self::TEXT_SEE_OTHER;
            case self::NOT_MODIFIED:
                return self::TEXT_NOT_MODIFIED;
            case self::USE_PROXY:
                return self::TEXT_USE_PROXY;
            case self::TEMPORARY_REDIRECT:
                return self::TEXT_TEMPORARY_REDIRECT;
            case self::PERMANENT_REDIRECT:
                return self::TEXT_PERMANENT_REDIRECT;
            case self::BAD_REQUEST:
                return self::TEXT_BAD_REQUEST;
            case self::UNAUTHORIZED:
                return self::TEXT_UNAUTHORIZED;
            case self::PAYMENT_REQUIRED:
                return self::TEXT_PAYMENT_REQUIRED;
            case self::FORBIDDEN:
                return self::TEXT_FORBIDDEN;
            case self::NOT_FOUND:
                return self::TEXT_NOT_FOUND;
            case self::METHOD_NOT_ALLOWED:
                return self::TEXT_METHOD_NOT_ALLOWED;
            case self::NOT_ACCEPTABLE:
                return self::TEXT_NOT_ACCEPTABLE;
            case self::PROXY_AUTH_REQUIRED:
                return self::TEXT_PROXY_AUTH_REQUIRED;
            case self::REQUEST_TIMEOUT:
                return self::TEXT_REQUEST_TIMEOUT;
            case self::CONFLICT:
                return self::TEXT_CONFLICT;
            case self::GONE:
                return self::TEXT_GONE;
            case self::LENGTH_REQUIRED:
                return self::TEXT_LENGTH_REQUIRED;
            case self::PRECONDITION_FAILED:
                return self::TEXT_PRECONDITION_FAILED;
            case self::REQUEST_ENTITY_TOO_LARGE:
                return self::TEXT_REQUEST_ENTITY_TOO_LARGE;
            case self::REQUEST_URI_TOO_LONG:
                return self::TEXT_REQUEST_URI_TOO_LONG;
            case self::UNSUPPORTED_MEDIA_TYPE:
                return self::TEXT_UNSUPPORTED_MEDIA_TYPE;
            case self::REQUESTED_CATEGORY_NOT_SATISFIABLE:
                return self::TEXT_REQUESTED_CATEGORY_NOT_SATISFIABLE;
            case self::EXPECTATION_FAILED:
                return self::TEXT_EXPECTATION_FAILED;
            case self::TEAPOT:
                return self::TEXT_TEAPOT;
            case self::MISDIRECTED_REQUEST:
                return self::TEXT_MISDIRECTED_REQUEST;
            case self::UNPROCESSABLE_ENTITY:
                return self::TEXT_UNPROCESSABLE_ENTITY;
            case self::LOCKED:
                return self::TEXT_LOCKED;
            case self::FAILED_DEPENDENCY:
                return self::TEXT_FAILED_DEPENDENCY;
            case self::TOO_EARLY:
                return self::TEXT_TOO_EARLY;
            case self::UPGRADE_REQUIRED:
                return self::TEXT_UPGRADE_REQUIRED;
            case self::PRECONDITION_REQUIRED:
                return self::TEXT_PRECONDITION_REQUIRED;
            case self::TOO_MANY_REQUESTS:
                return self::TEXT_TOO_MANY_REQUESTS;
            case self::REQUEST_HEADER_FIELDS_TOO_LARGE:
                return self::TEXT_REQUEST_HEADER_FIELDS_TOO_LARGE;
            case self::UNAVAILABLE_FOR_LEGAL_REASONS:
                return self::TEXT_UNAVAILABLE_FOR_LEGAL_REASONS;
            case self::INTERNAL_SERVER_ERROR:
                return self::TEXT_INTERNAL_SERVER_ERROR;
            case self::NOT_IMPLEMENTED:
                return self::TEXT_NOT_IMPLEMENTED;
            case self::BAD_GATEWAY:
                return self::TEXT_BAD_GATEWAY;
            case self::SERVICE_UNAVAILABLE:
                return self::TEXT_SERVICE_UNAVAILABLE;
            case self::GATEWAY_TIMEOUT:
                return self::TEXT_GATEWAY_TIMEOUT;
            case self::HTTP_VERSION_NOT_SUPPORTED:
                return self::TEXT_HTTP_VERSION_NOT_SUPPORTED;
            case self::VARIANT_ALSO_NEGOTIATES:
                return self::TEXT_VARIANT_ALSO_NEGOTIATES;
            case self::INSUFFICIENT_STORAGE:
                return self::TEXT_INSUFFICIENT_STORAGE;
            case self::LOOP_DETECTED:
                return self::TEXT_LOOP_DETECTED;
            case self::NOT_EXTENDED:
                return self::TEXT_NOT_EXTENDED;
            case self::NETWORK_AUTHENTICATION_REQUIRED:
                return self::TEXT_NETWORK_AUTHENTICATION_REQUIRED;
            default:
                return self::TEXT_DEFAULT;
        }
    }

    /**
     * Returns a description for the HTTP status code.
     *
     * @param int $code HTTP status code
     * @return string Description for the given HTTP status code, or "This status is unknown or not implemented" if the code is unknown
     */
    public static function getStatusDescription(int $code): string
    {
        switch ($code) {
            case self::CONTINUE:
                return self::DESCRIPTION_CONTINUE;
            case self::SWITCHING_PROTOCOLS:
                return self::DESCRIPTION_SWITCHING_PROTOCOLS;
            case self::PROCESSING:
                return self::DESCRIPTION_PROCESSING;
            case self::EARLY_HINTS:
                return self::DESCRIPTION_EARLY_HINTS;
            case self::OK:
                return self::DESCRIPTION_OK;
            case self::CREATED:
                return self::DESCRIPTION_CREATED;
            case self::ACCEPTED:
                return self::DESCRIPTION_ACCEPTED;
            case self::NON_AUTHORITATIVE_INFO:
                return self::DESCRIPTION_NON_AUTHORITATIVE_INFO;
            case self::NO_CONTENT:
                return self::DESCRIPTION_NO_CONTENT;
            case self::RESET_CONTENT:
                return self::DESCRIPTION_RESET_CONTENT;
            case self::PARTIAL_CONTENT:
                return self::DESCRIPTION_PARTIAL_CONTENT;
            case self::MULTI_STATUS:
                return self::DESCRIPTION_MULTI_STATUS;
            case self::ALREADY_REPORTED:
                return self::DESCRIPTION_ALREADY_REPORTED;
            case self::IM_USED:
                return self::DESCRIPTION_IM_USED;
            case self::MULTIPLE_CHOICES:
                return self::DESCRIPTION_MULTIPLE_CHOICES;
            case self::MOVED_PERMANENTLY:
                return self::DESCRIPTION_MOVED_PERMANENTLY;
            case self::FOUND:
                return self::DESCRIPTION_FOUND;
            case self::SEE_OTHER:
                return self::DESCRIPTION_SEE_OTHER;
            case self::NOT_MODIFIED:
                return self::DESCRIPTION_NOT_MODIFIED;
            case self::USE_PROXY:
                return self::DESCRIPTION_USE_PROXY;
            case self::TEMPORARY_REDIRECT:
                return self::DESCRIPTION_TEMPORARY_REDIRECT;
            case self::PERMANENT_REDIRECT:
                return self::DESCRIPTION_PERMANENT_REDIRECT;
            case self::BAD_REQUEST:
                return self::DESCRIPTION_BAD_REQUEST;
            case self::UNAUTHORIZED:
                return self::DESCRIPTION_UNAUTHORIZED;
            case self::PAYMENT_REQUIRED:
                return self::DESCRIPTION_PAYMENT_REQUIRED;
            case self::FORBIDDEN:
                return self::DESCRIPTION_FORBIDDEN;
            case self::NOT_FOUND:
                return self::DESCRIPTION_NOT_FOUND;
            case self::METHOD_NOT_ALLOWED:
                return self::DESCRIPTION_METHOD_NOT_ALLOWED;
            case self::NOT_ACCEPTABLE:
                return self::DESCRIPTION_NOT_ACCEPTABLE;
            case self::PROXY_AUTH_REQUIRED:
                return self::DESCRIPTION_PROXY_AUTH_REQUIRED;
            case self::REQUEST_TIMEOUT:
                return self::DESCRIPTION_REQUEST_TIMEOUT;
            case self::CONFLICT:
                return self::DESCRIPTION_CONFLICT;
            case self::GONE:
                return self::DESCRIPTION_GONE;
            case self::LENGTH_REQUIRED:
                return self::DESCRIPTION_LENGTH_REQUIRED;
            case self::PRECONDITION_FAILED:
                return self::DESCRIPTION_PRECONDITION_FAILED;
            case self::REQUEST_ENTITY_TOO_LARGE:
                return self::DESCRIPTION_REQUEST_ENTITY_TOO_LARGE;
            case self::REQUEST_URI_TOO_LONG:
                return self::DESCRIPTION_REQUEST_URI_TOO_LONG;
            case self::UNSUPPORTED_MEDIA_TYPE:
                return self::DESCRIPTION_UNSUPPORTED_MEDIA_TYPE;
            case self::REQUESTED_CATEGORY_NOT_SATISFIABLE:
                return self::DESCRIPTION_REQUESTED_CATEGORY_NOT_SATISFIABLE;
            case self::EXPECTATION_FAILED:
                return self::DESCRIPTION_EXPECTATION_FAILED;
            case self::TEAPOT:
                return self::DESCRIPTION_TEAPOT;
            case self::MISDIRECTED_REQUEST:
                return self::DESCRIPTION_MISDIRECTED_REQUEST;
            case self::UNPROCESSABLE_ENTITY:
                return self::DESCRIPTION_UNPROCESSABLE_ENTITY;
            case self::LOCKED:
                return self::DESCRIPTION_LOCKED;
            case self::FAILED_DEPENDENCY:
                return self::DESCRIPTION_FAILED_DEPENDENCY;
            case self::TOO_EARLY:
                return self::DESCRIPTION_TOO_EARLY;
            case self::UPGRADE_REQUIRED:
                return self::DESCRIPTION_UPGRADE_REQUIRED;
            case self::PRECONDITION_REQUIRED:
                return self::DESCRIPTION_PRECONDITION_REQUIRED;
            case self::TOO_MANY_REQUESTS:
                return self::DESCRIPTION_TOO_MANY_REQUESTS;
            case self::REQUEST_HEADER_FIELDS_TOO_LARGE:
                return self::DESCRIPTION_REQUEST_HEADER_FIELDS_TOO_LARGE;
            case self::UNAVAILABLE_FOR_LEGAL_REASONS:
                return self::DESCRIPTION_UNAVAILABLE_FOR_LEGAL_REASONS;
            case self::INTERNAL_SERVER_ERROR:
                return self::DESCRIPTION_INTERNAL_SERVER_ERROR;
            case self::NOT_IMPLEMENTED:
                return self::DESCRIPTION_NOT_IMPLEMENTED;
            case self::BAD_GATEWAY:
                return self::DESCRIPTION_BAD_GATEWAY;
            case self::SERVICE_UNAVAILABLE:
                return self::DESCRIPTION_SERVICE_UNAVAILABLE;
            case self::GATEWAY_TIMEOUT:
                return self::DESCRIPTION_GATEWAY_TIMEOUT;
            case self::HTTP_VERSION_NOT_SUPPORTED:
                return self::DESCRIPTION_HTTP_VERSION_NOT_SUPPORTED;
            case self::VARIANT_ALSO_NEGOTIATES:
                return self::DESCRIPTION_VARIANT_ALSO_NEGOTIATES;
            case self::INSUFFICIENT_STORAGE:
                return self::DESCRIPTION_INSUFFICIENT_STORAGE;
            case self::LOOP_DETECTED:
                return self::DESCRIPTION_LOOP_DETECTED;
            case self::NOT_EXTENDED:
                return self::DESCRIPTION_NOT_EXTENDED;
            case self::NETWORK_AUTHENTICATION_REQUIRED:
                return self::DESCRIPTION_NETWORK_AUTHENTICATION_REQUIRED;
            default:
                return self::DESCRIPTION_DEFAULT;
        }
    }

    /**
     * Returns the HTTP status code and text in header format.
     *
     * @param int $code HTTP status code
     * @return string Formatted HTTP status code and text for the header
     */
    public static function getHeaderText(int $code): string
    {
        return "$code " . strtoupper(self::getStatusText($code));
    }

    /**
     * Returns the HTTP status code and text as request header format.
     *
     * @param int $code HTTP status code
     * @param int $version HTTP version (default: 1 for HTTP/1.1)
     * @return string Formatted HTTP status code and text as request header format
     */
    public static function getHeader(int $code, int $version = 1): string
    {
        $versionText = $version == 1 ? "1.1" : (string) $version;
        return "HTTP/$versionText " . self::getHeaderText($code);
    }

    /**
     * Checks if the given status code is valid.
     *
     * @param int $code HTTP status code
     * @return bool True if the status code is valid, otherwise false
     */
    public static function isValidStatusCode(int $code): bool
    {
        return self::getStatusText($code) != self::TEXT_DEFAULT;
    }

    /**
     * Checks if the status code is an informational response (1xx).
     *
     * @param int $code HTTP status code
     * @return bool True if the status code is informational, otherwise false
     */
    public static function isInformation(int $code): bool
    {
        return $code >= self::CONTINUE && $code < self::OK;
    }

    /**
     * Checks if the status code is a successful response (2xx).
     *
     * @param int $code HTTP status code
     * @return bool True if the status code is successful, otherwise false
     */
    public static function isSuccessful(int $code): bool
    {
        return $code >= self::OK && $code < self::MULTIPLE_CHOICES;
    }

    /**
     * Checks if the status code is a redirection message (3xx).
     *
     * @param int $code HTTP status code
     * @return bool True if the status code is a redirection message, otherwise false
     */
    public static function isRedirection(int $code): bool
    {
        return $code >= self::MULTIPLE_CHOICES && $code < self::BAD_REQUEST;
    }

    /**
     * Checks if the status code is a client error response (4xx).
     *
     * @param int $code HTTP status code
     * @return bool True if the status code is a client error, otherwise false
     */
    public static function isClientError(int $code): bool
    {
        return $code >= self::BAD_REQUEST && $code < self::INTERNAL_SERVER_ERROR;
    }

    /**
     * Checks if the status code is a server error response (5xx: 500 to 599, RFC 9110 section 15.6).
     *
     * @param int $code HTTP status code
     * @return bool True if the status code is a server error, otherwise false
     */
    public static function isServerError(int $code): bool
    {
        return $code >= self::INTERNAL_SERVER_ERROR && $code < 600;
    }

    /**
     * Returns the range category of the given status code.
     *
     * @param int $code HTTP status code
     * @return string Range category of the status code (informational, successful, redirection, client error, server error) or 'unknown' if the code is not recognized
     */
    public static function getStatusRange(int $code): string
    {
        if (self::isInformation($code)) {
            return self::CATEGORY_INFORMATIONAL;
        } elseif (self::isSuccessful($code)) {
            return self::CATEGORY_SUCCESSFUL;
        } elseif (self::isRedirection($code)) {
            return self::CATEGORY_REDIRECTION;
        } elseif (self::isClientError($code)) {
            return self::CATEGORY_CLIENT_ERROR;
        } elseif (self::isServerError($code)) {
            return self::CATEGORY_SERVER_ERROR;
        } else {
            return self::CATEGORY_UNKNOWN;
        }
    }

    /**
     * Returns an array of informational HTTP status codes.
     *
     * @return array List of informational status codes
     */
    public static function getInformationalCodes(): array
    {
        return [
            self::CONTINUE,
            self::SWITCHING_PROTOCOLS,
            self::PROCESSING,
            self::EARLY_HINTS
        ];
    }

    /**
     * Returns an array of successful HTTP status codes.
     *
     * @return array List of successful status codes
     */
    public static function getSuccessfulCodes(): array
    {
        return [
            self::OK,
            self::CREATED,
            self::ACCEPTED,
            self::NON_AUTHORITATIVE_INFO,
            self::NO_CONTENT,
            self::RESET_CONTENT,
            self::PARTIAL_CONTENT,
            self::MULTI_STATUS,
            self::ALREADY_REPORTED,
            self::IM_USED
        ];
    }

    /**
     * Returns an array of redirection HTTP status codes.
     *
     * @return array List of redirection status codes
     */
    public static function getRedirectionCodes(): array
    {
        return [
            self::MULTIPLE_CHOICES,
            self::MOVED_PERMANENTLY,
            self::FOUND,
            self::SEE_OTHER,
            self::NOT_MODIFIED,
            self::USE_PROXY,
            self::TEMPORARY_REDIRECT,
            self::PERMANENT_REDIRECT
        ];
    }

    /**
     * Returns an array of client error HTTP status codes.
     *
     * @return array List of client error status codes
     */
    public static function getClientErrorCodes(): array
    {
        return [
            self::BAD_REQUEST,
            self::UNAUTHORIZED,
            self::PAYMENT_REQUIRED,
            self::FORBIDDEN,
            self::NOT_FOUND,
            self::METHOD_NOT_ALLOWED,
            self::NOT_ACCEPTABLE,
            self::PROXY_AUTH_REQUIRED,
            self::REQUEST_TIMEOUT,
            self::CONFLICT,
            self::GONE,
            self::LENGTH_REQUIRED,
            self::PRECONDITION_FAILED,
            self::REQUEST_ENTITY_TOO_LARGE,
            self::REQUEST_URI_TOO_LONG,
            self::UNSUPPORTED_MEDIA_TYPE,
            self::REQUESTED_CATEGORY_NOT_SATISFIABLE,
            self::EXPECTATION_FAILED,
            self::TEAPOT,
            self::MISDIRECTED_REQUEST,
            self::UNPROCESSABLE_ENTITY,
            self::LOCKED,
            self::FAILED_DEPENDENCY,
            self::TOO_EARLY,
            self::UPGRADE_REQUIRED,
            self::PRECONDITION_REQUIRED,
            self::TOO_MANY_REQUESTS,
            self::REQUEST_HEADER_FIELDS_TOO_LARGE,
            self::UNAVAILABLE_FOR_LEGAL_REASONS
        ];
    }

    /**
     * Returns an array of server error HTTP status codes.
     *
     * @return array List of server error status codes
     */
    public static function getServerErrorCodes(): array
    {
        return [
            self::INTERNAL_SERVER_ERROR,
            self::NOT_IMPLEMENTED,
            self::BAD_GATEWAY,
            self::SERVICE_UNAVAILABLE,
            self::GATEWAY_TIMEOUT,
            self::HTTP_VERSION_NOT_SUPPORTED,
            self::VARIANT_ALSO_NEGOTIATES,
            self::INSUFFICIENT_STORAGE,
            self::LOOP_DETECTED,
            self::NOT_EXTENDED,
            self::NETWORK_AUTHENTICATION_REQUIRED
        ];
    }

    /**
     * Returns an array of HTTP status codes grouped by their categories.
     *
     * @return array Array with keys as categories and values as lists of status codes.
     */
    public static function getStatusCodesByCategory(): array
    {
        return [
            self::CATEGORY_INFORMATIONAL => self::getInformationalCodes(),
            self::CATEGORY_SUCCESSFUL => self::getSuccessfulCodes(),
            self::CATEGORY_REDIRECTION => self::getRedirectionCodes(),
            self::CATEGORY_CLIENT_ERROR => self::getClientErrorCodes(),
            self::CATEGORY_SERVER_ERROR => self::getServerErrorCodes()
        ];
    }
}
