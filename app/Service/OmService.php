<?php
namespace App\Service;
class OmService implements OmserviceInterface
{
      public function callName()
      {
        return "my ip address is ".$_SERVER['REMOTE_ADDR'];
      }
}
?>