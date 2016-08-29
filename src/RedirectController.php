<?php

namespace Brayniverse\LaravelRedirectHelper;

use Illuminate\Http\RedirectResponse;

class RedirectController
{
    /**
     * Handle the redirect.
     *
     * @param  string  $destination
     * @param  int  $status
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle($destination, $status = 301)
    {
        return new RedirectResponse($destination, $status);
    }

    /**
     * Extract the redirect data from the route and call the handler.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callAction($method, $parameters)
    {
        return $this->handle($parameters['redirection']['destination'], $parameters['redirection']['status']);
    }
}
