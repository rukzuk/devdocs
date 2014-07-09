        
=====================
RootCssAPI
=====================
        
.. php:method:: public  getAllUnitData (rootUnit)

	


	:param  $rootUnit: 


.. php:method:: public Render\APIs\RootAPIv1\Unit Unit|null getParentUnit (Render\APIs\RootAPIv1\Render\Unit Unit unit)

	Returns the parent unit for the given unit

	:param Render\APIs\RootAPIv1\Render\Unit Unit $unit: unit array or unit id
	:returns: Render\APIs\RootAPIv1\Unit Unit|null 



.. php:method:: public mixed getFormValue (Render\APIs\RootAPIv1\Render\Unit Unit unit, mixed key, mixed fallbackValue = NULL)

	Returns the form value of the given unit

	:param Render\APIs\RootAPIv1\Render\Unit Unit $unit: unit that holds the form value
	:param mixed $key: key of the requested form value
	:param mixed $fallbackValue: result if formValue array misses key
	:returns: mixed 



.. php:method:: public Render\Unit Unit[] getChildren (Render\APIs\RootAPIv1\Render\Unit Unit unit)

	Returns a list of all children units of the given unit

	:param Render\APIs\RootAPIv1\Render\Unit Unit $unit: the unit object
	:returns: Render\Unit Unit[] 



.. php:method:: public null|Render\Unit Unit getUnitById (Render\APIs\RootAPIv1\$unitId $unitId unitId)

	Returns the Unit object for a given unitId, null if not found

	:param Render\APIs\RootAPIv1\$unitId $unitId $unitId: 

	:returns: null|Render\Unit Unit 



.. php:method:: public null|Render\ModuleInfo ModuleInfo getModuleInfo (Render\APIs\RootAPIv1\Render\Unit Unit unit)

	Returns the module info object for the given unit, null if not found

	:param Render\APIs\RootAPIv1\Render\Unit Unit $unit: 

	:returns: null|Render\ModuleInfo ModuleInfo 



.. php:method:: public  getUnitCache (Render\APIs\RootAPIv1\Render\Unit Unit unit, string key)

	Get values from the permanent unit cache

	:param Render\APIs\RootAPIv1\Render\Unit Unit $unit: 

	:param string $key: unique key

	**throws exceptions:** Exception Exception 



.. php:method:: public  setUnitCache (Render\APIs\RootAPIv1\Render\Unit Unit unit, string key, array value)

	Set values in the permanent unit cache

	:param Render\APIs\RootAPIv1\Render\Unit Unit $unit: 

	:param string $key: unique key
	:param array $value: any typ of array containing only primitive types

	**throws exceptions:** Exception Exception 



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



.. php:method:: public Render\APIs\RootAPIv1\Navigation Navigation getNavigation ()

	Returns the navigation object

	:returns: Render\APIs\RootAPIv1\Navigation Navigation 



.. php:method:: public string getColorById (string colorId)

	Convert a color id to a rgba() value

	:param string $colorId: 

	:returns: string rgba() value of the given color id


.. php:method:: public array getColorScheme ()

	Returns the Color Scheme as array map

	:returns: array (color-id => color-value)


.. php:method:: public Render\APIs\RootAPIv1\MediaItem MediaItem getMediaItem (string mediaId)

	Returns the media item with the given media id or null if the image does not exists.

	:param string $mediaId: 

	:returns: Render\APIs\RootAPIv1\MediaItem MediaItem 



	**throws exceptions:** MediaItemNotFoundException MediaItemNotFoundException 



.. php:method:: public string getInterfaceLanguage ()

	Returns the language code of the current cms user interface.

	:returns: string The language code (examples: en; de; fr)



