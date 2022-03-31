<?php
namespace app\Http\Controllers\Traits;

Trait ProcessResponseTrait
{
    public function processResponseTrait($key,$data,$status,$message)
    {
        
        if($status=='success')
        {
            return response()->json([
                'status'=>$status,
                 $key=>$data,
                'message'=>$message,
                'code'=>202,
            ]);
        }

        else
        {
            return response()->json([
                'status'=>$status,
                'message'=>$message,
                'code'=>404,
            ]);
        }
    }

}

?>