<?php

use Craft;
use craft\elements\Entry;
use League\Fractal\TransformerAbstract;
use craft\web\View;

class TwigTransformer extends TransformerAbstract
{

    public function __construct($settings)
    {
        $this->settings = $settings;
    }

    public function transform( $entry )
    {
        $oldMode = Craft::$app->view->getTemplateMode();
        Craft::$app->view->setTemplateMode(View::TEMPLATE_MODE_SITE);
        $html = Craft::$app->view->renderTemplate( $this->settings['templatePath'], [$this->settings['variableName'] => $entry]);
        Craft::$app->view->setTemplateMode($oldMode);

        return [
            'id' => $entry->id,
            'html' => $html
        ];
    }
}

return [
    'endpoints' => [
        'lazy-load' => function() {

        // validate and decode settings
        $hashed_settings = Craft::$app->request->getParam('settings');
        $settings = [];

        foreach ($hashed_settings as $key => $value) {
            $value = Craft::$app->security->validateData($value);
            if($value === false){
                return false;
            }else{
                $settings[$key] = $value;
            }
        }

        // criteria
        $criteria = [
            'section' => $settings['section'], 
            'limit' =>  $settings['limit'],
            'offset' =>  $settings['limit'] * Craft::$app->request->getParam('offset'),
            'order' => $settings['orderBy'],
        ];
      
        return [
            'elementType' => Entry::class,
            'criteria' => $criteria,
            'paginate' => false,
            'transformer' => new TwigTransformer($settings),
        ];
        },
    ]
];