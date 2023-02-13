<?php

namespace App\Models;

use CodeIgniter\Model;

class M_User extends Model
{
    protected $DBGroup          = 'default';
    protected $table = 'users';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields = ['username', 'email', 'password'];
    protected $beforeInsert = ['hashPassword'];

    public function hashPassword(array $data)
    {
        $data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
        return $data;
    }

    public function verifyPassword(string $password, string $hash)
    {
        return password_verify($password, $hash);
    }

    public function findByEmail(string $email)
    {
        return $this->where(['email' => $email])->first();
    }

    public function findByEmailOrUsername(string $email_or_username)
    {
        return $this->where(['email' => $email_or_username])->orWhere(['username' => $email_or_username])->first();
    }
}
