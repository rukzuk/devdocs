<?php
namespace Render\APIs\RootAPIv1;
interface RootRenderAPI
{
    /**
   * Returns the url for the js api
   *
   * @return string
   */
    public function getJsApiUrl();
    /**
   * Output the css code
   *
   * @param Unit $rootUnit  unit where css traversing starts (root module)
   */
    public function insertCss(\Render\Unit $rootUnit);
    /**
   * Returns a map list of all provided module data
   *
   * @param Unit $rootUnit
   *
   * @return array
   */
    public function getAllModuleData(\Render\Unit $rootUnit);
    /**
   * Returns a map list of all provided unit data
   *
   * @param Unit $rootUnit
   *
   * @return array
   */
    public function getAllUnitData(\Render\Unit $rootUnit);
    /**
   * URL of the (complete) CSS rendered in an external file.
   * This file contains all rules from the current Page (or Template).
   * @return string
   */
    public function getCSSUrl();
    /**
   * Triggers the rendering of the given unit with the current renderer
   *
   * @param Unit $unit  the unit that should be rendered with the current renderer
   * @return void
   */
    public function renderUnit(\Render\Unit $unit);
    /**
   * Triggers the rendering of all children units of the given unit
   *
   * @param array|string $unit the unit which children units should be rendered.
   * @return void
   */
    public function renderChildren($unit);
    /**
   * Returns the content for the editable html code.
   * This method creates the tag given by $tag with the html code given
   * by $unit and $key. All links at html code will be fixed.
   * If the current renderings happens outside of the rukzuk cms edit mode,
   * all helper attributes will be removed.
   *
   * @param Unit   $unit       unit that holds the form value
   * @param mixed  $key        key of the requested form value
   * @param string $tag        tag name that will be created around the editable html code
   * @param string $attributes attributes for the created tag
   *
   * @return string
   */
    public function getEditableTag(\Render\Unit $unit, $key, $tag, $attributes = '');
    /**
   * Returns the parent unit for the given unit
   *
   * @param Unit $unit unit array or unit id
   *
   * @return Unit|null
   */
    public function getParentUnit(\Render\Unit $unit);
    /**
   * Returns the form value of the given unit
   *
   * @param Unit  $unit          unit that holds the form value
   * @param mixed $key           key of the requested form value
   * @param mixed $fallbackValue result if formValue array misses key
   *
   * @return mixed
   */
    public function getFormValue(\Render\Unit $unit, $key, $fallbackValue = NULL);
    /**
   * Returns a list of all children units of the given unit
   *
   * @param Unit $unit the unit object
   *
   * @return \Render\Unit[]
   */
    public function getChildren(\Render\Unit $unit);
    /**
   * Returns the Unit object for a given unitId, null if not found
   *
   * @param $unitId
   *
   * @return null|\Render\Unit
   */
    public function getUnitById($unitId);
    /**
   * Returns the module info object for the given unit, null if not found
   *
   * @param \Render\Unit $unit
   *
   * @return null|\Render\ModuleInfo
   */
    public function getModuleInfo(\Render\Unit $unit);
    /**
   * Get values from the permanent unit cache
   * @param Unit   $unit
   * @param string $key unique key
   *
   * @throws \Exception
   * @returns array returns empty array if key was not found
   */
    public function getUnitCache(\Render\Unit $unit, $key);
    /**
   * Set values in the permanent unit cache
   *
   * @param Unit   $unit
   * @param string $key   unique key
   * @param array  $value any typ of array containing only primitive types
   *
   * @throws \Exception
   */
    public function setUnitCache(\Render\Unit $unit, $key, $value);
    /**
   * Returns true if the current renderings happens inside of
   * the rukzuk cms edit mode. Else false.
   *
   * @return bool
   */
    public function isEditMode();
    /**
   * Returns true if the current renderings happens inside of
   * the rukzuk cms preview mode. Else false.
   *
   * @return bool
   */
    public function isPreviewMode();
    /**
   * Returns true if the current rendering happens on a
   * live server (website is deployed). Else false.
   *
   * @return bool
   */
    public function isLiveMode();
    /**
   * Returns the resolutions array
   *
   * @return array
   */
    public function getResolutions();
    /**
   * Returns true when the current rendering task renders a template
   *
   * @return bool
   */
    public function isTemplate();
    /**
   * Returns true when the current rendering task renders a page
   *
   * @return bool
   */
    public function isPage();
    /**
   * Returns the navigation object
   *
   * @return Navigation
   */
    public function getNavigation();
    /**
   * Convert a color id to a rgba() value
   *
   * @param string $colorId
   *
   * @return string rgba() value of the given color id
   */
    public function getColorById($colorId);
    /**
   * Returns the Color Scheme as array map
   *
   * @return array (color-id => color-value)
   */
    public function getColorScheme();
    /**
   * Returns the media item with the given media id
   * or null if the image does not exists.
   *
   * @param string $mediaId
   *
   * @throws MediaItemNotFoundException
   * @return MediaItem
   */
    public function getMediaItem($mediaId);
    /**
   * Returns the language code of the current cms user interface.
   *
   * @return string The language code (examples: en; de; fr)
   */
    public function getInterfaceLanguage();
}