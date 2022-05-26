<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220526_101422_migration_entry_brokers_and_dealers extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - brokers-and-dealers
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"brokers-and-dealers","section":"brokersAndDealers","sites":{"default":{"slug":"brokers-and-dealers","section":"brokersAndDealers","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Brokers and Dealers","entryType":"brokersAndDealers","uid":"3911323f-b807-4c87-8cdb-6f933b902868","fields":{"subtitle":null,"featuredImage":[],"heroTitle":"Brokers and Dealers","heroText":"VREF provides unbiased, data-driven insights so that you can close more deals with less stress","heroImage":[],"heroButtonText":null,"heroButtonLink":[],"featuresTitle":"We’ve been on all sides of the aircraft sales process","featuresText":"Our leadership team has more than 300 years’ combined experience in the aviation industry — with much of this time spent in sales. We’ve made fortunes and lost them too. Because of this, we feel a great sense of responsibility to our customers and their bottom lines.","featuresItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Objective Values","text":"Our valuation software provides instant, unbiased values for more than 7,000 model years of aircraft","image":[],"linkEntry":[],"linkText":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Critical Context","text":"Use VREF to evaluate trends, assess opportunities and analyze nearly 30 years of proprietary market data.","image":[],"linkEntry":[],"linkText":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Fair Pricing","text":"We believe you shouldn’t have to go broke to earn a living. That’s why our prices trounce the competitions’.","image":[],"linkEntry":[],"linkText":null}}},"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Access unbiased valuations and transparent supporting data","text":"Our valuation software gives instant access to current, past and future market prices for more than 7,000 model years of aircraft — along with almost 30 years of supporting market data.","image":[],"linkEntry":[],"linkText":"Aircraft Valuations","linkPosition":["underText"],"subheading":null}}},"logosTitle":"Trusted by top brokers and dealers","logosItems":[],"testimonialTitle":"What our clients say","testimonialItems":[],"ctaTitle":"Ready to close more deals?","ctaText":null,"ctaBackgroundImage":[],"ctaButtonText":"Get Started","ctaButtonLink":[]}}}}]}}
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
        echo "m220526_101422_migration_entry_brokers_and_dealers cannot be reverted.\n";
        return false;
    }
}
