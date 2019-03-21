# org.chorusamerica.participantpricefieldreport

## Filtering Price Sets
When no price set filter has been defined, all event price sets are added as collapsible groups in the _Columns_ tab of the report criteria. If you have a lot of price sets but only need a few of them to be available on the report, a filter can be defined for that purpose. The filter would ideally be defined in your `civicrm.settings.php` file. There are three options...

### Pattern match report title
You can provide a simple string that will be used with a MySQL `LIKE` comparison against the price set title. This example would match any price set with a title containing `example` in it.
```php
define('PARTICIPANT_PRICE_FIELD_REPORT_FILTER', '%example%');
```

### List of price set titles
If you have a specific list of price sets you would like to include, define the filter as a comma delimited string of the desired price set titles. Make sure that there are no spaces on either side of a comma.
```php
define('PARTICIPANT_PRICE_FIELD_REPORT_FILTER', 'Price set #1,Price set #2,Price set #3');
```

### List of price set IDs
If you know the internal IDs of the price sets you would like to include, define the filter as a comma delimited string of the desired price set IDs. Make sure that there are no spaces on either side of a comma.
```php
define('PARTICIPANT_PRICE_FIELD_REPORT_FILTER', '12,34,56');
```

## Custom fieldsets
The _Columns_ tab will include fieldsets that extend _Participant_, _Contact_, _Individual_, and _Event_ entities. If you would like to adjust which entities are included, define this setting as a comma delimited string of the desired entities. Make sure that there are no spaces on either side of a comma.
```php
define('PARTICIPANT_PRICE_FIELD_REPORT_EXTENDS', 'Participant,Contact,Individual,Event');
```

![Screenshot](/images/screenshot.png)

(*FIXME: In one or two paragraphs, describe what the extension does and why one would download it. *)

The extension is licensed under [AGPL-3.0](LICENSE.txt).

## Requirements

* PHP v5.4+
* CiviCRM (*FIXME: Version number*)

## Installation (Web UI)

This extension has not yet been published for installation via the web UI.

## Installation (CLI, Zip)

Sysadmins and developers may download the `.zip` file for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
cd <extension-dir>
cv dl org.chorusamerica.participantpricefieldreport@https://github.com/FIXME/org.chorusamerica.participantpricefieldreport/archive/master.zip
```

## Installation (CLI, Git)

Sysadmins and developers may clone the [Git](https://en.wikipedia.org/wiki/Git) repo for this extension and
install it with the command-line tool [cv](https://github.com/civicrm/cv).

```bash
git clone https://github.com/FIXME/org.chorusamerica.participantpricefieldreport.git
cv en participantpricefieldreport
```

## Usage

(* FIXME: Where would a new user navigate to get started? What changes would they see? *)

## Known Issues

(* FIXME *)
