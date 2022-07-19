<?php

namespace craft\contentmigrations;

use Craft;
use craft\db\Migration;

/**
 * m220718_213400_nav_menu_btn_classes migration.
 */
class m220718_213400_nav_menu_btn_classes extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        // Place migration code here...
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m220718_213400_nav_menu_btn_classes cannot be reverted.\n";
        return false;
    }
}
