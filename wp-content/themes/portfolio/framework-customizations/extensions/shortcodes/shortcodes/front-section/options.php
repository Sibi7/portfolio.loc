<?php if (!defined('FW')) {
    die('Forbidden');
}
/**
 * Опции (поля) шорткода
 * @link Список всех возможных опицй http://manual.unyson.io/en/latest/options/built-in/introduction.html
 */
$options = [
    'background-img' => array(
        'type' => 'upload',
        'label' => __('Фоновое изображение', '{domain}'),
        'images_only' => true,
    ),
    'photo' => array(
        'type' => 'upload',
        'label' => __('Аватар', '{domain}'),
        'images_only' => true,
    ),
];