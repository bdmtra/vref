<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220705_142934_migration_global_imageplaceholders extends Migration
{
    /**
    Migration manifest:

    GLOBAL
    - imagePlaceholders
    */

    private $json = <<<'JSON'
{"content":{"globals":[{"handle":"imagePlaceholders","locales":[],"sites":{"default":{"slug":"imagePlaceholders","fields":{"heroBackgroundImagePlaceholder":[{"elementType":"craft\\elements\\Asset","filename":"image.png","folder":"Client Images Volume","source":"clientImagesVolume","path":""}],"heroImagePlaceholder":[{"elementType":"craft\\elements\\Asset","filename":"Light-helicopter-for-private-u.jpg","folder":"Client Images Volume","source":"clientImagesVolume","path":""}],"ctaBackgroundImagePlaceholder":[{"elementType":"craft\\elements\\Asset","filename":"light-jet.jpeg","folder":"Client Images Volume","source":"clientImagesVolume","path":""}],"listItemImagePlaceholder":[{"elementType":"craft\\elements\\Asset","filename":"fuel-consumption-rate_qhFFqD7.jpg","folder":"Client Images Volume","source":"clientImagesVolume","path":""}],"logosItemsPlaceholder":[{"elementType":"craft\\elements\\Asset","filename":"1ourclient-boa_2022-05-30-190449.png","folder":"Client Images Volume","source":"clientImagesVolume","path":""},{"elementType":"craft\\elements\\Asset","filename":"1ourclient-cao_2022-05-30-190452.png","folder":"Client Images Volume","source":"clientImagesVolume","path":""},{"elementType":"craft\\elements\\Asset","filename":"1ourclient-chase_2022-05-30-190456.png","folder":"Client Images Volume","source":"clientImagesVolume","path":""},{"elementType":"craft\\elements\\Asset","filename":"1ourclient-ggl_2022-05-30-190459.png","folder":"Client Images Volume","source":"clientImagesVolume","path":""}],"articleImagePlaceholder":[{"elementType":"craft\\elements\\Asset","filename":"inner-banner-bg.png","folder":"Client Images Volume","source":"clientImagesVolume","path":""}]}}}}]}}
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
        echo "m220705_142934_migration_global_imageplaceholders cannot be reverted.\n";
        return false;
    }
}
