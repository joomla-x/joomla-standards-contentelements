<?php

namespace Joomla\Content;

interface ContentVisitorInterface
{
    /**
     * Process the content.
     *
     * @param string                  $elementName The name of the content element
     * @param ContentElementInterface $content     The content
     */
    public function visit($elementName, ContentElementInterface $content);

    /**
     * Register a content element.
     *
     * @param string                $elementName The name of the content element
     * @param callable|array|string $handler     The handler for that element
     */
    public function registerContentType($elementName, $handler);
}
