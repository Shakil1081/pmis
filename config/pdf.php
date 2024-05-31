<?php

return [
    'mode' => 'utf-8',
    'format' => 'A4',
    'default_font_size' => '20',
    'default_font' => 'FreeSerif',
    // 'default_font' => 'examplefont ',
    'margin_left' => 20,
    'margin_right' => 10,
    'margin_top' => 10,
    'margin_bottom' => 10,
    'margin_header' => 0,
    'margin_footer' => 0,
    'orientation' => 'P',
    'title' => 'Caab Height Clearance',
    'subject' => 'Caab Height Clearance',
    'author' => 'Caab Height Clearance',
    'watermark' => 'Caab Height Clearance',
    'show_watermark' => false,
    'show_watermark_image' => false,
    'watermark_font' => 'sans-serif',
    'display_mode' => 'fullpage',
    'watermark_text_alpha' => 0.1,
    'watermark_image_path' => ' ',
    'watermark_image_alpha' => 0.1,
    'watermark_image_size' => 'D',
    'watermark_image_position' => 'P',
    'custom_font_dir' => '',
    'custom_font_data' => [],
    'auto_language_detection' => false,
    'temp_dir' => storage_path('app'),
    'pdfa' => false,
    'pdfaauto' => false,
    'use_active_forms' => false,

    'custom_font_dir' => base_path('resources/fonts/'),
    // don't forget the trailing slash!
    'custom_font_data' => [
        'nsikosh' => [
            // must be lowercase and snake_case
            'R' => 'Nikosh.ttf',
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ],
        'sutonnyomj' => [
            // must be lowercase and snake_case
            'R' => 'SutonnyOMJ.ttf',
            'B' => 'SutonnyOMJ.ttf',
            'I' => 'SutonnyOMJ.ttf',
            'BI' => 'SutonnyOMJ.ttf',
            'useOTL' => 0xFF,
            'useKashida' => 75,
        ],
    ],
];