        
=====================
Navigation
=====================
        
.. php:method:: public string|null getCurrentPageId ()

	Returns the id of the page that is currently rendered.

	:returns: string|null 



.. php:method:: public array getChildrenIds (string|null $pageId)

	Returns the page ids of the children for the given page id.

	:param string|null $pageId: 

	:returns: array 



.. php:method:: public bool pageExists (Render\APIs\APIv1\$pageId $pageId $pageId)

	Returns TRUE if the page specified by $pageId exists; FALSE otherwise.

	:param Render\APIs\APIv1\$pageId $pageId $pageId: 

	:returns: bool 



.. php:method:: public Render\APIs\APIv1\Page Page getPage (Render\APIs\APIv1\$pageId $pageId $pageId)

	Returns an \Render\APIs\APIv1\Page object

	:param Render\APIs\APIv1\$pageId $pageId $pageId: 

	:returns: Render\APIs\APIv1\Page Page 



.. php:method:: public array getNavigatorIds (Render\APIs\APIv1\$pageId $pageId $pageId)

	Returns an array of all parent ids for the given page id.

	:param Render\APIs\APIv1\$pageId $pageId $pageId: 

	:returns: array 




