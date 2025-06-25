# Kirby Blindtext

Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.

# Introduction

_Blindtext_ is the German word for filler text and thus this plugin offers fillers that can be inserted into templates for layout purposes:

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
<p>
    Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor
    incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
    nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi
    consequat. Quis aute iure reprehenderit in voluptate velit esse cillum
    dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
```

> [!TIP]  
> **Blindtext works well with Typographer and Designer!** Blindtext returns a field object, which allows you to apply field methods to your text output:
>
> ```php
>  <?= blindtext('body')->typographer()->designer()->level(2) ?>
> ```
>
> Check out how to adjust output directly in your templates in the [Typographer](/plugins/typographer) and [Designer docs](/plugins/designer).

## Default fillers

Blindtext comes with four default filler texts:

- `lorem`: a single paragraph of lorem ipsum
- `lorem-short`: a single sentence of lorem ipsum
- `lorem-long`: five paragraphs of lorem ipsum
- `body`: a longform text with headline, list, links et al. for typographic fine-tuning

Fillers can be called by passing their name to the `blindtext` method:

```php
<?= blindtext('body') ?>
```

## Custom fillers

Fillers are stored in Markdown files with `.md` as extension. You can create custom filler in `/site/fillers`.

Custom fillers, too, can be called by passing their name to the `blindtext` method. The filename without extension is used as the name. If a custom filler has the same name as a default filler, the custom one will take precedence.
