<?php 

/**
 * Include all files in
 * core directory
 * except this file and koneksi.php
 */
include __DIR__ . '/koneksi.php';
$files = glob(__DIR__ . '/*.php');

foreach ($files as $file) {
    if ($file !== __FILE__ && $file !== __DIR__ . '/koneksi.php' && $file !== __DIR__ . '/config.php') {
        include $file;
    }
}