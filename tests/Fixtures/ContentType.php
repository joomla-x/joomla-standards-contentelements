<?php

namespace Joomla\Content\Fixtures;

use Joomla\Content\ContentTypeInterface;
use Joomla\Content\ContentTypeVisitorInterface;

class ContentType implements ContentTypeInterface
{
    /**
     * Visit the content type.
     *
     * @param ContentTypeVisitorInterface $visitor The Visitor
     */
    public function accept(ContentTypeVisitorInterface $visitor)
    {
    }

    /**
     * Get the identifier for the content.
     *
     * @return string
     */
    public function getId()
    {
        return 'id';
    }

    /**
     * Get the title for the content.
     *
     * @return string
     */
    public function getTitle()
    {
        return 'title';
    }

    /**
     * Get the parameters for the content.
     *
     * @return array
     */
    public function getParameters()
    {
        return [];
    }

    /**
     * Get the parameters for the content.
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
