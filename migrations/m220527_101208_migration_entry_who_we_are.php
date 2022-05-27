<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220527_101208_migration_entry_who_we_are extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - who-we-are
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"who-we-are","section":"whoWeAre","sites":{"default":{"slug":"who-we-are","section":"whoWeAre","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Who We Are","entryType":"whoWeAre","uid":"333d9f33-340a-47a5-a497-4e8c68289f27","fields":{"heroTitle":"A trusted source for aviation market insights","heroText":"VREF is the world’s most trusted provider of aviation analytics, software and advisory services. We have been for almost 30 years.","offeringList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"High hopes, safe passage","text":"We help aircraft owners and aviation professionals who need clear, credible market insights feel confident their futures are secure. Our valuation software and printed price digests are backed by the industry’s most comprehensive transaction database, and our staff of highly trained appraisers set the gold standard for experience, professionalism and independence.","image":[]}}},"valuesTitle":"Your flight crew for the long journey","valuesText":"At VREF, our corporate values are expressed through the acronym “C.R.E.W.” It’s our way of acknowledging the responsibility we feel to our clients and their goals.","valuesItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Character","text":"We never manipulate, deceive or abuse our place in the market.","image":[]}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Responsibility","text":"We embrace the responsibility to protect our clients and their goals.","image":[]}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Empathy","text":"We always make an effort to understand and affirm how others feel.","image":[]}},"new4":{"type":"item","enabled":true,"sortOrder":4,"fields":{"heading":"Work Ethic","text":"We work hard, stay curious, and never grow complacent.","image":[]}}},"expertiseList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Three decades of aviation leadership","text":"VREF was founded in 1994 and is headquartered in Buffalo Grove, IL — with satellite offices in 40 locations across the globe. We provide valuations, appraisals, and expert witness services to a worldwide clientele of consumers and aviation professionals — including law firms, lenders, insurers, brokers, dealers and manufacturers. All of these stakeholders look to us for accurate, unbiased market information. It is because of our reputation for accuracy that VREF was asked to be the Official Valuation Guide and Appraisal partner for the AOPA — the world’s largest aviation association.","image":[]}}},"teamMembersTitle":"Our team","teamMembersText":"VREF’s leadership team has more than 300 years’ combined experience in the aviation industry.","teamMembersList":[{"elementType":"craft\\elements\\Entry","slug":"zilberbrand","section":"teamMembers","site":"default"},{"elementType":"craft\\elements\\Entry","slug":"ken-dufour","section":"teamMembers","site":"default"},{"elementType":"craft\\elements\\Entry","slug":"leo-heidemann","section":"teamMembers","site":"default"},{"elementType":"craft\\elements\\Entry","slug":"andreas-grassi","section":"teamMembers","site":"default"},{"elementType":"craft\\elements\\Entry","slug":"neil-schiller","section":"teamMembers","site":"default"}]}}}}]}}
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
        echo "m220527_101208_migration_entry_who_we_are cannot be reverted.\n";
        return false;
    }
}
