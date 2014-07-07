<?php
namespace Render\APIs\APIv1;
interface Page
{
    /**
   * Returns the id of the page
   *
   * @return string
   */
    public function getPageId();
    /**
   * Returns the title of the page
   *
   * @return string
   */
    public function getTitle();
    /**
   * Returns the description of the page
   *
   * @return string
   */
    public function getDescription();
    /**
   * Returns the date of the page
   *
   * @return int
   */
    public function getDate();
    /**
   * Returns TRUE if the page is displayed in the navigation bar; FALSE otherwise.
   *
   * @return boolean
   */
    public function showInNavigation();
    /**
   * Returns the title of the page that is shown in the navigation bar.
   * If no navigation title was set and $useTitleAsDefault is TRUE
   * the page title is returned instead of the empty navigation title.
   *
   * @param bool $useTitleAsDefault when TRUE the page title is used as default
   *
   * @return string
   */
    public function getNavigationTitle($useTitleAsDefault = true);
    /**
   * Returns the ids of the parent pages
   *
   * @return array
   */
    public function getParentIds();
    /**
   * Returns the ids of the children pages
   *
   * @return array
   */
    public function getChildrenIds();
    /**
   * Returns the url of the page
   *
   * @return string
   */
    public function getUrl();
    /**
   * Returns the global value for the given variable name.
   * If index is given, the value of this index/position is returned.
   *
   * @param string    $name
   * @param int|null  $index
   * @return mixed|null
   */
    public function getGlobal($name, $index = NULL);
}