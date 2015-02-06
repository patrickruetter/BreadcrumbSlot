# BreadcrumbSlot
ImpressPages Plugin that adds a Breadcrumb Slot.

## Installation
1. Download .zip
2. Unpack
3. Copy the `BreadcrumbSlot` directory to the `Plugin` directory
4. Install the Plugin in the Plugin Manager
5. Add the Slot to your Theme

## Default Usage
```php
<?php
  echo ipSlot('breadcrumbs');
?>
```

## Parameters
__Example Usage__

```php
<?php
  $params = array(
    'pageId' => ipContent()->getCurrentPage()->getId(),
    'separator' => ' ‹ ',
    'direction' => 'up'
  );
  echo ipSlot('breadcrumbs', $params);
?>
```

### pageId (Default: Current Page)

__Example__
```php
<?php
  $params = array(
    'pageId' => 31
  );
  echo ipSlot('breadcrumbs', $params);
?>
```
### separator (Default: `' › '`)

__Example__
```php
<?php
  $params = array(
    'pageId' => ' ‹ '
  );
  echo ipSlot('breadcrumbs', $params);
?>
```
### direction (Default: `'down'`)

__Example__
```php
<?php
  $params = array(
    'direction' => 'up'
  );
  echo ipSlot('breadcrumbs', $params);
?>
```



