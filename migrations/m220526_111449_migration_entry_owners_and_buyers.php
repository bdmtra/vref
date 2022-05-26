<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220526_111449_migration_entry_owners_and_buyers extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - owners-and-buyers
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"owners-and-buyers","section":"ownersAndBuyers","sites":{"default":{"slug":"owners-and-buyers","section":"ownersAndBuyers","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Owners and Buyers","entryType":"ownersAndBuyers","uid":"8382124e-acdb-4321-861d-6820bce2d048","fields":{"heroTitle":"Owners and Buyers","heroText":"VREF provides aircraft owners and buyers with the insights they need to feel confident in their futures. We are trusted by the biggest names in aviation and by thousands of people just like you.","heroImage":[],"heroButtonText":null,"heroButtonLink":[],"featuresTitle":"Your peace of mind is our top priority","featuresText":"Aviation involves high hopes and high stakes. Whether you are negotiating the purchase of your first aircraft, navigating a divorce or dealing with the sale of a deceased loved one’s prized warbird, our experts will work tirelessly to equip you with the information you need to move forward with confidence.","featuresItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Accurate Valuations","text":"Our asset valuations are based on nearly 30 years’ experience and the industry’s largest transaction database.","image":[],"linkEntry":[],"linkText":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Affordable Alternatives","text":"Our online software and certificates of value offer affordable, convenient alternatives to a full appraisal of your aircraft.","image":[],"linkEntry":[],"linkText":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Empathetic Experts","text":"We know an airplane is an emotional investment, as well as a financial one, and we work hard to make our clients feel secure.","image":[],"linkEntry":[],"linkText":null}}},"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Get instant estimates of private jet prices, airplane prices and helicopter prices","text":"Our valuation software provides instant access to fair market values for more than 7,000 model years of aircraft — along with nearly three decades of supporting market data.","image":[],"linkEntry":[],"linkText":"Aircraft Valuations","linkPosition":["underText"],"subheading":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Obtain a signed certificate of value for your aircraft","text":"Not prepared to build your own valuation from scratch? Order a Certificate of Value, and we’ll do it for you. Each certificate is built on our proven valuation methodology and signed by an Accredited Senior Appraiser.","image":[],"linkEntry":[],"linkText":"Certificates of Value","linkPosition":["underText"],"subheading":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Consult with the industry’s top aviation advisory firm","text":"VREF boasts the largest aviation-specific appraisal practice in the world and provides expert witness support in cases ranging from complex corporate litigation to divorce and estate settlements.","image":[],"linkEntry":[],"linkText":"Aviation Consulting","linkPosition":["underText"],"subheading":null}}},"logosTitle":null,"logosItems":[],"testimonialTitle":"What our customers say","testimonialItems":[],"ctaTitle":"Ready to know the true value of your aircraft?","ctaText":null,"ctaBackgroundImage":[],"ctaButtonText":"Get Started","ctaButtonLink":[]}}}}]}}
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
        echo "m220526_111449_migration_entry_owners_and_buyers cannot be reverted.\n";
        return false;
    }
}
