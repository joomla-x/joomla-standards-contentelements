<?php

namespace Joomla\Content;

interface ContentTypeInterface
{
    /**
     * Visits the content type.
     *
     * @param ContentTypeVisitorInterface $visitor The Visitor
     */
    public function accept(ContentTypeVisitorInterface $visitor);

    /**
     * Gets the identifier for the content.
     *
     * @return string
     */
    public function getId();

    /**
     * Gets the title for the content.
     *
     * @return string
     */
    public function getTitle();

    /**
     * Gets the parameters for the content.
     *
     * @return array
     */
    public function getParameters();

    /**
     * Gets the parameters for the content.
     *
     * @param string $key     The key
     * @param mixed  $default The default value
     *
     * @return mixed
     */
    public function getParameter($key, $default = null);
}
