<?php

namespace Joomla\Content;

interface CompoundTypeInterface extends ContentTypeInterface
{
    /**
     * Add a content element as a child.
     *
     * @param ContentTypeInterface $content The content element
     */
    public function add(ContentTypeInterface $content);
}
