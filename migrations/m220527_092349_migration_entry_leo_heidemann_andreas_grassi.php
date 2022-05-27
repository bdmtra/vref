<?php
namespace craft\contentmigrations;

use craft\db\Migration;
use dgrigg\migrationassistant\MigrationAssistant;

/**
 * Generated migration
 */
class m220527_092349_migration_entry_leo_heidemann_andreas_grassi extends Migration
{
    /**
    Migration manifest:

    ENTRY
    - leo-heidemann
    - andreas-grassi
    */

    private $json = <<<'JSON'
{"content":{"entries":[{"slug":"leo-heidemann","section":"teamMembers","sites":{"default":{"slug":"leo-heidemann","section":"teamMembers","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2021-03-10 15:50:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Leo Heidemann","entryType":"teamMembers","uid":"e9c183fd-8999-412e-ac5e-daadcfc841dd","author":"andrew","fields":{"personName":"Leo V. Heidemann, ASA","personDesignation":"Senior Appraiser","smallBio":null,"activeLinks":{"new1":{"type":"linkWrapper","enabled":true,"sortOrder":1,"fields":{"linkTitle":"leo@vref.com","linkDestination":"mailto:leo@vref.com"}},"new2":{"type":"linkWrapper","enabled":true,"sortOrder":2,"fields":{"linkTitle":"LinkedIn Profile","linkDestination":"https://www.linkedin.com/in/leo-heidemann-5a0414b/"}},"new3":{"type":"linkWrapper","enabled":true,"sortOrder":3,"fields":{"linkTitle":"Curriculum Vitae","linkDestination":"https://vrefstagebucket.blob.core.windows.net/media/dynamic_page_asset/About_Us/Leo-Heidemanns-CV.pdf"}},"new4":{"type":"linkWrapper","enabled":true,"sortOrder":4,"fields":{"linkTitle":"(815) 519-7311","linkDestination":"tel:(815)-519-7311"}}},"profilePicture":[{"elementType":"craft\\elements\\Asset","filename":"b2.jpg","folder":"Team Member Images","source":"teamMemberImages","path":""}],"richText":"<p>Leo Heidemann, ASA, is a senior aircraft appraiser, and he has over 30 years of experience in aviation. He has been a full-time aircraft appraiser since 2001 and he has completed thousands of appraisals for fixed wing aircraft including piston, light sport, experimental, museum, war birds and business jets. Previously to becoming an aircraft appraiser, Leo was a Support Equipment Engineer with Pratt &amp; Whitney Aircraft Government Products Division and he developed ground support equipment for the F100 and TF30 engines. Leo is a member of the American Society of Appraisers and he holds an Accredited Senior Appraiser designation in Machinery and Technology Specialties.</p>","seo":{"titleRaw":[],"descriptionRaw":"","keywords":[],"score":"neutral","social":{"twitter":{"handle":"","title":"Leo Heidemann | VREF Aircraft Values & Appraisals","imageId":null,"description":"The largest aircraft appraisal company in the world with a staff of Senior Accredited aircraft appraisers specializing in all aircraft models and categories. VREF Appraisers Determine the current fair market value and forecasted residual value on all aircraft makes, parts, equipment & more."},"facebook":{"handle":"","title":"Leo Heidemann | VREF Aircraft Values & Appraisals","imageId":null,"description":"The largest aircraft appraisal company in the world with a staff of Senior Accredited aircraft appraisers specializing in all aircraft models and categories. VREF Appraisers Determine the current fair market value and forecasted residual value on all aircraft makes, parts, equipment & more."}},"advanced":{"robots":[],"canonical":null}}}}}},{"slug":"andreas-grassi","section":"teamMembers","sites":{"default":{"slug":"andreas-grassi","section":"teamMembers","enabled":true,"site":"default","enabledForSite":true,"postDate":{"date":"2021-03-10 15:56:00.000000","timezone_type":3,"timezone":"America/Chicago"},"expiryDate":null,"title":"Andreas Grassi","entryType":"teamMembers","uid":"aaab5c4c-7990-44cf-ba08-1b26214a38c4","author":"andrew","fields":{"personName":"Dr. Andreas G. Grassl, ASA","personDesignation":"Senior Appraiser (Europe)","smallBio":null,"activeLinks":{"new1":{"type":"linkWrapper","enabled":true,"sortOrder":1,"fields":{"linkTitle":"andreas@vref.com","linkDestination":"mailto:andreas@vref.com"}},"new2":{"type":"linkWrapper","enabled":true,"sortOrder":2,"fields":{"linkTitle":"Curriculum Vitae","linkDestination":"https://vrefstagebucket.blob.core.windows.net/media/dynamic_page_asset/About_Us/Andreas-GRASSL-CV-2018-06-EN.pdf"}},"new3":{"type":"linkWrapper","enabled":true,"sortOrder":3,"fields":{"linkTitle":"(208) 703-7959","linkDestination":"tel:(208)-703-7959"}}},"profilePicture":[{"elementType":"craft\\elements\\Asset","filename":"b3.jpg","folder":"Team Member Images","source":"teamMemberImages","path":""}],"richText":"<p>Andreas G. Grassl, ASA is a citizen of Austria, and is our European Senior Appraiser. He graduated from Vienna University with a Doctorate in Law and from Vienna University of Economics and Business Administration with a Master’s Degree in Commerce. Andreas is fluent in German and English and speaks French and a little Italian. He has over 30 years of experience in the aviation industry, both as an Aviation Attorney and as a Claims Adjuster and Aircraft Appraiser. He was involved in almost 150 – mostly international – aircraft transactions and worked as the Austrian Aviation Surveyor and Claims Adjuster for “Deutscher Luftpool”, the German Aviation Insurance Pool. After the dissolution of the Luftpool in 2003, Andreas became an independent Aviation Expert and Aircraft Appraiser. Andreas is certified under ISO/IEC 17024 as an Aircraft Appraiser. Starting to fly gliders while still in law school, he has been an active pilot and aircraft owner for over 35 years, holding an EASA Commercial and a FAA Airline Transport License and a License as an ICAO Language Proficiency Examiner for German and English. Andreas is an active member of AOPA Germany’s working group „Aviationlaw“ and the „Verband der Luftfahrtsachverständigen“ (German Association of Aviation Experts). Being a native of Styria, Andreas enjoys Mountaineering, Skiing and boating trips in the Mediterranean.</p>","seo":{"titleRaw":[],"descriptionRaw":"","keywords":[],"score":"neutral","social":{"twitter":{"handle":"","title":"Andreas Grassi | VREF Aircraft Values & Appraisals","imageId":null,"description":"The largest aircraft appraisal company in the world with a staff of Senior Accredited aircraft appraisers specializing in all aircraft models and categories. VREF Appraisers Determine the current fair market value and forecasted residual value on all aircraft makes, parts, equipment & more."},"facebook":{"handle":"","title":"Andreas Grassi | VREF Aircraft Values & Appraisals","imageId":null,"description":"The largest aircraft appraisal company in the world with a staff of Senior Accredited aircraft appraisers specializing in all aircraft models and categories. VREF Appraisers Determine the current fair market value and forecasted residual value on all aircraft makes, parts, equipment & more."}},"advanced":{"robots":[],"canonical":null}}}}}}]}}
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
        echo "m220527_092349_migration_entry_leo_heidemann_andreas_grassi cannot be reverted.\n";
        return false;
    }
}
