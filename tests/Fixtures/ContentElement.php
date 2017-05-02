<?php

namespace Joomla\Content\Fixtures;

use Joomla\Content\ContentElementInterface;
use Joomla\Content\ContentVisitorInterface;

class ContentElement implements ContentElementInterface
{
    /**
     * Create an element.
     *
     * @param array|object $data    The data container
     * @param array        $mapping The property mapping
     * @param array        $params  The presentation parameters
     *
     * @return self
     */
    public static function from($data, $mapping = [], $params = [])
    {
        return new self();
    }

    /**
     * Visit the content element.
     *
     * @param ContentVisitorInterface $visitor The Visitor
     */
    public function accept(ContentVisitorInterface $visitor)
    {
    }

    /**
     * Get the value of a property.
     *
     * @param string $property The property
     * @param mixed  $default  The default value
     *
     * @return mixed
     */
    public function get($property, $default = null)
    {
        return $default;
    }

    /**
     * Get the parameters for the element.
     *
     * @return array
     */
    public function getParameters()
    {
        return [];
    }

    /**
     * Get a parameter for the content.
     *
     * @param string $key     The key
     * @param mixed  $default The default value
     *
     * @return mixed
     */
    public function getParameter($key, $default = null)
    {
        return $default;
    }
}
