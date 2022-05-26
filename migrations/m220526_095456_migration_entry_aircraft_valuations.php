<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220526_095456_migration_entry_aircraft_valuations extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - aircraft-valuations
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"aircraft-valuations","section":"aircraftValuations","sites":{"default":{"slug":"aircraft-valuations","section":"aircraftValuations","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Aircraft Valuations","entryType":"aircraftValuations","uid":"2eedfc25-d518-4b11-998d-1730f44f02b8","fields":{"heroTitle":"Instant Aircraft Valuations","heroText":"VREF Online provides fast, objective estimates of helicopter and airplane values, along with supporting market data.","heroImage":[],"heroButtonText":"Get Started","heroButtonLink":[],"featuresTitle":"A simple, credible aircraft price guide","featuresText":"VREF Online is the market’s most trusted aircraft value estimator — simple enough to be comprehensible to a first-time buyer and accurate enough to be trusted by the world’s top aviation professionals.","featuresItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Estimate","text":"VREF aircraft valuations provide instant estimates of retail, wholesale, inventory, liquidation and scrap values.","image":[],"linkEntry":[],"linkText":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Customize","text":"Use the industry’s largest avionics database to customize valuations according to your aircraft’s specifications","image":[],"linkEntry":[],"linkText":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Analyze","text":"Assess current market conditions and understand used aircraft price trends with useful data visualizations.","image":[],"linkEntry":[],"linkText":null}},"new4":{"type":"item","enabled":true,"sortOrder":4,"fields":{"heading":"Compare","text":"Evaluate alternative assets with side-by-side comparisons of aircraft and valuations","image":[],"linkEntry":[],"linkText":null}}},"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Built on industry-leading Data","text":"Our aircraft value guide draws on nearly 30 years of historical insights contained in our proprietary database — one of the aviation industry’s leading sources of market information.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"A clean, modern aircraft bluebook","text":"Stop fumbling with clunky, outdated software offered by our competitors. VREF Online’s intuitive, clutter-free design makes it easy to visualize aircraft sales statistics and estimate used aircraft values.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":null}},"new3":{"type":"item","enabled":true,"sortOrder":3,"fields":{"heading":"Backed by experts you can trust","text":"VREF’s aircraft valuation model is based on more than three decades’ experience in the aviation industry. Our team of expert appraisers have valued billions of dollars in assets and are trusted by the world’s top aviation manufacturers, lenders and brokers.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":null}}},"ctaTitle":"Want to know the true value of your aircraft?","ctaText":null,"ctaBackgroundImage":[],"ctaButtonText":"Get Started","ctaButtonLink":[],"compareTitle":"Not sure which solution is right for you?","compareText":"VREF offers a range of aircraft valuation and appraisal products. Refer to the graphic below to understand which solution is right for you.","compareTable":{"columns":[{"heading":"","width":"","align":"left"},{"heading":"Valuation","width":"","align":"left"},{"heading":"Certificate","width":"","align":"left"},{"heading":"Desktop","width":"","align":"left"},{"heading":"On-Site","width":"","align":"left"}],"rows":[["Due Diligence","*","","",""],["Financing","","*","*","*"],["Insurance","","","*","*"],["Litigation","","","","*"],["Taxation","","","","*"],["","/","/","/","/"]],"table":"\n            <table>\n                <thead>\n                    <tr>\n        <th align=\u0022left\u0022 width=\u0022\u0022></th><th align=\u0022left\u0022 width=\u0022\u0022>Valuation</th><th align=\u0022left\u0022 width=\u0022\u0022>Certificate</th><th align=\u0022left\u0022 width=\u0022\u0022>Desktop</th><th align=\u0022left\u0022 width=\u0022\u0022>On-Site</th>\n                    </tr>\n                </thead>\n\n                <tbody>\n\n        <tr><td align=\u0022left\u0022>Due Diligence</td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td></tr><tr><td align=\u0022left\u0022>Financing</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022>Insurance</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022>Litigation</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022>Taxation</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022></td><td align=\u0022left\u0022>/</td><td align=\u0022left\u0022>/</td><td align=\u0022left\u0022>/</td><td align=\u0022left\u0022>/</td></tr>\n\n                </tbody>\n\n            </table>\n        "}}}}}]}}
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
