<?php

/**
 * PHP version 7.1
 *
 * @package  SaaS\Service\Dellin\Model\Response\Book
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 */
namespace SaaS\Service\Dellin\Model\Response\Book;

use Er1z\FakeMock\Annotations\FakeMock;
use Er1z\FakeMock\Annotations\FakeMockField;
use JMS\Serializer\Annotation as Serializer;

/**
 * Class SuccessContact
 *
 * @package  SaaS\Service\Dellin\Model\Response\Book
 * @author   RetailDriver LLC <integration@retailcrm.ru>
 * @license  https://retailcrm.ru Proprietary
 * @link     http://retailcrm.ru
 * @see      https://help.retailcrm.ru
 *
 * @FakeMock()
 */
class SuccessContact
{
    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("addressID")
     *
     * @FakeMockField(value="4")
     */
    public $addressId;

    /**
     * @var string
     *
     * @Serializer\Type("string")
     * @Serializer\SerializedName("personID")
     *
     * @FakeMockField(value="244")
     */
    public $personId;
}
