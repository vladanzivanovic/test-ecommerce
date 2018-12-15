<?php

namespace CoreBundle\Components\Api;


use CoreBundle\Core\ServicesCore;
use CoreBundle\Entities\User;
use CoreBundle\Lib\Bcrypt;

class RegistrationService extends ServicesCore
{
    private $bcrypt;

    /**
     * RegistrationServices constructor.
     *
     * @param Bcrypt $bcrypt
     */
    public function __construct(
        Bcrypt $bcrypt
    ) {
        parent::__construct();
        $this->bcrypt = $bcrypt;
    }

    public function signUp(array $data)
    {
        $password = $this->bcrypt->encode($data['password']);

        $query = $this->db->getQueryBuilder()
            ->createQuery(User::TABLE)
            ->insert([
                'firstname' => ':firstname',
                'lastname' => ':lastname',
                'email' => ':email',
                'password' => ':password',
            ])
            ->setParameters([
                $data['firstname'],
                $data['lastname'],
                $data['email'],
                $password,
            ]);

        $this->db->write($query->getSql());
    }
}