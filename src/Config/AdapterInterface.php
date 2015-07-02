<?php

namespace Aurora\Config;

interface AdapterInterface
{
   public function loadFile($file);
   public function load($data);
   public function setBasePath($basePath);
   public function getBasePath();
   public function parse($data);
}
