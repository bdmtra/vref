<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220622_191554_migration_entry_forbes_post_economist_post_time_post extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - forbes-post
    - economist-post
    - time-post
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"forbes-post","section":"pressCoverageEntry","sites":{"default":{"slug":"forbes-post","section":"pressCoverageEntry","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-06-22 18:55:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Forbes post","entryType":"pressCoverageEntry","uid":"430b4a0c-eb1f-47f1-b433-6432d0cfa95e","author":"andrew","fields":{"featuredImage":[{"elementType":"craft\\elements\\Asset","filename":"GettyImages-1131335393-e1650030686687.jpg","folder":"Product Images","source":"productImages","path":""}],"summary":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Pretium quam vulputate dignissim suspendisse in est. Id volutpat lacus laoreet non. A arcu cursus vitae congue mauris rhoncus.</p>","mediaOutlet":[{"elementType":"craft\\elements\\Category","slug":"forbes","category":"mediaOutlet"}],"sourceUrl":"https://www.forbes.com"}}}},{"slug":"economist-post","section":"pressCoverageEntry","sites":{"default":{"slug":"economist-post","section":"pressCoverageEntry","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-06-22 18:55:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Economist post","entryType":"pressCoverageEntry","uid":"02a3e41c-f6b2-4ec8-b0a1-ec89a976d529","author":"andrew","fields":{"featuredImage":[{"elementType":"craft\\elements\\Asset","filename":"GettyImages-1131335393-e1650030686687.jpg","folder":"Product Images","source":"productImages","path":""}],"summary":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Pretium quam vulputate dignissim suspendisse in est. Id volutpat lacus laoreet non. A arcu cursus vitae congue mauris rhoncus.</p>","mediaOutlet":[{"elementType":"craft\\elements\\Category","slug":"economist","category":"mediaOutlet"}],"sourceUrl":"https://www.economist.com/"}}}},{"slug":"time-post","section":"pressCoverageEntry","sites":{"default":{"slug":"time-post","section":"pressCoverageEntry","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-06-22 18:54:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Time post","entryType":"pressCoverageEntry","uid":"2e871db3-141c-4582-a5ef-863f8212f531","author":"andrew","fields":{"featuredImage":[{"elementType":"craft\\elements\\Asset","filename":"GettyImages-1131335393-e1650030686687.jpg","folder":"Product Images","source":"productImages","path":""}],"summary":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elementum nisi quis eleifend quam adipiscing vitae proin sagittis nisl. Pretium quam vulputate dignissim suspendisse in est. Id volutpat lacus laoreet non. A arcu cursus vitae congue mauris rhoncus. </p>","mediaOutlet":[{"elementType":"craft\\elements\\Category","slug":"time","category":"mediaOutlet"}],"sourceUrl":"https://time.com/"}}}}]}}
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
        echo "m220622_191554_migration_entry_forbes_post_economist_post_time_post cannot be reverted.\n";
        return false;
    }
}
