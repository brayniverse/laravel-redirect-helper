<?php

class RedirectControllerTest extends TestCase
{
    public function test_redirect_uses_301_status_by_default()
    {
        Route::redirect('/contact_us', 'contact');
        Route::get('/contact', function () {
        });

        $this->get('/contact_us')
            ->assertResponseStatus(301)
            ->followRedirects()
            ->seePageIs('/contact');
    }

    public function test_can_override_default_redirect_status()
    {
        Route::redirect('/contact_us', 'contact', 302);
        Route::get('/contact', function () {
        });

        $this->get('/contact_us')
            ->assertResponseStatus(302)
            ->followRedirects()
            ->seePageIs('/contact');
    }
}
