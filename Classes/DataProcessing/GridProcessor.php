<?php
namespace MREIT\Testsite\DataProcessing;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Frontend\ContentObject\ContentObjectRenderer;
use TYPO3\CMS\Frontend\ContentObject\DataProcessorInterface;

/**
 * Class for data processing for the content element "My new content element"
 */
class GridProcessor implements DataProcessorInterface
{

    /**
     * @var ContentObjectRenderer
     */
    protected $contentObjectRenderer;

    /**
     * The default configuration.
     * Additional configuration will be merged onto this field.
     *
     * @var array
     */
    protected $defaultProcessorConfiguration = [
        'foundation_grid_size' => '12'
    ];

    /**
     * Process data for the content element "textmedia"
     *
     * @param ContentObjectRenderer $cObj The data of the content element or page
     * @param array $contentObjectConfiguration The configuration of Content Object
     * @param array $processorConfiguration The configuration of this processor
     * @param array $processedData Key/value store of processed data (e.g. to be passed to a Fluid View)
     * @return array the processed data as key/value store
     */
    public function process(
        ContentObjectRenderer $cObj,
        array $contentObjectConfiguration,
        array $processorConfiguration,
        array $processedData
    ) {
        $this->contentObjectRenderer = $cObj;

        if (isset($processorConfiguration['if.']) && !$this->contentObjectRenderer->checkIf($processorConfiguration['if.'])) {
            return $processedData;
        }

        $processorConfiguration = array_merge($this->defaultProcessorConfiguration, $processorConfiguration);

        $imageColumnSize = (int)$processedData['data']['mre_textmedia_foundation_grid'];
        $imageColumnSizeLeftover = ($imageColumnSize ? (int)$processorConfiguration['foundation_grid_size'] - $imageColumnSize : 0);
        $imageColumnSizeLeftoverHalf = ($imageColumnSizeLeftover ? floor($imageColumnSizeLeftover / 2) : 0);

        $textColumnSize = (int)$processorConfiguration['foundation_grid_size'] - $imageColumnSize;

        $imgColumnWidth = $imageColumnSize / (int)$processorConfiguration['foundation_grid_size'] * 100;

        // Prevent division by zero
        if ((int)$processedData['gallery']['count']['columns'] <= 0) {
            $processedData['gallery']['count']['columns'] = 1;
        }
        $galleryColumnSize = floor((int)$processorConfiguration['foundation_grid_size'] / $processedData['gallery']['count']['columns']);

        $processedData['grid'] = [
            'classes' => [
                'textcol'  => ($textColumnSize ? 'small-12 medium-' . $textColumnSize : 'small-12'),
                'textcol_order' => ($textColumnSize ? ' medium-push-' . $imageColumnSize : ''),
                'imagecol' => ($imageColumnSize ? 'small-12 medium-' . $imageColumnSize : 'small-12'),
                'imagecol_order' => ($imageColumnSize ? ' medium-pull-' . $textColumnSize : ''),
                'imgwidth' => 'width: '.($imgColumnWidth).'%',
                'imagecol_offset_leftover' => ($imageColumnSizeLeftover ? ' medium-offset-' . $imageColumnSizeLeftover : ''),
                'imagecol_offset_leftover_half' => ($imageColumnSizeLeftoverHalf > 0 ? ' medium-offset-' . $imageColumnSizeLeftoverHalf : ''),
                'gallerycol' => ($galleryColumnSize ? 'small-12 medium-' . $galleryColumnSize : 'small-12')
            ],
            'gallery' => [
                'width' => ($imgColumnWidth).'%'
            ],
            'row_size' => $imageColumnSize
        ];

        return $processedData;
    }
}