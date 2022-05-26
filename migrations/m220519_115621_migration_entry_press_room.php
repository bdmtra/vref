<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220519_115621_migration_entry_press_room extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - press-room
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"press-room","section":"pressRoom","sites":{"default":{"slug":"press-room","section":"pressRoom","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Press Room","entryType":"pressRoom","uid":"d80a4539-5e01-4ce2-a2cd-01fba5361aef","fields":{"heroTitle":"We saved you the window seat","heroText":"VREF gives the media an unequaled view of the global aviation market.\nConsider us your go-to source for comprehensive data, \nemerging trends and insightful analysis.","ctaTwinTitle":"Media Inquiries","ctaTwinItems":{"new1":{"type":"items","enabled":true,"sortOrder":1,"fields":{"heading":"Press Contact","text":null,"image":[],"buttonText":"Get in Touch","linkEntry":[],"linkAsset":[],"linkType":["entry"]}},"new2":{"type":"items","enabled":true,"sortOrder":2,"fields":{"heading":"Media Kit","text":"You can access logos, \nphotos and other \nbrand assets below","image":[],"buttonText":"Download","linkEntry":[],"linkAsset":[],"linkType":["asset"]}}},"pressCoverageListTitle":"As seen in","pressCoverageLinkText":"All Coverage","pressReleaseListTitle":"Latest press releases","pressReleaseLinkText":"All Releases"}}}}]}}
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
