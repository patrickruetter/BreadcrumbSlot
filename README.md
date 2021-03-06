> This repository is no longer maintained!

# BreadcrumbSlot
ImpressPages Plugin that adds a Breadcrumb Slot.

## Installation
1. [Download .zip](https://github.com/patrickruetter/BreadcrumbSlot/archive/master.zip)
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
__Allowed Values__
`'down'`, `'up'`

__Example__
```php
<?php
  $params = array(
    'direction' => 'up'
  );
  echo ipSlot('breadcrumbs', $params);
?>
```

### mode (Default: `'text'`)
__Allowed Values__
`'text'`, `'html'`

__Example__
```php
<?php
  $params = array(
    'mode' => 'html'
  );
  echo ipSlot('breadcrumbs', $params);
?>
```

## Attribution
Bread Icon made by [Freepik](http://www.freepik.com) from [Flaticon](http://www.flaticon.com) is licensed under [CC BY 3.0](http://creativecommons.org/licenses/by/3.0/).
