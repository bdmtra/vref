<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220526_102849_migration_entry_lenders_and_insurers extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - lenders-and-insurers
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"lenders-and-insurers","section":"lendersAndInsurers","sites":{"default":{"slug":"lenders-and-insurers","section":"lendersAndInsurers","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Lenders and Insurers","entryType":"lendersAndInsurers","uid":"9683919e-a42f-4e7a-8577-c5e8b04d9004","fields":{"subtitle":null,"featuredImage":[],"heroTitle":"Lenders and Insurers","heroText":"We know how important it is to keep your business moving. Our valuation software, market data and consulting services can help you assess opportunities, manage risk and navigate turbulent market conditions with aplomb.","heroImage":[],"heroButtonText":"Get Started","heroButtonLink":[],"featuresTitle":"Don’t trust your business to hobbyists","featuresText":"VREF is trusted by leading professionals because we are leading professionals. We’ve been the aviation industry’s go-to source for clear, credible market intelligence since 1994.","featuresItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Asset Valuations","text":"We are the world’s top provider of aviation-specific appraisals, and our price guides have been the industry standard for nearly three decades.","image":[],"linkEntry":[],"linkText":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Market Context","text":"We command the industry’s largest trove of market data — covering 565 asset types and 30 years of transaction history.","image":[],"linkEntry":[],"linkText":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Professional Results","text":"Our team has more than 300 years’ combined experience in the aviation industry and produces consistently professional results.","image":[],"linkEntry":[],"linkText":null}}},"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Obtain instant insights for loan agreements, insurance policies and portfolio monitoring","text":"Our valuation software gives instant access to current, past and future market prices for more than 7,000 model years of aircraft — along with almost 30 years of supporting market data.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":"Aircraft Valuations"}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Get fast, affordable estimates for low-value transactions","text":"A certificate of value is a fast, affordable alternative to a full appraisal of an aircraft. Each certificate is prepared using our industry-leading valuation methodology and signed by one of our Accredited Senior Appraisers.","image":[],"linkEntry":[],"linkText":"Certificates of Value","linkPosition":["underText"],"subheading":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Get white-glove support from our staff of highly trained consultants","text":"VREF offers appraisals, expert witness support and repossession and recovery services to clients around the world. Our team of appraisers set the gold standard for experience, professionalism and independence.","image":[],"linkEntry":[],"linkText":"Aviation Consulting","linkPosition":["underText"],"subheading":null}}},"logosTitle":"Trusted by top lenders and insurers","logosItems":[],"testimonialTitle":"What our clients say","testimonialItems":[],"ctaTitle":"Prepared for takeoff?","ctaText":null,"ctaBackgroundImage":[],"ctaButtonText":"Get Started","ctaButtonLink":[]}}}}]}}
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
        echo "m220526_102849_migration_entry_lenders_and_insurers cannot be reverted.\n";
        return false;
    }
}
