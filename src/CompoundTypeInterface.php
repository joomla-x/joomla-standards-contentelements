<?php

namespace Joomla\Content;

interface CompoundTypeInterface extends ContentTypeInterface
{
    /**
     * Add a content element as a child.
     *
     * @param ContentTypeInterface $content The content element
     */
    public function addChild(ContentTypeInterface $content);

    /**
     * Remove a content element.
     *
     * @param ContentTypeInterface $content The content element
     */
    public function removeChild(ContentTypeInterface $content);

    /**
     * Get the child elements.
     *
     * @return ContentTypeInterface[]
     */
    public function getChildren();
}
