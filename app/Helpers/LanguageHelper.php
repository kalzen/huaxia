<?php

if (!function_exists('convertLanguageCode')) {
    /**
     * Convert language code to full language name.
     *
     * @param string $code
     * @return string
     */
    function convertLanguageCode($code)
    {
        $languages = [
            'en' => 'Tiếng Anh',
            'vi' => 'Tiếng Việt',
            'cn' => 'Tiếng Trung',
        ];

        return $languages[$code] ?? $code;
    }
}
