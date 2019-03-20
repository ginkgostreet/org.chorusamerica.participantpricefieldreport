<?php
/**
 * Lifecycle events in this extension will cause these registry records to be
 * automatically inserted, updated, or deleted from the database as appropriate.
 * For more details, see "hook_civicrm_managed" (at
 * https://docs.civicrm.org/dev/en/master/hooks/hook_civicrm_managed/) as well
 * as "API and the Art of Installation" (at
 * https://civicrm.org/blogs/totten/api-and-art-installation).
 */
use CRM_Participantpricefieldreport_ExtensionUtil as E;
return array(
  array(
    'module' => E::LONG_NAME,
    'name' => 'CRM_Report_Form_Event_ParticipantPriceFieldReport',
    'entity' => 'ReportTemplate',
    'params' => array(
      'class_name' => 'CRM_Report_Form_Event_ParticipantPriceFieldReport',
      'component' => 'CiviEvent',
      'description' => 'Provides a participant listing will selectable price fields.',
      'label' => 'Participant Listing (with Price Fields)',
      'report_url' => 'event/price',
      'version' => 3,
    ),
  ),
);
