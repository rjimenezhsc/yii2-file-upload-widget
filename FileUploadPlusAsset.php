<?php
/**
 * @copyright Copyright (c) 2013 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\fileupload;

use yii\web\AssetBundle;

/**
 * FileUploadPlusAsset
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\fileupload
 */
class FileUploadPlusAsset extends AssetBundle
{
    public $sourcePath = '@bower/';

    public $css = [
        'jquery-file-upload/css/jquery.fileupload.css'
    ];

    public $js = [
        'blueimp-load-image/js/load-image.all.min.js',
        'blueimp-canvas-to-blob/js/canvas-to-blob.min.js',
        'jquery-file-upload/js/jquery.iframe-transport.js',
        'jquery-file-upload/js/jquery.fileupload-process.js',
        'jquery-file-upload/js/jquery.fileupload-image.js',
        'jquery-file-upload/js/jquery.fileupload-audio.js',
        'jquery-file-upload/js/jquery.fileupload-video.js',
        'jquery-file-upload/js/jquery.fileupload-validate.js'
    ];

    public $depends = [
        'dosamigos\fileupload\FileUploadAsset',
    ];
} 