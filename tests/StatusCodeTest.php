<?php

use PHPUnit\Framework\TestCase;
use Simplicer\Http\Status\Code;
use Simplicer\Http\Status\InvalidStatusCodeException;

class StatusCodeTest extends TestCase
{
    public function testGetStatusText()
    {
        $this->assertEquals('OK', Code::getStatusText(Code::OK));
        $this->assertEquals('Continue', Code::getStatusText(Code::CONTINUE));
        $this->assertEquals('Unknown Status', Code::getStatusText(999));
    }

    public function testGetStatusDescription()
    {
        $this->assertEquals('The request was successful.', Code::getStatusDescription(Code::OK));
        $this->assertEquals('The initial part of a request has been received and has not yet been rejected by the server.', Code::getStatusDescription(Code::CONTINUE));
        $this->assertEquals('This status is unknown or not implemented', Code::getStatusDescription(999));
    }

    public function testGetHeaderText()
    {
        $this->assertEquals('200 OK', Code::getHeaderText(Code::OK));
        $this->assertEquals('100 CONTINUE', Code::getHeaderText(Code::CONTINUE));
        $this->assertEquals('999 UNKNOWN STATUS', Code::getHeaderText(999));
    }

    public function testGetHeader()
    {
        $this->assertEquals('HTTP/1.1 200 OK', Code::getHeader(Code::OK));
        $this->assertEquals('HTTP/1.1 100 CONTINUE', Code::getHeader(Code::CONTINUE));
        $this->assertEquals('HTTP/1.1 999 UNKNOWN STATUS', Code::getHeader(999));
        $this->assertEquals('HTTP/2 200 OK', Code::getHeader(Code::OK, 2));
    }

    public function testIsValidStatusCode()
    {
        $this->assertTrue(Code::isValidStatusCode(Code::OK));
        $this->assertFalse(Code::isValidStatusCode(999));
    }

    public function testIsInformation()
    {
        $this->assertTrue(Code::isInformation(Code::CONTINUE));
        $this->assertFalse(Code::isInformation(Code::OK));
    }

    public function testIsSuccessful()
    {
        $this->assertTrue(Code::isSuccessful(Code::OK));
        $this->assertFalse(Code::isSuccessful(Code::BAD_REQUEST));
    }

    public function testIsRedirection()
    {
        $this->assertTrue(Code::isRedirection(Code::MOVED_PERMANENTLY));
        $this->assertFalse(Code::isRedirection(Code::OK));
    }

    public function testIsClientError()
    {
        $this->assertTrue(Code::isClientError(Code::BAD_REQUEST));
        $this->assertFalse(Code::isClientError(Code::OK));
    }

    public function testIsServerError()
    {
        $this->assertTrue(Code::isServerError(Code::INTERNAL_SERVER_ERROR));
        $this->assertFalse(Code::isServerError(Code::OK));
    }

    public function testGetStatusRange()
    {
        $this->assertEquals('Informational', Code::getStatusRange(Code::CONTINUE));
        $this->assertEquals('Successful', Code::getStatusRange(Code::OK));
        $this->assertEquals('Redirection', Code::getStatusRange(Code::MOVED_PERMANENTLY));
        $this->assertEquals('Client Error', Code::getStatusRange(Code::BAD_REQUEST));
        $this->assertEquals('Server Error', Code::getStatusRange(Code::INTERNAL_SERVER_ERROR));
        $this->assertEquals('Unknown', Code::getStatusRange(999));
    }

    public function testGetInformationalCodes()
    {
        $expected = [
            Code::CONTINUE,
            Code::SWITCHING_PROTOCOLS,
            Code::PROCESSING,
            Code::EARLY_HINTS,
        ];
        $this->assertEquals($expected, Code::getInformationalCodes());
    }

    public function testGetSuccessfulCodes()
    {
        $expected = [
            Code::OK,
            Code::CREATED,
            Code::ACCEPTED,
            Code::NON_AUTHORITATIVE_INFO,
            Code::NO_CONTENT,
            Code::RESET_CONTENT,
            Code::PARTIAL_CONTENT,
            Code::MULTI_STATUS,
            Code::ALREADY_REPORTED,
            Code::IM_USED,
        ];
        $this->assertEquals($expected, Code::getSuccessfulCodes());
    }

    public function testGetRedirectionCodes()
    {
        $expected = [
            Code::MULTIPLE_CHOICES,
            Code::MOVED_PERMANENTLY,
            Code::FOUND,
            Code::SEE_OTHER,
            Code::NOT_MODIFIED,
            Code::USE_PROXY,
            Code::TEMPORARY_REDIRECT,
            Code::PERMANENT_REDIRECT,
        ];
        $this->assertEquals($expected, Code::getRedirectionCodes());
    }

    public function testGetClientErrorCodes()
    {
        $expected = [
            Code::BAD_REQUEST,
            Code::UNAUTHORIZED,
            Code::PAYMENT_REQUIRED,
            Code::FORBIDDEN,
            Code::NOT_FOUND,
            Code::METHOD_NOT_ALLOWED,
            Code::NOT_ACCEPTABLE,
            Code::PROXY_AUTH_REQUIRED,
            Code::REQUEST_TIMEOUT,
            Code::CONFLICT,
            Code::GONE,
            Code::LENGTH_REQUIRED,
            Code::PRECONDITION_FAILED,
            Code::REQUEST_ENTITY_TOO_LARGE,
            Code::REQUEST_URI_TOO_LONG,
            Code::UNSUPPORTED_MEDIA_TYPE,
            Code::REQUESTED_CATEGORY_NOT_SATISFIABLE,
            Code::EXPECTATION_FAILED,
            Code::TEAPOT,
            Code::MISDIRECTED_REQUEST,
            Code::UNPROCESSABLE_ENTITY,
            Code::LOCKED,
            Code::FAILED_DEPENDENCY,
            Code::TOO_EARLY,
            Code::UPGRADE_REQUIRED,
            Code::PRECONDITION_REQUIRED,
            Code::TOO_MANY_REQUESTS,
            Code::REQUEST_HEADER_FIELDS_TOO_LARGE,
            Code::UNAVAILABLE_FOR_LEGAL_REASONS,
        ];
        $this->assertEquals($expected, Code::getClientErrorCodes());
    }

    public function testGetServerErrorCodes()
    {
        $expected = [
            Code::INTERNAL_SERVER_ERROR,
            Code::NOT_IMPLEMENTED,
            Code::BAD_GATEWAY,
            Code::SERVICE_UNAVAILABLE,
            Code::GATEWAY_TIMEOUT,
            Code::HTTP_VERSION_NOT_SUPPORTED,
            Code::VARIANT_ALSO_NEGOTIATES,
            Code::INSUFFICIENT_STORAGE,
            Code::LOOP_DETECTED,
            Code::NOT_EXTENDED,
            Code::NETWORK_AUTHENTICATION_REQUIRED,
        ];
        $this->assertEquals($expected, Code::getServerErrorCodes());
    }

    public function testGetStatusCodesByCategory()
    {
        $expected = [
            'Informational' => Code::getInformationalCodes(),
            'Successful' => Code::getSuccessfulCodes(),
            'Redirection' => Code::getRedirectionCodes(),
            'Client Error' => Code::getClientErrorCodes(),
            'Server Error' => Code::getServerErrorCodes(),
        ];
        $this->assertEquals($expected, Code::getStatusCodesByCategory());
    }

    public function testGetStatusCodeAsMethod()
    {
        $this->assertEquals(100, Code::CONTINUE());
        $this->assertEquals(200, Code::OK());
        $this->assertNotEquals(300, Code::NOT_FOUND());
    }

    public function testAnUnknownStatusCodeCalledAsMethodThrowsInvalidStatusCodeException()
    {
        try {
            Code::INVALID_STATUS_CODE_CONSTANT();
            $this->fail('An unknown status code must throw InvalidStatusCodeException');
        } catch (InvalidStatusCodeException $e) {
            $this->assertSame('INVALID_STATUS_CODE_CONSTANT', $e->getStatusCode());
            $this->assertSame('Invalid http status code: INVALID_STATUS_CODE_CONSTANT', $e->getMessage());
        }
    }

    public function testTextsAndDescriptionsCannotBeCalledAsStatusCodes()
    {
        $this->expectException(InvalidStatusCodeException::class);
        Code::TEXT_OK();
    }

    public function testTheExceptionChainsThePreviousThrowable()
    {
        $previous = new RuntimeException('cause');
        $e = new InvalidStatusCodeException('NOPE', 'custom message', 7, $previous);

        $this->assertSame('custom message', $e->getMessage());
        $this->assertSame(7, $e->getCode());
        $this->assertSame($previous, $e->getPrevious());
    }

    public function testEveryCodeFrom500To599IsAServerError()
    {
        $this->assertTrue(Code::isServerError(599));
        $this->assertFalse(Code::isServerError(600));
        $this->assertSame('Server Error', Code::getStatusRange(599));
        $this->assertSame('Unknown', Code::getStatusRange(600));
    }

    public function testTheReadmeOnlyUsesMethodsThatExist()
    {
        $readme = file_get_contents(__DIR__ . '/../README.md');
        preg_match_all('/Code::([A-Za-z_]+)\(/', $readme, $calls);
        $this->assertNotEmpty($calls[1]);

        foreach (array_unique($calls[1]) as $name) {
            $isStatusCode = defined(Code::class . '::' . $name) && is_int(constant(Code::class . '::' . $name));
            $documentedFailure = $name === 'INVALID_STATUS_CODE_CONSTANT';
            $this->assertTrue(
                method_exists(Code::class, $name) || $isStatusCode || $documentedFailure,
                "README calls Code::$name(), which does not exist"
            );
        }
    }

    public function testTheReadmeOutputsMatchTheLibrary()
    {
        $readme = file_get_contents(__DIR__ . '/../README.md');
        preg_match_all('/echo (Code::[^;]+); \/\/ Outputs: "?(.*?)"?$/m', $readme, $examples, PREG_SET_ORDER);
        $this->assertNotEmpty($examples);

        foreach ($examples as [, $expression, $expected]) {
            $actual = eval('use Simplicer\Http\Status\Code; return ' . $expression . ';');
            $this->assertSame($expected, (string) $actual, "README example: $expression");
        }
    }
}
