<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220622_191543_migration_entry_economist_release_time_release_forbes_release extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - economist-release
    - time-release
    - forbes-release
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"economist-release","section":"pressReleaseEntry","sites":{"default":{"slug":"economist-release","section":"pressReleaseEntry","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-06-22 19:12:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Economist release","entryType":"pressReleaseEntry","uid":"b45dfe36-9305-48b3-ae43-b9edd46471d8","author":"andrew","fields":{"featuredImage":[{"elementType":"craft\\elements\\Asset","filename":"GettyImages-1131335393-e1650030686687.jpg","folder":"Product Images","source":"productImages","path":""}],"summary":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>","richText":"<p></p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eu ultrices vitae auctor eu augue. Aenean sed adipiscing diam donec adipiscing tristique. Sapien faucibus et molestie ac. Sit amet massa vitae tortor condimentum lacinia quis vel eros. Et tortor at risus viverra adipiscing at in. Nec dui nunc mattis enim ut tellus. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Nunc non blandit massa enim nec dui nunc mattis enim. Porttitor rhoncus dolor purus non. Montes nascetur ridiculus mus mauris vitae ultricies leo. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. In nulla posuere sollicitudin aliquam ultrices sagittis. Placerat in egestas erat imperdiet. A lacus vestibulum sed arcu non odio euismod lacinia at. Eget lorem dolor sed viverra ipsum nunc aliquet. Nisi lacus sed viverra tellus in hac. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae.</p>\r\n<p>Pulvinar etiam non quam lacus. Suspendisse sed nisi lacus sed viverra. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus. Tortor posuere ac ut consequat semper viverra. Aliquam etiam erat velit scelerisque in dictum non. Felis donec et odio pellentesque diam volutpat commodo. Ornare suspendisse sed nisi lacus sed viverra tellus in. Sed sed risus pretium quam vulputate dignissim suspendisse. Mauris pharetra et ultrices neque ornare aenean. Mattis pellentesque id nibh tortor. Eget duis at tellus at urna condimentum mattis pellentesque id. Consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit. Nibh cras pulvinar mattis nunc sed blandit libero. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Rhoncus aenean vel elit scelerisque mauris.<br /></p>\r\n<p></p>"}}}},{"slug":"time-release","section":"pressReleaseEntry","sites":{"default":{"slug":"time-release","section":"pressReleaseEntry","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-06-22 19:12:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Time release","entryType":"pressReleaseEntry","uid":"09d97dbb-d166-47d1-9110-cd2179fe72b4","author":"andrew","fields":{"featuredImage":[{"elementType":"craft\\elements\\Asset","filename":"GettyImages-1131335393-e1650030686687.jpg","folder":"Product Images","source":"productImages","path":""}],"summary":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>","richText":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eu ultrices vitae auctor eu augue. Aenean sed adipiscing diam donec adipiscing tristique. Sapien faucibus et molestie ac. Sit amet massa vitae tortor condimentum lacinia quis vel eros. Et tortor at risus viverra adipiscing at in. Nec dui nunc mattis enim ut tellus. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Nunc non blandit massa enim nec dui nunc mattis enim. Porttitor rhoncus dolor purus non. Montes nascetur ridiculus mus mauris vitae ultricies leo. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. In nulla posuere sollicitudin aliquam ultrices sagittis. Placerat in egestas erat imperdiet. A lacus vestibulum sed arcu non odio euismod lacinia at. Eget lorem dolor sed viverra ipsum nunc aliquet. Nisi lacus sed viverra tellus in hac. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae.</p>\r\n<p>Pulvinar etiam non quam lacus. Suspendisse sed nisi lacus sed viverra. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus. Tortor posuere ac ut consequat semper viverra. Aliquam etiam erat velit scelerisque in dictum non. Felis donec et odio pellentesque diam volutpat commodo. Ornare suspendisse sed nisi lacus sed viverra tellus in. Sed sed risus pretium quam vulputate dignissim suspendisse. Mauris pharetra et ultrices neque ornare aenean. Mattis pellentesque id nibh tortor. Eget duis at tellus at urna condimentum mattis pellentesque id. Consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit. Nibh cras pulvinar mattis nunc sed blandit libero. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Rhoncus aenean vel elit scelerisque mauris.</p>"}}}},{"slug":"forbes-release","section":"pressReleaseEntry","sites":{"default":{"slug":"forbes-release","section":"pressReleaseEntry","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2022-06-22 19:12:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Forbes release","entryType":"pressReleaseEntry","uid":"b9061c3f-7660-45c2-afab-8d36837240b9","author":"andrew","fields":{"featuredImage":[{"elementType":"craft\\elements\\Asset","filename":"GettyImages-1131335393-e1650030686687.jpg","folder":"Product Images","source":"productImages","path":""}],"summary":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>","richText":"<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Scelerisque eu ultrices vitae auctor eu augue. Aenean sed adipiscing diam donec adipiscing tristique. Sapien faucibus et molestie ac. Sit amet massa vitae tortor condimentum lacinia quis vel eros. Et tortor at risus viverra adipiscing at in. Nec dui nunc mattis enim ut tellus. Aenean pharetra magna ac placerat vestibulum lectus mauris ultrices eros. Nunc non blandit massa enim nec dui nunc mattis enim. Porttitor rhoncus dolor purus non. Montes nascetur ridiculus mus mauris vitae ultricies leo. Sagittis nisl rhoncus mattis rhoncus urna neque viverra justo nec. In nulla posuere sollicitudin aliquam ultrices sagittis. Placerat in egestas erat imperdiet. A lacus vestibulum sed arcu non odio euismod lacinia at. Eget lorem dolor sed viverra ipsum nunc aliquet. Nisi lacus sed viverra tellus in hac. Nulla facilisi nullam vehicula ipsum a arcu cursus vitae.</p>\r\n<p>Pulvinar etiam non quam lacus. Suspendisse sed nisi lacus sed viverra. Viverra suspendisse potenti nullam ac tortor vitae purus faucibus. Tortor posuere ac ut consequat semper viverra. Aliquam etiam erat velit scelerisque in dictum non. Felis donec et odio pellentesque diam volutpat commodo. Ornare suspendisse sed nisi lacus sed viverra tellus in. Sed sed risus pretium quam vulputate dignissim suspendisse. Mauris pharetra et ultrices neque ornare aenean. Mattis pellentesque id nibh tortor. Eget duis at tellus at urna condimentum mattis pellentesque id. Consectetur adipiscing elit pellentesque habitant morbi tristique senectus et. Quam viverra orci sagittis eu volutpat odio facilisis mauris sit. Nibh cras pulvinar mattis nunc sed blandit libero. Vulputate eu scelerisque felis imperdiet proin fermentum leo vel orci. Rhoncus aenean vel elit scelerisque mauris.</p>"}}}}]}}
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
        echo "m220622_191543_migration_entry_economist_release_time_release_forbes_release cannot be reverted.\n";
        return false;
    }
}
