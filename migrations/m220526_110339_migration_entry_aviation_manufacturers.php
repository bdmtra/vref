<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220526_110339_migration_entry_aviation_manufacturers extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - aviation-manufacturers
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"aviation-manufacturers","section":"aviationManufacturers","sites":{"default":{"slug":"aviation-manufacturers","section":"aviationManufacturers","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-26 10:43:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Aviation Manufacturers","entryType":"aviationManufacturers","uid":"4a378784-8001-4fa7-9e62-c09b0cf0aa61","fields":{"heroTitle":"Aviation Manufacturers","heroText":"VREF is the aviation industry’s go-to source for clear-credible market insights. Let our industry-leading database supercharge your aerospace market research","heroImage":[],"heroButtonText":"Get Started","heroButtonLink":[],"featuresTitle":"Get a full picture of the aerospace market","featuresText":"Aviation manufacturers rely on our industry-leading data to understand the aerospace market, forecast demand and uncover new opportunities.","featuresItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Understand the Market","text":"Understand the current, past and future market value for thousands of aircraft","image":[],"linkEntry":[],"linkText":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Forecast Demand","text":"Visualize historical market trends and forecast future product demand","image":[],"linkEntry":[],"linkText":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Uncover Opportunities","text":"Use our market data to fuel new product research and development","image":[],"linkEntry":[],"linkText":null}}},"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Instant access to the world’s most robust aviation dataset","text":"Our valuation software gives instant access to current, past and future market prices for more than 7,000 model years of aircraft — along with almost 30 years of supporting market data.","image":[],"linkEntry":[],"linkText":"Aircraft Valuations","linkPosition":["underText"],"subheading":null}}},"logosSecondaryTitle":"Trusted by top manufacturers","logosSecondaryItems":[],"testimonialTitle":"What our clients say","testimonialItems":[],"ctaTitle":"Want better aviation insights?","ctaText":null,"ctaBackgroundImage":[],"ctaButtonText":"Get Started","ctaButtonLink":[]}}}}]}}
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
        echo "m220526_110339_migration_entry_aviation_manufacturers cannot be reverted.\n";
        return false;
    }
}
