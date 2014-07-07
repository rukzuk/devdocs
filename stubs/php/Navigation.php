<?php
namespace Render\APIs\APIv1;
interface Navigation
{
    /**
   * Returns the id of the page that is currently rendered.
   * This method returns null if template is currently rendered.
   *
   * @return string|null
   */
    public function getCurrentPageId();
    /**
   * Returns the page ids of the children for the given page id.
   * If given page id is null the page ids of the root level returned.
   *
   * @param string|null $pageId
   * @return array
   */
    public function getChildrenIds($pageId);
    /**
   * Returns TRUE if the page specified by $pageId exists; FALSE otherwise.
   *
   * @param $pageId
   *
   * @return bool
   */
    public function pageExists($pageId);
    /**
   * Returns an \Render\APIs\APIv1\Page object
   *
   * @param $pageId
   *
   * @return Page
   */
    public function getPage($pageId);
    /**
   * Returns an array of all parent ids for the given page id.
   *
   * @param $pageId
   *
   * @return array
   */
    public function getNavigatorIds($pageId);
}