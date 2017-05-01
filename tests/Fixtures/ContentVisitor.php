<?php

namespace Joomla\Content\Fixtures;

use Joomla\Content\ContentElementInterface;
use Joomla\Content\ContentVisitorInterface;

class ContentVisitor implements ContentVisitorInterface
{
    /**
     * Process the content.
     *
     * @param string                  $elementName The name of the content element
     * @param ContentElementInterface $content     The content
     */
    public function visit($elementName, ContentElementInterface $content)
    {
    }

    /**
     * Register a content element.
     *
     * @param string                $elementName The name of the content element
     * @param callable|array|string $handler     The handler for that element
     */
    public function registerContentType($elementName, $handler)
    {
    }
}
