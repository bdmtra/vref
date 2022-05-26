<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220526_122118_migration_entry_aviation_database extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - aviation-database
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"aviation-database","section":"aviationDatabase","sites":{"default":{"slug":"aviation-database","section":"aviationDatabase","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Aviation Database","entryType":"aviationDatabase","uid":"0539470f-6344-4e76-a428-f5e18e6fccf4","fields":{"heroTitle":"The world’s most trusted aviation database","heroText":"VREF\u0027s aircraft database is a leading source of aviation market intelligence — backed by our reputation as the world’s largest aviation-specific appraisal firm","heroImage":[],"heroButtonText":null,"heroButtonLink":[],"digitsTitle":"By the numbers","digitsList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"565","text":"Aircraft Types"}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"7,000","text":"Model Years"}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"28","text":"Years of Data"}}},"featuresTitle":"Powering the global aviation market","featuresText":"Around the world, consumers and professionals alike rely on our aircraft data to surface insights, make deals and chart a course for the future of aviation.","featuresItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Aviation Market Research","text":"View aircraft sales statistics, analyze aviation market share and uncover new opportunities.","image":[],"linkEntry":[],"linkText":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Aircraft Valuation","text":"Understand the true value of your assets, close more deals and better manage risk.","image":[],"linkEntry":[],"linkText":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Strategic Planning","text":"Create data-driven aviation market forecasts and future-proof your business.","image":[],"linkEntry":[],"linkText":null}}},"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Wing to wing coverage","text":"Our aviation data analytics cover the worldwide fleet of commercial and general aviation aircraft — including more than 7,000 model years of airplane and helicopter and the industry’s most comprehensive set of avionics data.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Values","text":"Access values data for 565 separate models of aircraft — along with time-series data from 1994 to the present.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Transactions","text":"Access monthly aircraft sales data for the U.S., along with bills of sale and registration records stretching back to 2011.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":null}},"new4":{"type":"item","enabled":true,"sortOrder":4,"fields":{"heading":"Unmatched data quality","text":"There’s a reason the world’s leading aviation finance companies rely on us to resolve disputes. It’s because we understand our responsibility to the market — and work hard to ensure our data is timely, accurate and complete.","image":[],"linkEntry":[],"linkText":"Learn How","linkPosition":["underText"],"subheading":null}}},"ctaTitle":"Ready for better aviation insights?","ctaText":null,"ctaBackgroundImage":[],"ctaButtonText":"Get Started","ctaButtonLink":[]}}}}]}}
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
        echo "m220526_122118_migration_entry_aviation_database cannot be reverted.\n";
        return false;
    }
}
