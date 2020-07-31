<?php

namespace App\Http\Controllers\Api\V1;
use Illuminate\Support\Facades\Storage;

/**
 * @group upload
 * 文件上传
 */
class UploadController extends BaseController
{
    public function checkFile()
    {
        if(!request()->hasFile('file')) {
            return false;
        }
        $file = request()->file('file');

        if(! is_array($file)) {
            return false;
        }

        return true;
    }

    /**
     * uploadPost
     * 帖子图片/视频上传
     * @bodyParam  file[] file required 图片/视频文件列表
     * @bodyParam  type int required 图片/视频类型 1图片 2视频
     * @responseFile responses/upload/uploadPost.json
     */
    public function uploadPost()
    {
        $checkFile = $this->checkFile();

        if(empty($checkFile)) {
            return $this->retJson(201, '上传文件有误');
        }

        $fileList = request()->file('file');
        $fileType = request('type');
        $disk     = Storage::disk('qiniu');

        $sourceList = [];

        foreach($fileList as $file)
        {
            $fileName   = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
            $uploadBool = $disk->put('sns/post/'.$fileName,file_get_contents($file->getRealPath()));

            if(empty($uploadBool)){
                continue;
            }

            $previewType  = $fileType == 1 ? 'imageView2/2/w/600/h/600/q/75' : 'vframe/png/offset/1/w/600/h/600';

            $qiniuUrl        = $disk->downloadUrl('sns/post/' . $fileName);
            $qiniuPreviewUrl = $disk->imagePreviewUrl('sns/post/' . $fileName, $previewType);

            $sourceList[] = [
                'source_src'       => $qiniuUrl,
                'source_thumb_src' => $qiniuPreviewUrl
            ];
        }

        return $this->retData($sourceList);
    }

    /**
     * uploadUserCert
     * 用户认证图片上传
     * @bodyParam  file[] file required 手持身份证图片
     * @responseFile responses/upload/uploadUserCert.json
     */
    public function uploadUserCert()
    {
        $checkFile = $this->checkFile();

        if(empty($checkFile)) {
            return $this->retJson(201, '上传文件有误');
        }

        $file = request()->file('file')[0];
        $disk = Storage::disk('qiniu');

        $fileName   = md5($file->getClientOriginalName().time().rand()).'.'.$file->getClientOriginalExtension();
        $uploadBool = $disk->put('sns/cert/'.$fileName,file_get_contents($file->getRealPath()));

        if(empty($uploadBool)){
            return $this->retJson(201, '上传有误');
        }

        $qiniuUrl = $disk->downloadUrl('sns/cert/' . $fileName);

        return $this->retData([$qiniuUrl]);
    }

    /**
     * uploadUserAvatar
     * 用户头像上传
     * @bodyParam  file[] file required 用户头像
     * @responseFile responses/upload/uploadUserAvatar.json
     */
    public function uploadUserAvatar()
    {
        $checkFile = $this->checkFile();

        if(empty($checkFile)) {
            return $this->retJson(201, '上传文件有误');
        }

        $file = request()->file('file')[0];
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
