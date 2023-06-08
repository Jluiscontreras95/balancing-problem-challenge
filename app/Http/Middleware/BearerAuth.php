<?php

namespace App\Http\Middleware;

use Closure;

class BearerAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $token = $request->header('Authorization'); // Se recibe el token dentro del header de la petición
        // Se evalúa que sea de tipo Bearer token y que no venga vacío
        if (!$token || !preg_match('/Bearer\s(\S+)/', $token, $matches)) {
            return response('Sin Autorización.', 401);
        }
        /** 
         * Llega el token válido
         * else{
         *     $bearerToken = $matches[1];
         *     return response($bearerToken, 200);
         * }
         */

        // Validaciones con el token

        $validation = $this->isValid($token);
        if ($validation == []){
            return response("Error de estructura del token : ". $token);
        }
        /**
         * Verificación que muestra el string token
         * else{
         *  return response($token);
         * }
         */

        return $next($request);
    }

    public function isValid($s) {
        $stack = [];// Crea una pila para almacenar los paréntesis abiertos
        $map = [
            ')' => '(',
            '}' => '{',
            ']' => '[',
        ];// Crea un mapa para almacenar las parejas de paréntesis abiertos y cerrados
        // Itera a través de la cadena
        for ($i = 0; $i < strlen($s); $i++) {
            $char = $s[$i];
            // Si el carácter es un paréntesis abierto, push a la pila
            if (in_array($char, ['(', '{', '['])) {
                array_push($stack, $char);
                // Si el carácter es un paréntesis cerrado, pop el elemento superior de la pila y verifica si coinciden
            } elseif (in_array($char, [')', '}', ']'])) {
                if (count($stack) == 0 || $map[$char] != array_pop($stack)) {
                    return false;
                }
            }
        }
        return count($stack) == 0;  // Si la pila esta vacía, la cadena es valida
    }
}
