<?php
namespace Render;
interface ModuleInfo
{
    /**
   * Returns the module id of this module
   *
   * @return string
   */
    public function getId();
    /**
   * Returns the asset path of this module
   *
   * @param string|null $path  path that should be calculated
   *
   * @return string
   */
    public function getAssetPath($path = NULL);
    /**
   * Returns the asset url of this module
   *
   * @param string|null $path  path that url should be calculated
   *
   * @return string
   */
    public function getAssetUrl($path = NULL);
    /**
   * Returns the manifest of this module
   *
   * @return array
   */
    public function getManifest();
    /**
   * @return mixed
   */
    public function getCustomData();
    /**
   * Returns TRUE if this module is a extension module; FALSE otherwise.
   *
   * @return boolean
   */
    public function isExtension();
}