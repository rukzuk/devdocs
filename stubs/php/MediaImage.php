<?php
namespace Render\APIs\APIv1;
interface MediaImage
{
    /**
   * @return MediaItem
   */
    public function getMediaItem();
    /**
   * @return string
   */
    public function getMediaId();
    /**
   * Returns the width of the image
   *
   * @return int
   */
    public function getWidth();
    /**
   * Returns the height of the image
   *
   * @return int
   */
    public function getHeight();
    /**
   * @return string
   */
    public function getUrl();
    public function resizeScale($maxWidth = NULL, $maxHeight = NULL);
    public function resizeStretch($width, $height);
    public function resizeCenter($width, $height);
    public function resizeBorder($width, $height);
    /**
   * Crops the Image object.
   *
   * @param int $top
   * @param int $left
   * @param int $width
   * @param int $height
   *
   * @return $this
   */
    public function crop($top, $left, $width, $height);
    /**
   * Sets the image quality (if supported by the mime type)
   *
   * @param int $quality
   *
   * @return $this
   */
    public function setQuality($quality);
    /**
   * Sets the interlacing mode
   *
   * @param bool|null $interlaced
   *
   * @return $this
   */
    public function setInterlaced($interlaced);
}