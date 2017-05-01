<?php

namespace Joomla\Content;

interface CompositeElementInterface extends ContentElementInterface
{
    /**
     * Add a content element as a child.
     *
     * @param ContentElementInterface $element The content element
     */
    public function addElement(ContentElementInterface $element);

    /**
     * Remove a content element.
     *
     * @param ContentElementInterface $element The content element
     */
    public function removeElement(ContentElementInterface $element);

    /**
     * Get the child elements.
     *
     * @return ContentElementInterface[]
     */
    public function getElements();
}
