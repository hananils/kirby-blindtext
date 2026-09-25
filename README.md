[![Blindtext for Kirby CMS](header.png)](https://kirby.hananils.de/plugins/blindtext)

Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

## Introduction

*Blindtext* is the German word for filler text and thus this plugin offers fillers that can be inserted into templates for layout purposes:

```php
// As helper
<?= blindtext() ?>

// As site methods
<?= $site->blindtext() ?>

// As page methods
<?= $page->blindtext() ?>

// As user methods
<?= $user->blindtext() ?>
```

This will return a paragraph of lorem ipsum:

```html
<p>Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
```

> [!TIP]
> **Blindtext works well with Typographer and Designer!** Blindtext returns a field object, which allows you to apply field methods to your text output:
> 
> ```php
>  <?= blindtext('body')->typographer()->designer()->level(2) ?>
> ```
> 
> Check out how to adjust output directly in your templates in the [Typographer](https://kirby.hananils.test/plugins/typographer) and [Designer docs](https://kirby.hananils.test/plugins/designer).

### Default fillers

Blindtext comes with four default filler texts:

- `lorem`: a single paragraph of lorem ipsum
- `lorem-short`: a single sentence of lorem ipsum
- `lorem-long`: five paragraphs of lorem ipsum
- `body`: a longform text with headline, list, links et al. for typographic fine-tuning

Fillers can be called by passing their name to the `blindtext` method:

```php
<?= blindtext('body') ?>
```

### Custom fillers

Fillers are stored in Markdown files with `.md` as extension. You can create custom filler in `/site/fillers`.

Custom fillers, too, can be called by passing their name to the `blindtext` method. The filename without extension is used as the name. If a custom filler has the same name as a default filler, the custom one will take precedence.

## Installation

By default, plugins in Kirby reside in a special folder located at `/site/plugins`. Each plugin is installed in its proprietary subfolder. This installation can be handled in four different ways: you can either install them manually or manage them using Kirby CLI, Git submodules or Composer. You can install Blindtext either way and should choose the method suiting your project best.

Please note that all examples given here assume you are using the default plugin root. [If you changed your plugin root](https://getkirby.com/docs/reference/system/roots/plugins), e. g. with a custom folder setup, you’ll also have to adjust the paths given in this guide. For further information on how to manage plugins, please read the [official Kirby plugin introduction](https://getkirby.com/docs/guide/plugins/plugin-basics).

### Download

Download and copy this repository to `/site/plugins/blindtext`.

### Kirby CLI

```shell
kirby plugin:install hananils/kirby-blindtext
```

### Git submodule

```bash
git submodule add \
    https://github.com/hananils/kirby-blindtext.git \
    site/plugins/blindtext
```

### Composer

```shell
composer require hananils/kirby-blindtext
```

## Documentation

[![Find all documentation at kirby.hananils.de](footer.png)](https://kirby.hananils.de/plugins/blindtext)

Where possible, files contain inline annotations. For extended documentation, please visit our dedicated plugin site at [kirby.hananils.de/​plugins/​blindtext](https://kirby.hananils.de/plugins/blindtext).

### Reference

- [Site Methods](https://kirby.hananils.de/plugins/blindtext/site-methods)
- [Page Methods](https://kirby.hananils.de/plugins/blindtext/page-methods)
- [User Methods](https://kirby.hananils.de/plugins/blindtext/user-methods)
- [Collection Methods](https://kirby.hananils.de/plugins/blindtext/collection-methods)
- [Helpers](https://kirby.hananils.de/plugins/blindtext/helpers)

## License

This plugin is provided freely under the [MIT license](https://kirby.hananils.de/plugins/blindtext/license) by [hana+nils · Büro für Gestaltung](https://kirby.hananils.de). We create visual designs for digital and analog media.