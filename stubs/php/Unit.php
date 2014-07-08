<?php
namespace Render;
interface Unit
{
    /**
   * @return array
   */
    public function getFormValues();
    /**
   * @return boolean
   */
    public function isGhostContainer();
    /**
   * @return string
   */
    public function getId();
    /**
   * @return string
   */
    public function getModuleId();
    /**
   * @return string
   */
    public function getName();
    /**
   * @return null|string
   */
    public function getTemplateUnitId();
    public function toArray();
}