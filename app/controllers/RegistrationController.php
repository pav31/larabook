<?php

use Larabook\Forms\RegistrationForm;
use Larabook\Registration\RegisterUserCommand;
use Larabook\Core\CommandBus;
use Laracasts\Flash\Flash;


class RegistrationController extends BaseController {

    use CommandBus;



    /**
     * @var RegistrationForm
     */
    private $registrationForm;

    /**
     * @param RegistrationForm $registrationForm
     */
    function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;

        $this->beforeFilter('guest');
    }


    /**
	 * Show the form to register new User.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('registration.create');
	}


    /**
     * Create a new Larabook user
     *
     * @return Response
     */
    public function store()
    {

        $this->registrationForm->validate(Input::all());

        extract(Input::only('username', 'email', 'password'));

        $user = $this->execute(
            new RegisterUserCommand($username, $email, $password)
        );

        Auth::login($user);

        Flash::overlay('Glad to have you as a new Larabook member!');
//        Flash::message('Glad to have you as a new Larabook member!');

        return Redirect::home();
	}

}

