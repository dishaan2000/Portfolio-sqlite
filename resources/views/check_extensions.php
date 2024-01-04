<?php

$requiredExtensions = [
    'ctype', 'curl', 'dom', 'fileinfo', 'filter', 'hash',
    'mbstring', 'openssl', 'pcre', 'pdo', 'session',
    'tokenizer', 'xml',
];

$missingExtensions = [];

foreach ($requiredExtensions as $extension) {
    if (!extension_loaded($extension)) {
        $missingExtensions[] = $extension;
    }
}

if (empty($missingExtensions)) {
    echo 'All required extensions are installed.';
} else {
    echo 'The following extensions are missing: ' . implode(', ', $missingExtensions);
}

?>
