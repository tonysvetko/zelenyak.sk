<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Request;
use ReCaptcha\ReCaptcha;

class ReCaptchaRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $recaptcha = new ReCaptcha(env('RECAPTCHA_SECRET_KEY'));

        $recaptchaResponse = $recaptcha->verify(
            $value,
            Request::ip()
        );

        return  $recaptchaResponse->isSuccess();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return trans('validation.recaptcha');
    }
}
