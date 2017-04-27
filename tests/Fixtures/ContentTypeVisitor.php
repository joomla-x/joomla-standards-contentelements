<?php

namespace Joomla\Content\Fixtures;

use Joomla\Content\ContentTypeInterface;
use Joomla\Content\ContentTypeVisitorInterface;

class ContentTypeVisitor implements ContentTypeVisitorInterface
{
    /**
     * Render content.
     *
     * @param string               $contentType The name of the content type
     * @param ContentTypeInterface $content     The content
     */
    public function visit($contentType, ContentTypeInterface $content)
    {
    }

    /**
     * Register a content type.
     *
     * @param string                $contentType The name of the content type
     * @param callable|array|string $handler     The handler for that type
     */
    public function registerContentType($contentType, $handler)
    {
    }
}
