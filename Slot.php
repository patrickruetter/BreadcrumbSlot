<?php
namespace Plugin\BreadcrumbSlot;

class Slot {
  public static function breadcrumbs($params) {
    $defaultParams = array(
      'pageId' => ipContent()->getCurrentPage()->getId(),
      'separator' => ' › ',
      'direction' => 'down'
    );

    $params = array_merge($defaultParams, $params);

    $menuItems = array();

    $currentPage = new \Ip\Page($params['pageId']);

    while($currentPage->getParentId()) {
      if($parentId = $currentPage->getParentId()) {
        array_push($menuItems, $currentPage);
        $currentPage = new \Ip\Page($parentId);
      }
    }

    if($params['direction'] == 'down') {
      $menuItems = array_reverse($menuItems);
    }

    $getTitleArray = function($value) {return $value->getTitle();};
    $titleArray = array_map($getTitleArray, $menuItems);

    return implode($params['separator'], $titleArray);

  }

}
