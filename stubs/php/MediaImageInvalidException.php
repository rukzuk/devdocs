<?php
namespace Render\APIs\APIv1;
interface MediaImageInvalidException
{
    public function getMessage();
    public function getCode();
    public function getFile();
    public function getLine();
    public function getTrace();
    public function getPrevious();
    public function getTraceAsString();
}