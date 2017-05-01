<?php

namespace Joomla\Content;

interface ContentElementInterface
{
    /**
     * Create an element.
     *
     * @param array|object $data    The data container
     * @param array        $mapping The property mapping
     *
     * @return ContentElementInterface
     */
    public static function from($data, $mapping = []);

    /**
     * Visit the content element.
     *
     * @param ContentVisitorInterface $visitor The Visitor
     */
    public function accept(ContentVisitorInterface $visitor);

    /**
     * Get the value of a property.
     *
     * @return mixed
     */
    public function get($property, $default = null);

    /**
     * Get the parameters for the element.
     *
     * @return array
     */
    public function getParameters();

    /**
     * Get a parameter for the content.
     *
     * @param string $key     The key
     * @param mixed  $default The default value
     *
     * @return mixed
     */
    public function getParameter($key, $default = null);
}
