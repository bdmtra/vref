<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220527_141808_migration_entry_data_quality extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - data-quality
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"data-quality","section":"dataQuality","sites":{"default":{"slug":"data-quality","section":"dataQuality","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Data Quality","entryType":"dataQuality","uid":"b35ee5d1-c8c7-4e94-bd71-8566dd12f933","fields":{"heroTitle":"We’re serious about data quality","heroText":"Our business is built on empowering aircraft owners, buyers and aviation professionals with the data they need to feel secure. For this reason, the quality of that data is absolutely paramount.","heroButtonText":null,"heroButtonLink":[],"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"The industry’s largest network of data providers","text":"VREF’s market insights are fueled by one of the largest repositories of market intelligence in the aviation industry — spanning 7,000 model years of aircraft and nearly three decades of transaction history. Amassing all this data, collating and cleaning it requires an enormous amount of collective effort. Our team sources transaction data from a huge cross-section of industry stakeholders — including lenders, insurers, brokers, dealers, manufacturers and the more than 700,000 users of VREF Online who report market activity directly to us. All of this information is enriched by weekly transaction data reported to the FAA, current listing data from multiple online marketplaces and proprietary insights developed running the largest aviation-specific appraisal practice in the world.","image":[],"linkEntry":[],"linkStrict":null,"linkText":null,"linkPosition":["underText"],"subheading":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Uncompromising data governance","text":"Collecting all of this market data is just the first step in keeping our users informed. We often receive multiple reports of the same transaction — and the figures reported sometimes differ depending on the source. Detecting this kind of bias, reconciling these discrepancies and normalizing the data requires both an intimate knowledge of the aviation industry and rigorous attention to data governance standards. This is a responsibility we take seriously, and we work diligently to ensure the data we report is accurate, current and complete.","image":[],"linkEntry":[],"linkStrict":null,"linkText":null,"linkPosition":["underText"],"subheading":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Backed by the world’s largest aviation-specific appraisal firm","text":"Our data analytics and valuation software are backed by nearly 30 years’ experience in the aviation industry. Our staff of highly trained consultants appraise more than 2,200 aircraft each year — giving us an unmatched level of insight into the global aviation market.","image":[],"linkEntry":[],"linkStrict":null,"linkText":null,"linkPosition":["underText"],"subheading":null}}},"ctaTitle":"Prepared for takeoff?","ctaText":null,"ctaBackgroundImage":[],"ctaButtonText":"Get Started","ctaButtonLink":[{"elementType":"craft\\elements\\Entry","slug":"pricing","section":"pricing","site":"default"}]}}}}]}}
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
        echo "m220527_141808_migration_entry_data_quality cannot be reverted.\n";
        return false;
    }
}
