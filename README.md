# Kirby Blindtext

Blindtext offers filler texts that can be inserted into website for layout purposes:

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

```markdown
Lorem ipsum dolor sit amet, consectetur adipisici elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
```

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

Fillers are stored in Markdown files with file ending `md`. You can create custom filler in `/site/fillers/`. If a custom filler has the same name as a default filler, the custom one will take presedence.

## Typography

If Typographer is installed, the `blindtext` method will return a Typographer object, which will allow us to apply additional manipulations. For instance, it's possible to change the headline hierachy:

```php
<?= blindtext('body')->level(2) ?>
```

Additional manipulations can be found in the [Typographer docs](https://github.com/hananils/kirby-typographer).
