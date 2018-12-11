<?php
class UploadException extends Exception
{
    public function __construct($code) {
        $message = $this->codeToMessage($code);
        parent::__construct($message, $code);
    }
    private function codeToMessage($code) {
        switch ($code) {
            case UPLOAD_ERR_INI_SIZE:
                $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
                break;

            case UPLOAD_ERR_FORM_SIZE:
                $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                break;

            case UPLOAD_ERR_PARTIAL:
                $message = "The uploaded file was only partially uploaded";
                break;

            case UPLOAD_ERR_NO_FILE:
                $message = "No file was uploaded";
                break;

            case UPLOAD_ERR_NO_TMP_DIR:
                $message = "Missing a temporary folder";
                break;

            case UPLOAD_ERR_CANT_WRITE:
                $message = "Failed to write file to disk";
                break;

            case UPLOAD_ERR_EXTENSION:
                $message = "File upload stopped by extension";
                break;

            default:
                $message = "Unknown upload error";
                break;
        }
        return $message;
    }
}

// Use
if ($_FILES['upload']['error'] === UPLOAD_ERR_OK) {
    $path = '../upload/files/';
    $file = $_FILES['upload'];
    if (isset($_FILES["upload"]) and !empty($_FILES["upload"]["name"])) {
        $ex = end(explode(".", $_FILES["upload"]["name"]));
        $new_name = date("Y-m-d") . microtime() . "." . $ex;
        if (move_uploaded_file($_FILES['upload']["tmp_name"], $path . $new_name)) {
            $message = "";
        } else {
            $message = "Cannot Upload" . "-" . $path . $new_name;
        }
    }
if (!empty($message)) {
    $url = "";
} else {
    $url = "http://localhost/cmzone/euangfa/~admin/".$path.$new_name;
}
$funcNum = $_GET['CKEditorFuncNum'];
echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction($funcNum, '$url', '$message');</script>";
} else {
    throw new UploadException($_FILES['file']['error']);
}
?>