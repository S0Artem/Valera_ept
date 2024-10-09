<?php
namespace App\Enums;

enum RoleEnum: string{

    case ADMIN = 'admin';
    case USER = 'user';


    public static function getRoleName(string $role)
    {
        $role = RoleEnum::from($role);
        $array = [
            self::USER->value => 'Пользователь',
            self::ADMIN->value => 'Администратор',
        ];
        return $array[$role->value];
    }
}