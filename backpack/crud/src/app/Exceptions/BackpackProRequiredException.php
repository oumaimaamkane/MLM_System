<?php

namespace Backpack\CRUD\app\Exceptions;

class BackpackProRequiredException extends \Exception
{
    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        // 0, by default, pass only what is a feature we construct the rest of the message
        // 1 use the provided message in full
        switch ($this->getCode()) {
            case 0:
                $this->message = $this->message.' is a Backpack PRO feature. Please purchase and install the Backpack\PRO addon from backpackforlaravel.com';
                break;
        }

        return response(view('errors.500', ['exception' => $this]), 500);
    }
}
