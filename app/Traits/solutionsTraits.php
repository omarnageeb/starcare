<?php

namespace App\Traits;

Trait  solutionsTraits
{
     function saveImage($photo,$folder){
        //save photo in folder
        $file_extension = $photo->getClientOriginalExtension();
        $photo_name = time().'.'.$file_extension;
        $path = $folder;
        $photo -> move($path,$photo_name);
        return $photo_name;
    }

    function saveIcon($icon,$folder){
        //save photo in folder
        $file_extension = $icon->getClientOriginalExtension();
        $icon_name = time().'.'.$file_extension;
        $path = $folder;
        $icon -> move($path,$icon_name);
        return $icon_name;
    }


}
