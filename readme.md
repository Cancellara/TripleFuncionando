Mail de confirmación para crear usuario:

https://programacionymas.com/blog/confirmar-email-laravel

Para que no de por saco a la hora de enviar correos por el tema de SSL añadir el config/mail.php
'stream' => [
        'ssl' => [
            'allow_self_signed' => true,
            'verify_peer' => false,
            'verify_peer_name' => false,
        ],
    ],
----------------------------------------------------------
Para mostrar el mensaje: ToDo: Buscar forma más bonita

return redirect()->back()->with('message', 'Successfully created a new account. Please check your email and activate your account.');

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
--------------------------------------------------------------
ToDo:
en login controller añadir el método isUserActive que retorne el booleano (recordar lo de dulio y que se pasaban 1 y 0 en vez de true y false)

public function username()
    {
        return 'email';
    }

Reescribir login en login controller

parte :

  if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

  if ($this->attemptLogin($request) &&isUserActive) {
            return $this->sendLoginResponse($request);
        }
