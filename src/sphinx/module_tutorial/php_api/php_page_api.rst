        
=====================
Page
=====================
        
.. php:method:: public string getPageId ()

	Returns the id of the page

	:returns: string 



.. php:method:: public string getTitle ()

	Returns the title of the page

	:returns: string 



.. php:method:: public string getDescription ()

	Returns the description of the page

	:returns: string 



.. php:method:: public int getDate ()

	Returns the date of the page

	:returns: int 



.. php:method:: public boolean showInNavigation ()

	Returns TRUE if the page is displayed in the navigation bar; FALSE otherwise.

	:returns: boolean 



.. php:method:: public string getNavigationTitle (bool $useTitleAsDefault = true)

	Returns the title of the page that is shown in the navigation bar.

	:param bool $useTitleAsDefault: when TRUE the page title is used as default
	:returns: string 



.. php:method:: public array getParentIds ()

	Returns the ids of the parent pages

	:returns: array 



.. php:method:: public array getChildrenIds ()

	Returns the ids of the children pages

	:returns: array 



.. php:method:: public string getUrl ()

	Returns the url of the page

	:returns: string 



.. php:method:: public mixed|null getGlobal (string $name, int|null $index = NULL)

	Returns the global value for the given variable name.

	:param string $name: 

	:param int|null $index: 

	:returns: mixed|null 




