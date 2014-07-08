<?php
namespace Render\APIs\APIv1;
interface MediaItem
{
    /**
   * @return string
   */
    public function getId();
    /**
   * @return string
   */
    public function getName();
    /**
   * @return int
   */
    public function getSize();
    /**
   * @return string
   */
    public function getLastModified();
    /**
   * @return string
   */
    public function getFilePath();
    /**
   * @return string
   */
    public function getUrl();
    /**
   * @return string
   */
    public function getDownloadUrl();
    /**
   * Returns an image of the media item.
   *
   * @return MediaImage
   */
    public function getImage();
    /**
   * Returns a preview image of the media item or when there is no preview
   * possible an icon for the current media type is shown.
   *
   * @return MediaImage
   */
    public function getPreview();
}