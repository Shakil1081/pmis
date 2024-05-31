<?php
return [
    'mode' => 'utf-8',
    'format' => 'A4',
    'default_font_size' => 12,
    'default_font' => 'solaimanlipi',
    'margin_left' => 10,
    'margin_right' => 10,
    'margin_top' => 10,
    'margin_bottom' => 10,
    'margin_header' => 0,
    'margin_footer' => 0,
    'orientation' => 'P',
    'custom_font_dir' => base_path('public/fonts/'), // path to your fonts
    'custom_font_data' => [
        'solaimanlipi' => [
            'R' => 'SolaimanLipi.ttf', // regular font
            'B' => 'SolaimanLipi-Bold.ttf', // optional: bold font
            // you can add 'I' => 'SolaimanLipi-Italic.ttf' and 'BI' => 'SolaimanLipi-BoldItalic.ttf' as well
        ]
    ],
    'auto_language_detection' => true,
    'temp_dir' => base_path('storage/tmp'),
];


