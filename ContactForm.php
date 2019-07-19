<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends ActiveRecord
{
    public $name;
    public $email;
    public $subject;
    public $body;
    public $verifyCode;


     public static function tableName ( ){
        return 'contacts';
     }

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['cont_name', 'cont_email', 'cont_subject', 'cont_body'], 'required'],
            // email has to be a valid email address
            ['cont_email', 'email'],
            // verifyCode needs to be entered correctly
            //['verifyCode', 'captcha'],
            ['cont_hobby', 'required', 'whenClient'=>"function(attribute, value){
                return $('.radiobox input:checked').val() == 'Y';
            }"],
            ['cont_hobbysec', 'required', 'whenClient'=>"function(attribute, value){
                return $('.radiobox input:checked').val() == 'N';
            }"]
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {

        return true;
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject($this->subject)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
