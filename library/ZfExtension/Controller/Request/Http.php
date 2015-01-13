<?php
/**
 * douggr/zf-extension
 *
 * @license http://opensource.org/license/MIT
 * @link    https://github.com/douggr/zf-extension
 * @version 2.1.0
 */

/**
 * HTTP request object for use with ZfExtension_Controller family.
 *
 * @link http://framework.zend.com/manual/1.12/en/zend.controller.request.html Zend_Controller_Request_Http
 */
class ZfExtension_Controller_Request_Http extends Zend_Controller_Request_Http
{
    /**
     * Returns the REQUEST_METHOD header.
     *
     * @return string
     */
    public function getMethod()
    {
        return strtoupper(parent::getMethod());
    }

    /**
     * Returns the URL which this request was made to.
     *
     * @return string
     */
    final public function getCompleteUri()
    {
        return "{$this->getScheme()}://{$this->getHttpHost()}{$this->getRequestUri()}";
    }

    /**
     * Was the request made by GET?
     *
     * @return boolean
     */
    public function isGet()
    {
        return 'GET' === $this->getMethod();
    }

    /**
     * Was the request made by DELETE?
     *
     * @return boolean
     */
    public function isDelete()
    {
        return 'DELETE' === $this->getMethod();
    }

    /**
     * Was the request made by HEAD?
     *
     * @return boolean
     */
    public function isHead()
    {
        return 'HEAD' === $this->getMethod();
    }

    /**
     * Was the request made by OPTIONS?
     *
     * @return boolean
     */
    public function isOptions()
    {
        return 'OPTIONS' === $this->getMethod();
    }

    /**
     * Was the request made by PATCH?
     *
     * @return boolean
     */
    public function isPatch()
    {
        return 'PATCH' === $this->getMethod();
    }

    /**
     * Is the request a Javascript XMLHttpRequest and has the PJAX header?
     *
     * Should work with jQuery, Prototype, possibly others.
     *
     * @return boolean
     */
    public function isPjaxRequest()
    {
        return $this->isXmlHttpRequest() && $this->getHeader('X-PJAX');
    }

    /**
     * Was the request made by POST?
     *
     * @return boolean
     */
    public function isPost()
    {
        return 'POST' === $this->getMethod();
    }

    /**
     * Was the request made by PUT?
     *
     * @return boolean
     */
    public function isPut()
    {
        return 'PUT' === $this->getMethod();
    }
}