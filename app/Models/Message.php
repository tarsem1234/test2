<?php

namespace App\Models;

use App\Models\Access\User\User;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message extends Model
{
    use SoftDeletes;

    protected $table = 'messages';

    public function fromUser()
    {
        return $this->belongsTo('App\Models\Access\User\User', $this->user_id === Auth::id() ? 'user_id' : 'to_user_id');
    }

    public function fromUserInbox()
    {
        return $this->belongsTo('App\Models\Access\User\User', 'user_id');
    }

    public function fromUserInboxCheck()
    {
        return $this->belongsTo('App\Models\Access\User\User', 'to_user_id');
    }

    public static function logToDB($toUserId, $messageContent, $fromUserId = null)
    {
        $user = User::find($toUserId);
        if ($user) {
            if (empty($messageContent)) {
                return ['status' => 'failed', 'message' => 'Message content can not be empty'];
            }
            $message = new Message;
            $message->user_id = $fromUserId ?? Auth::id();
            $message->to_user_id = $toUserId;
            $message->message = $messageContent;
            if ($message->save()) {
                return ['status' => 'success', 'message' => 'Message has been logged'];
            } else {
                return ['status' => 'failed', 'message' => 'Something went wrong!!'];
            }
        } else {
            return ['status' => 'failed', 'message' => 'User not found'];
        }
    }
}
