Tener en cuenta el campo status

En el modelo que cambie los boleanos

protected $casts = [
        "public" => "boolean",
    ];


Sobrescribir método login en el LoginController
 $user = User::where('email', $request->get('email'))->first();

        if ($user && $user->status && $this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

<h1>
ToDo: En teoría se puede sobrescribir el método attempt y hacerlo más elegante, pero solo encuentro su interface y no su implementacion.
Probar a cambiar:

if ($user && $user->status && $this->attemptLogin($request))
por
 if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 1]))

Ver en este enlace para enviar mensajes: https://laracasts.com/discuss/channels/laravel/how-to-override-auth-login-function-in-laravel
<h1>
