# První strážka s kódem 30. 11. 2018

Drupal 8 instalace použitá školení.

## Start projektu

Jedná se so standardní instanci založenou na https://github.com/drupal-composer/drupal-project Předpokládá se použití https://docs.devwithlando.io/  

* Funkční Lando: https://docs.devwithlando.io/started.html
* Získání kódu: `git clone git@github.com:Drupalcz/workshop.git` nebo lze stáhnout balíček https://github.com/Drupalcz/workshop/archive/master.zip
* `cd workshop`
* Start lokálního vývojového prostředí
* `lando start`
* Stažení všech nutných softwarových balíčků
* `lando composer install`
* Příprava konfigurace Drupalu
* `cp web/sites/default/default.settings.local.php web/sites/default/settings.local.php`
* Instalace Drupalu a import uložené konfigurace
* `lando drush si minimal --existing-config`
* Získání administrátorského přístupu - změna hesla pro administrátora
* `lando drush upwd admin mojetajneheslo`

## Užitečné příkazy

Přidat modul https://www.drupal.org/project/paragraphs včetně jeho závislostí.
* `lando composer require drupal/paragraphs`

Zapne modul https://www.drupal.org/project/paragraphs včetně jeho závislostí.
* `lando drush pm:enable paragraphs`
* `lando drush en paragraphs` (zkratka)

Odinstaluje modul https://www.drupal.org/project/paragraphs včetně jeho závislostí.
* `lando drush pm:uninstall paragraphs`
* `lando drush pmu paragraphs` (zkratka)

Dostupné drush příkazy
* `lando drush`

Přidat modul https://www.drupal.org/project/paragraphs včetně jeho závislostí.
* `lando composer require drupal/paragraphs`

### Přidání patche do modulu

V `composer.json`:
```json
"extra": {
    "patches": {
        "drupal/foobar": {
            "Patch description": "URL or local path to patch"
        }
    }
}
```

## Odkazy zmíněné na školení

* Czech Drupal Association | Drupal.org https://www.drupal.org/czech-drupal-association
* Individual Member directory | Drupal.org https://www.drupal.org/association/support/individual-members?country=CZ&n=&fn=&ln=&expertise=&sort_by=field_da_join_date_value&sort_order=ASC
* radimklaska | Drupal.org https://www.drupal.org/u/radimklaska
* martin_klima | Drupal.org https://www.drupal.org/u/martin_klima
* Slovak Drupal Association | Drupal.org https://www.drupal.org/slovak-drupal-association
* Composer https://getcomposer.org/
* Drush https://www.drush.org/
* Drush Commands https://drushcommands.com/
* Git https://git-scm.com/
* nic_progit_v35_n https://knihy.nic.cz/files/nic/edice/scott_chacon_pro_git.pdf
* Overview · Lando Documentation https://docs.devwithlando.io/
* Form API Reference | Drupal 7.x | Drupal API https://api.drupal.org/api/drupal/developer%21topics%21forms_api_reference.html/7.x
* drush generate for drush 9.x https://drushcommands.com/drush-9x/core/generate/
* Create a custom field widget | Drupal 8 guide on Drupal.org https://www.drupal.org/docs/8/creating-custom-modules/create-a-custom-field-widget
* Bootstrap | Drupal.org https://www.drupal.org/project/bootstrap
* Sub-Theming | Sub-Theming.md | 8.x-3.x | Drupal Bootstrap https://drupal-bootstrap.org/api/bootstrap/docs%21Sub-Theming.md/group/sub_theming/8
* Ægir Hosting System https://www.aegirproject.org/
* OpenDevShop: Drupal Cloud Hosting & Testing Platform https://getdevshop.com/
* Drupalcz/drupalcz - Travis CI https://travis-ci.org/Drupalcz/drupalcz
* PhpStorm templates | Drupal.org https://www.drupal.org/project/phpstorm_templates
* Devel | Drupal.org https://www.drupal.org/project/devel
* Form API Reference | Drupal 7.x | Drupal API https://api.drupal.org/api/drupal/developer%21topics%21forms_api_reference.html/7.x#date
* hook_form_alter | form.api.php | Drupal 8.6.x | Drupal API https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21form.api.php/function/hook_form_alter/8.6.x
* hook_form_FORM_ID_alter | form.api.php | Drupal 8.6.x | Drupal API https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21form.api.php/function/hook_form_FORM_ID_alter/8.6.x
* PHP: if - Manual http://php.net/manual/en/control-structures.if.php
* PHP: switch - Manual http://php.net/manual/en/control-structures.switch.php
* PHP: Arrays - Manual http://php.net/manual/en/language.types.array.php
* PhpStorm: JetBrains Toolbox subscription https://www.jetbrains.com/phpstorm/buy/#edition=commercial
* Drupal Association Technology Partner JetBrains offers free PhpStorm licenses for contributors | Drupal.org https://www.drupal.org/drupalorg/blog/drupal-association-technology-partner-jetbrains-offers-free-phpstorm-licenses-for
* Examples and docs for using Lando - https://github.com/HBFCrew/lando-docs-examples

