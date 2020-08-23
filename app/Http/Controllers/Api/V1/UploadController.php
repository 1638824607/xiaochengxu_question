<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Support\Facades\Storage;

/**
 * @group Upload
 * @authenticated
 * 文件上传
 */
class UploadController extends BaseController
{
    public function checkFile()
    {
        if(!request()->hasFile('file')) {
            return false;
        }

        return true;
    }

    /**
     * uploadPost
     * 帖子图片上传
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  file file required 图片文件
     * @responseFile responses/upload/uploadPost.json
     */
    public function uploadPost()
    {
        $checkFile = $this->checkFile();

        if(empty($checkFile)) {
            return $this->retJson(201, '上传文件有误');
        }

        $file = request()->file('file');
        $disk     = Storage::disk('qiniu');

        $fileName   = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
        $uploadBool = $disk->put('sns/post/'.$fileName,file_get_contents($file->getRealPath()));

        if(empty($uploadBool)){
            return [201, '上传失败'];
        }

        $previewType  = 'imageView2/2/w/600/h/600/q/75';

        $qiniuUrl        = $disk->downloadUrl('sns/post/' . $fileName);
        $qiniuPreviewUrl = $disk->imagePreviewUrl('sns/post/' . $fileName, $previewType);

        $sourceList = [
            'src'       => $qiniuUrl,
            'thumb_src' => $qiniuPreviewUrl
        ];

        return $this->retData($sourceList);
    }

    /**
     * uploadUserAvatar
     * 用户头像上传
     * @bodyParam  user_id int required 用户id
     * @bodyParam  token   int required 用户token
     * @bodyParam  file file required 用户头像
     * @responseFile responses/upload/uploadUserAvatar.json
     */
    public function uploadUserAvatar()
    {

        $checkFile = $this->checkFile();

        if(empty($checkFile)) {
            return $this->retJson(201, '上传文件有误');
        }

        $file = request()->file('file');
        $disk = Storage::disk('qiniu');

        $fileName   = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
        $uploadBool = $disk->put('sns/avatar/'.$fileName,file_get_contents($file->getRealPath()));

        if(empty($uploadBool)){
            return $this->retJson(201, '上传有误');
        }

        $qiniuUrl = $disk->downloadUrl('sns/avatar/' . $fileName);

        return $this->retData([$qiniuUrl]);
    }
}
