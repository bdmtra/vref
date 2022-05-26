<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220526_113128_migration_entry_other_service_providers extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - other-service-providers
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"other-service-providers","section":"otherServiceProviders","sites":{"default":{"slug":"other-service-providers","section":"otherServiceProviders","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Other Service Providers","entryType":"otherServiceProviders","uid":"80883ab3-1c31-4415-9796-0015fb30d997","fields":{"heroTitle":"Aviation Professionals","heroText":"VREF empowers appraisers, acquisition consultants, aircraft managers and other aviation pros with the insights they need to keep their businesses on course","heroImage":[],"heroButtonText":null,"heroButtonLink":[],"featuresTitle":"The aviation industry’s leading source of market intelligence","featuresText":"VREF has been the aviation industry’s go-to source for clear, credible market insights since 1994. Our valuation products, market data and advisory services are trusted by hundreds of the world’s top aviation firms.","featuresItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Accurate Values","text":"VREF is the official valuation guide of the AOPA — the world’s largest aviation association.","image":[],"linkEntry":[],"linkText":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Deep Context","text":"Our database contains the world’s largest set of aviation market data — stretching to 1994.","image":[],"linkEntry":[],"linkText":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Trusted Insights","text":"Our team of highly trained consultants set the industry standard for experience and professionalism.","image":[],"linkEntry":[],"linkText":null}}},"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Obtain instant valuations for hundreds of aircraft types","text":"Our valuation software gives instant access to current, past and future market prices for more than 7,000 model years of aircraft — along with almost 30 years of supporting market data.","image":[],"linkEntry":[],"linkText":"Aircraft Valuations","linkPosition":["underText"],"subheading":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Receive fast, affordable opinions of value from experts you can trust","text":"A certificate of value is a fast, affordable alternative to a full appraisal of an aircraft. Each certificate is prepared using our industry-leading valuation methodology and signed by one of our Accredited Senior Appraisers.","image":[],"linkEntry":[],"linkText":"Certificates of Value","linkPosition":["underText"],"subheading":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Get deep insights from our team of highly trained consultants","text":"VREF offers appraisals, expert witness support and repossession and recovery services to clients around the world. Our team of highly trained appraisers set the gold standard for experience, professionalism and independence.","image":[],"linkEntry":[],"linkText":"Aviation Consulting","linkPosition":["underText"],"subheading":null}}},"logosTitle":"Trusted by aviation leaders","logosItems":[],"testimonialTitle":"What our clients say","testimonialItems":[],"ctaTitle":"Ready to elevate your business?","ctaText":null,"ctaBackgroundImage":[],"ctaButtonText":"Get Started","ctaButtonLink":[]}}}}]}}
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
        echo "m220526_113128_migration_entry_other_service_providers cannot be reverted.\n";
        return false;
    }
}
