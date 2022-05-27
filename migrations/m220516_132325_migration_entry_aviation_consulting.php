<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220516_132325_migration_entry_aviation_consulting extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - aviation-consulting
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"aviation-consulting","section":"aviationConsulting","sites":{"default":{"slug":"aviation-consulting","section":"aviationConsulting","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-13 14:39:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Aviation Consulting","entryType":"aviationConsulting","uid":"3d4b6548-ce95-416a-b2e2-de15050f2486","fields":{"heroTitle":"Experienced, Independent Aviation Consultants","heroText":"VREF is one of the world’s largest aviation consulting firms — providing appraisals, expert witness support and repossession and recovery services to thousands of clients each year","servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Professional Appraisals","text":"VREF’s team of accredited aviation experts provide desktop and on-site appraisals for more than 2,200 aircraft each year, and our value guides have been the industry standard for almost three decades.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":"Aircraft Appraisals"}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Expert Witness Services","text":"The VREF team has more than 60 years’ combined experience in aviation litigation and have testified in state, federal and probate courts on a wide range of aviation-related issues.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":"Aircraft Damage Assessments"}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Aircraft Repossession","text":"Leave the responsibility of recovering aircraft and aviation assets up to the experts. With 24/7 emergency support, the VREF team can take on aircraft repossession and recovery projects with optimal safety and speed.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":"Aircraft Expert Witnesses"}},"new4":{"type":"item","enabled":true,"sortOrder":4,"fields":{"heading":"Ready for an aviation consult?","text":null,"image":[],"linkEntry":[],"linkText":"Aircraft Recovery","linkPosition":["underText"],"subheading":null}}}}}}}]}}
JSON;

    /**
     * Any migration code in here is wrapped inside of a transaction.
     * Returning false will rollback the migration
     *
     * @return bool
     */
    public function safeUp()
    {
        return MigrationAssistant::getInstance()->migrations->import($this->json);
    }

    public function safeDown()
    {
        return true;
    }
}
