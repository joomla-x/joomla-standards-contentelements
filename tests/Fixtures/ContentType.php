<?php

namespace Joomla\Content\Fixtures;

use Joomla\Content\ContentTypeInterface;
use Joomla\Content\ContentTypeVisitorInterface;

class ContentType implements ContentTypeInterface
{
    /**
     * Visits the content type.
     *
     * @param ContentTypeVisitorInterface $visitor The Visitor
     */
    public function accept(ContentTypeVisitorInterface $visitor)
    {
    }

    /**
     * Gets the identifier for the content.
     *
     * @return string
     */
    public function getId()
    {
        return 'id';
    }

    /**
     * Gets the title for the content.
     *
     * @return string
     */
    public function getTitle()
    {
        return 'title';
    }

    /**
     * Gets the parameters for the content.
     *
     * @return array
     */
    public function getParameters()
    {
        return [];
    }

    /**
     * Gets the parameters for the content.
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
