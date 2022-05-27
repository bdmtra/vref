<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220527_105109_migration_entry_certificates_of_value extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - certificates-of-value
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"certificates-of-value","section":"certificatesOfValue","sites":{"default":{"slug":"certificates-of-value","section":"certificatesOfValue","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Certificates of Value","entryType":"certificatesOfValue","uid":"4087f2c0-5630-448d-8b82-2d2a9d4a8e4d","fields":{"heroTitle":"The Carfax® of the skies","heroText":"Our on-demand certificates of value offer an easy, cost-effective alternative to a full appraisal of your aircraft","heroImage":[],"heroButtonText":"Order Now","heroButtonStrictLink":"https://shop.vref.com/","reportsTitle":"The easiest way to become an informed aircraft buyer","reportsText":"A certificate of value offers an ideal compromise between cost and simplicity for those who wish to avoid the expense of a full appraisal but are intimidated by the prospect of using our valuation software themselves. Each certificate contains timely, accurate data and is signed by one of our Accredited Senior Appraisers. View a sample report below to see what specific data is included.","reportsItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Market Value","text":"A VREF market value certificate provides a snapshot of the current condition, demand and market value for an aircraft.","image":[],"linkEntry":[],"linkText":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Residual Value","text":"A VREF residual value certificate provides a snapshot of an aircraft’s current value, along with a 15-year forecast of future residual values.","image":[],"linkEntry":[],"linkText":null}}},"servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Filled with data-driven insights","text":"Our certificates of value are informed by one of the industry’s most robust datasets — encompassing more than 7,000 model years of aircraft and nearly three decades of transaction history.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":null}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Endorsed by experts you can trust","text":"VREF boasts the world’s largest aircraft-specific appraisal practice. Our team completes more than 2,200 appraisals each year, and our valuation software is used to estimate the value of roughly 18,000 additional aircraft each month.","image":[],"linkEntry":[],"linkText":null,"linkPosition":["underText"],"subheading":null}}},"testimonialTitle":"What our customers say","testimonialItems":[],"ctaTitle":"Not sure which solution is right for you?","ctaText":"VREF offers a range of aircraft valuation and appraisal products. Refer to the graphic below to understand which solution is right for you.","ctaBackgroundImage":[],"ctaButtonStrictLink":"https://shop.vref.com/","ctaButtonText":"Order Now","compareTitle":"Not sure which solution is right for you?","compareText":"VREF offers a range of aircraft valuation and appraisal products. Refer to the graphic below to understand which solution is right for you.","compareTable":{"columns":[{"heading":"","width":"","align":"left"},{"heading":"Valuation","width":"","align":"left"},{"heading":"Certificate","width":"","align":"left"},{"heading":"Desktop","width":"","align":"left"},{"heading":"On-site","width":"","align":"left"}],"rows":[["Due Diligence","*","","",""],["Financing","","*","*","*"],["Insurance","","","*","*"],["Litigation","","","","*"],["Taxation","","","","*"],["","/","/","/","/"]],"table":"\n            <table>\n                <thead>\n                    <tr>\n        <th align=\u0022left\u0022 width=\u0022\u0022></th><th align=\u0022left\u0022 width=\u0022\u0022>Valuation</th><th align=\u0022left\u0022 width=\u0022\u0022>Certificate</th><th align=\u0022left\u0022 width=\u0022\u0022>Desktop</th><th align=\u0022left\u0022 width=\u0022\u0022>On-site</th>\n                    </tr>\n                </thead>\n\n                <tbody>\n\n        <tr><td align=\u0022left\u0022>Due Diligence</td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td></tr><tr><td align=\u0022left\u0022>Financing</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022>Insurance</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022>Litigation</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022>Taxation</td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022></td><td align=\u0022left\u0022>*</td></tr><tr><td align=\u0022left\u0022></td><td align=\u0022left\u0022>/</td><td align=\u0022left\u0022>/</td><td align=\u0022left\u0022>/</td><td align=\u0022left\u0022>/</td></tr>\n\n                </tbody>\n\n            </table>\n        "}}}}}]}}
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
        echo "m220527_105109_migration_entry_certificates_of_value cannot be reverted.\n";
        return false;
    }
}
