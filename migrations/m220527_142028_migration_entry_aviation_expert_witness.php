<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220527_142028_migration_entry_aviation_expert_witness extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - aviation-expert-witness
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"aviation-expert-witness","section":"aviationExpertWitness","sites":{"default":{"slug":"aviation-expert-witness","section":"aviationExpertWitness","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Aviation Expert Witness","entryType":"aviationExpertWitness","uid":"28e469a3-5f5c-40b3-aa00-d665990a34d4","fields":{"heroTitle":"The world’s top aviation expert witness provider","heroText":"VREF’s seasoned aviation law experts have provided unbiased, data-driven expertise to thousands of clients since 1994.","heroImage":[],"heroButtonText":null,"heroButtonLink":[],"featuresTitle":"Unmatched experience","featuresText":"Our team has more than six decades’ combined experience in aviation law and more than 300 years’ in aviation. We’ve testified in state, federal and probate courts on behalf of both plaintiffs and defendants, and our case history spans a wide range of aviation-related concerns.","featuresItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Probate","text":null,"image":[],"linkEntry":[],"linkText":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Divorce","text":null,"image":[],"linkEntry":[],"linkText":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Taxation","text":null,"image":[],"linkEntry":[],"linkText":null}},"new4":{"type":"item","enabled":true,"sortOrder":4,"fields":{"heading":"Diminution of Value","text":null,"image":[],"linkEntry":[],"linkText":null}},"new5":{"type":"item","enabled":true,"sortOrder":5,"fields":{"heading":"Breach of Contract","text":null,"image":[],"linkEntry":[],"linkText":null}}},"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Industry leadership","text":"Our valuation software and printed price digests have been the leading sources of aircraft resale market information for nearly 30 years, and our team of professional appraisers have valued billions of dollars in aviation assets.","image":[],"linkEntry":[{"elementType":"craft\\elements\\Entry","slug":"who-we-are","section":"whoWeAre","site":"default"}],"linkStrict":null,"linkText":null,"linkPosition":["underText"],"subheading":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Data-driven expertise","text":"Our aviation legal witness practice is informed by one of the industry’s most comprehensive datasets — encompassing more than 7,000 model years of aircraft and nearly three decades of transaction history.","image":[],"linkEntry":[{"elementType":"craft\\elements\\Entry","slug":"aviation-database","section":"aviationDatabase","site":"default"}],"linkStrict":null,"linkText":null,"linkPosition":["underText"],"subheading":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Credible experts","text":"Our aircraft expert witnesses are held to the highest standards of professional training and conduct — with certifications from the American Society of Appraisers, the International Civil Aviation Organization, the International Society of Transport Aircraft Trading, the International Organization for Standardization and others.","image":[],"linkEntry":[],"linkStrict":null,"linkText":null,"linkPosition":["underText"],"subheading":null}}},"logosTitle":"Trusted by industry leaders","logosItems":[],"testimonialTitle":"What our clients say","testimonialItems":[],"ctaTitle":"Ready to speak with an expert?","ctaText":null,"ctaBackgroundImage":[],"ctaButtonLink":[{"elementType":"craft\\elements\\Entry","slug":"pricing","section":"pricing","site":"default"}],"ctaButtonText":"Get Started"}}}}]}}
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
        echo "m220527_142028_migration_entry_aviation_expert_witness cannot be reverted.\n";
        return false;
    }
}
