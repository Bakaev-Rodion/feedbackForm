<?php
class FileUploadController
{
    static function uploadFile($userFile,$userName,$timestamp,$topic){
        $ext = pathinfo($userFile['userFile']['name'])['extension'];
        $newName = pathinfo($userFile['userFile']['name'])['filename']."_".$userName."_".$topic."_".$timestamp.".".$ext;
        move_uploaded_file($_FILES['userFile']['tmp_name'],'..\folder\\'.$newName);
        return $newName;
}
}