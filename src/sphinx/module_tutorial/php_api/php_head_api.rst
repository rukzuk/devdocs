        
=====================
HeadAPI
=====================
        
.. php:method:: public bool isEditMode ()

	Returns true if the current renderings happens inside of the rukzuk cms edit mode.

	:returns: bool 



.. php:method:: public bool isPreviewMode ()

	Returns true if the current renderings happens inside of the rukzuk cms preview mode.

	:returns: bool 



.. php:method:: public bool isLiveMode ()

	Returns true if the current rendering happens on a live server (website is deployed).

	:returns: bool 



.. php:method:: public array getResolutions ()

	Returns the resolutions array

	:returns: array 



.. php:method:: public bool isTemplate ()

	Returns true when the current rendering task renders a template

	:returns: bool 



.. php:method:: public bool isPage ()

	Returns true when the current rendering task renders a page

	:returns: bool 



.. php:method:: public Render\APIs\APIv1\Navigation Navigation getNavigation ()

	Returns the navigation object

	:returns: Render\APIs\APIv1\Navigation Navigation 



.. php:method:: public string getColorById (string $colorId)

	Convert a color id to a rgba() value

	:param string $colorId: 

	:returns: string rgba() value of the given color id


.. php:method:: public array getColorScheme ()

	Returns the Color Scheme as array map

	:returns: array (color-id => color-value)


.. php:method:: public Render\APIs\APIv1\MediaItem MediaItem getMediaItem (string $mediaId)

	Returns the media item with the given media id or null if the image does not exists.

	:param string $mediaId: 

	:returns: Render\APIs\APIv1\MediaItem MediaItem 



	**throws exceptions:** MediaItemNotFoundException MediaItemNotFoundException 



.. php:method:: public string getInterfaceLanguage ()

	Returns the language code of the current cms user interface.

	:returns: string The language code (examples: en; de; fr)



