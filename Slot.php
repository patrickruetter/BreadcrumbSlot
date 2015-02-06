<?php
namespace Plugin\BreadcrumbSlot;

class Slot {
  private static $params = null;
  public static function breadcrumbs($params) {
    $defaultParams = array(
        'pageId' => ipContent()->getCurrentPage()->getId(),
        'separator' => ' › ',
        'direction' => 'down',
        'mode' => 'text'
    );

    self::$params = array_merge($defaultParams, $params);

    $menuItemsArray = array();

    $currentPage = new \Ip\Page($params['pageId']);

    while($currentPage->getParentId()) {
      if($parentId = $currentPage->getParentId()) {
        array_push($menuItemsArray, $currentPage);
        $currentPage = new \Ip\Page($parentId);
      }
    }

    if($params['direction'] == 'down') {
      $menuItemsArray = array_reverse($menuItemsArray);
    }

    $breadcrumbArray = self::getBreadcrumbArray($menuItemsArray);

    return implode($params['separator'], $breadcrumbArray);

  }

    static function getBreadcrumbArray($menuItemsArray) {
        $breadcrumbArray = array();
        foreach($menuItemsArray as $menuItem) {
            $mode = self::$params['mode'];

            if($mode == 'text') {
                array_push($breadcrumbArray, $menuItem->getTitle());
            }
            else if($mode == 'html') {
                $lastClass = ($menuItem === end($menuItemsArray) ? 'class="last"' : '');

                $string = '<a href="'.$menuItem->getLink().'" '.$lastClass.' >'.$menuItem->getTitle().'</a>';
                array_push($breadcrumbArray, $string);
            }
        }
        return $breadcrumbArray;
    }

}
