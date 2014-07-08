<?php
namespace Render\APIs\APIv1;
interface HeadAPI
{
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