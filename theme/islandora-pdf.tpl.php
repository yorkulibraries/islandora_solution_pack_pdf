<?php

/**
 * @file
 * This is the template file for the pdf object
 *
 * @TODO: Add documentation about this file and the available variables
 */
?>

<meta name="twitter:card" content="photo" />
<meta name="twitter:site" content="@YUDLbot" />
<meta name="twitter:title" content="<?php print ("{$islandora_object->label}"); ?>" />
<meta property="og:url" content="https://digital.library.yorku.ca/<?php print ("islandora/object/{$islandora_object->id}"); ?>" />
<meta name="twitter:image" content="https://digital.library.yorku.ca/<?php print ("islandora/object/{$islandora_object->id}/datastream/PREVIEW/view.jpg"); ?>" />
<div class="islandora-pdf-object islandora" vocab="http://schema.org/" prefix="dcterms: http://purl.org/dc/terms/" typeof="Article">
  <div class="islandora-pdf-content-wrapper clearfix">
    <?php if (isset($islandora_content)): ?>
      <div class="islandora-pdf-content">
        <?php print $islandora_content; ?>
      </div>
      <?php if (isset($islandora_download_link)): ?>
        <?php print $islandora_download_link; ?>
      <?php endif; ?>
    <?php endif; ?>
  </div>
  <div class="islandora-pdf-metadata">
    <?php print $description; ?>
    <?php if($parent_collections): ?>
      <div>
        <h2><?php print t('In collections'); ?></h2>
        <ul>
          <?php foreach ($parent_collections as $collection): ?>
            <li><?php print l($collection->label, "islandora/object/{$collection->id}"); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    <?php endif; ?>
    <?php print $metadata; ?>
  </div>
</div>
