<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220527_141645_migration_entry_pricing extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - pricing
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"pricing","section":"pricing","sites":{"default":{"slug":"pricing","section":"pricing","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-05-19 11:04:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Pricing","entryType":"pricing","uid":"fd85ef0c-af66-4c4f-98c1-abd383d58dcd","fields":{"heroTitle":"Flexible pricing that meets your needs","heroText":"At VREF, we want everyone to have access to the same clear, credible market data. No matter what space you occupy in the aviation industry, we have a solution that’s right for you.","servicesList":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Save 30 percent when you bundle","text":"Save 30 percent off retail when you add our printed price digests to your VREF subscription. New editions with updated values are delivered to subscribers four times a year. Books can also be purchased separately.","image":[],"linkEntry":[],"linkStrict":"#vref-print-tab-pane","linkText":"Buy Standalone Books","linkPosition":["underText"],"subheading":null}}},"pricingCalculatorTitle":"Calculate your price","pricingCalculatorItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Basic Plan","apiMonthlyPlanId":20,"apiAnnualPlanId":17,"isPro":false}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Pro Plan","apiMonthlyPlanId":22,"apiAnnualPlanId":19,"isPro":true}}},"pricingCalculatorAddonTitle":"VREF Print Subscription","pricingCalculatorAddonShortTitle":"VREF Print","pricingCalculatorAddonText":null,"pricingCalculatorAddonWarning":"Book subscription add-on only available with an annual subscription.","vrefOnlinePricingTitle":"VREF Online","vrefOnlinePricingText":"Instant access to simple, credible aircraft price estimates and supporting market data","vrefOnlinePricingItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Basic Plan","text":null,"textSecondary":null,"includes":null,"apiMonthlyPlanId":20,"apiAnnualPlanId":17,"isPro":false}},"new2":{"type":"item","enabled":true,"sortOrder":2,"fields":{"heading":"Pro Plan","text":null,"textSecondary":null,"includes":null,"apiMonthlyPlanId":22,"apiAnnualPlanId":19,"isPro":true}}},"vrefPrintPricingTitle":"VREF Print","vrefPrintPricingText":"Quarterly aircraft price digests, delivered to you by mail","vrefPrintPricingItems":{"new1":{"type":"item","enabled":true,"sortOrder":1,"fields":{"heading":"Book Subscription","text":null,"apiPlanId":23}}},"certificatesPricingTitle":null,"certificatesPricingText":null,"certificatesPricingItems":[],"consultingPricingTitle":null}}}}]}}
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
        echo "m220527_141645_migration_entry_pricing cannot be reverted.\n";
        return false;
    }
}
