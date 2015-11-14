<?php 
class Cms5645a387d84a5_3089939444Class extends \Cms\Classes\PartialCode
{
public function onSend() {
    $data = Input::all();
    $rules = ['name' => 'required', 'email' => 'required|email', 'subject' => 'required', 'comments' => 'required'];
    $msgs = ['required' => 'Đừng để trống trường này nhé','email' => 'Địa chỉ chưa đúng cấu trúc rồi'];
    $v = Validator::make($data, $rules, $msgs);

    if ($v->fails()) {
        $this['result'] = $v->messages()->first();
    } else {
        Mail::queue('emails.aanvraag', $data, function($message) {
            $message->from(post('email'), post('name'));
            $message->to('hnquang112@yahoo.com.vn')->subject(post('subject'));
        });

        $this['result'] = 'Tin nhắn được gửi thành công';
    }
}

}
