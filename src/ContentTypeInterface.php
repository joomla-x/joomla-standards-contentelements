<?php

namespace Joomla\Content;

interface ContentTypeInterface
{
    /**
     * Visit the content type.
     *
     * @param ContentTypeVisitorInterface $visitor The Visitor
     */
    public function accept(ContentTypeVisitorInterface $visitor);

    /**
     * Get the identifier for the content.
     *
     * @return string
     */
    public function getId();

    /**
     * Get the title for the content.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Get the parameters for the content.
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
