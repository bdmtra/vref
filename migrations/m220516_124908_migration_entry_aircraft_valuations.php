<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220516_124908_migration_entry_aircraft_valuations extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - aircraft-valuations
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"aircraft-valuations","section":"aircraftValuations","sites":{"default":{"slug":"aircraft-valuations","section":"aircraftValuations","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-05 13:02:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Aircraft Valuations","entryType":"aircraftValuations","uid":"e42fe312-f9f9-4b3f-98c0-360d44bef9d6","fields":{"heroTitle":"Lorem Ipsum is \nsimply dummy text of the printing","heroText":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the\nindustry\u0027s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and","heroImage":[{"elementType":"craft\\elements\\Asset","filename":"vref_online_screen_2022-05-04-153751.jpg","folder":"Solution Images","source":"solutionImages","path":""}],"heroButtonText":null,"heroButtonLink":[{"elementType":"craft\\elements\\Entry","slug":"news","section":"news","site":"default"}],"featuresTitle":"Lorem Ipsum is \nsimply dummy text of the printing","featuresText":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the\nindustry\u0027s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and","featuresItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Lorem Ipsum is \nsimply dummy text of the printing","text":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the\nindustry\u0027s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and","image":[{"elementType":"craft\\elements\\Asset","filename":"vref_online_screen_2022-05-04-153751.jpg","folder":"Solution Images","source":"solutionImages","path":""}],"linkEntry":[],"linkText":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Lorem Ipsum is","text":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the","image":[{"elementType":"craft\\elements\\Asset","filename":"vref_online_screen_2022-05-04-153751.jpg","folder":"Solution Images","source":"solutionImages","path":""}],"linkEntry":[],"linkText":null}}},"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Lorem Ipsum is \nsimply dummy text of the printing","text":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the\nindustry\u0027s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and","image":[{"elementType":"craft\\elements\\Asset","filename":"vref_online_screen_2022-05-04-153751.jpg","folder":"Solution Images","source":"solutionImages","path":""}],"linkEntry":[],"linkText":null,"linkPosition":[],"subheading":null}}},"ctaTitle":"Lorem Ipsum is \nsimply dummy text of the printing","ctaText":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the\nindustry\u0027s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and","ctaBackgroundImage":[{"elementType":"craft\\elements\\Asset","filename":"header-homepage1.jpg","folder":"Solution Images","source":"solutionImages","path":""}],"ctaButtonText":"Lorem Ipsum","ctaButtonLink":[],"compareTitle":"Lorem Ipsum is \nsimply dummy text of the printing","compareText":"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the\nindustry\u0027s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and","compareTable":{"columns":[{"heading":"","width":"","align":"left"},{"heading":"Valuation","width":"","align":"left"},{"heading":"Certificate","width":"","align":"left"},{"heading":"Desktop","width":"","align":"left"},{"heading":"On-Site","width":"","align":"left"}],"rows":[["Due Diligence","*","","",""],["Financing","","*","test text","*"],["Insurance","","","*","*"],["Litigation","","","","*"],["Taxation","","","","*"],["","/sad","/asd","/asd","/asd"]],"table":"\n            <table>\n                <thead>\n                    <tr>\n        <th align=\u0022left\u0022 width=\u0022\u0022></th><th align=\u0022left\u0022 width=\u0022\u0022>Valuation</th><th align=\u0022left\u0022 width=\u0022\u0022>Certificate</th><th align=\u0022left\u0022 width=\u0022\u0022>Desktop</th><th align=\u0022left\u0022 width=\u0022\u0022>On-Site</th>\n                    </tr>\n                </thead>\n\n                <tbody>\n\n        <tr><td align=\u0022left\u0022>Due Diligence</td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td></tr><tr><td align=\u0022left\u0022>Financing</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022>test text</td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022>Insurance</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022>Litigation</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022>Taxation</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022></td><td align=\u0022left\u0022>/sad</td><td align=\u0022left\u0022>/asd</td><td align=\u0022left\u0022>/asd</td><td align=\u0022left\u0022>/asd</td></tr>\n\n                </tbody>\n\n            </table>\n        "}}}}}]}}
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
        echo "m220516_124908_migration_entry_aircraft_valuations cannot be reverted.\n";
        return false;
    }
}
