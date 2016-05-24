<?php

//Linea del código utilizado para encriptar las claves de acceso ya existentes en la base de datos, usadno bcrypt, en tinker

foreach($users->all() as $user) $users->where('username',$user->username)->update(['password'=>bcrypt($user->password)]);