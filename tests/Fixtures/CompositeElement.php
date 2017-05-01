<?php

namespace Joomla\Content\Fixtures;

use Joomla\Content\CompositeElementInterface;
use Joomla\Content\ContentElementInterface;
use Joomla\Content\ContentVisitorInterface;

class CompositeElement implements CompositeElementInterface
{
    /**
     * Create an element.
     *
     * @param array|object $data    The data container
     * @param array        $mapping The property mapping
     *
     * @return ContentElementInterface
     */
    public static function from($data, $mapping = [])
    {
        return new self();
    }

    /**
     * Add a content element as a child.
     *
     * @param ContentElementInterface $element The content element
     */
    public function addElement(ContentElementInterface $element)
    {
    }

    /**
     * Remove a content element.
     *
     * @param ContentElementInterface $element The content element
     */
    public function removeElement(ContentElementInterface $element)
    {
    }

    /**
     * Get the child elements.
     *
     * @return ContentElementInterface[]
     */
    public function getElements()
    {
        return [];
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
