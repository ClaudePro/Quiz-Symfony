<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FosUser
 *
 * @ORM\Table(name="fos_user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_957A647992FC23A8", columns={"username_canonical"}), @ORM\UniqueConstraint(name="UNIQ_957A6479A0D96FBF", columns={"email_canonical"}), @ORM\UniqueConstraint(name="UNIQ_957A6479C05FB297", columns={"confirmation_token"})})
 * @ORM\Entity
 */
class FosUser
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=180, nullable=false)
     */
    public $username;

    /**
     * @var string
     *
     * @ORM\Column(name="username_canonical", type="string", length=180, nullable=false)
     */
    public $usernameCanonical;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=180, nullable=false)
     */
    public $email;

    /**
     * @var string
     *
     * @ORM\Column(name="email_canonical", type="string", length=180, nullable=false)
     */
    public $emailCanonical;

    /**
     * @var boolean
     *
     * @ORM\Column(name="enabled", type="boolean", nullable=false)
     */
    public $enabled;

    /**
     * @var string
     *
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    public $salt;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    public $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_login", type="datetime", nullable=true)
     */
    public $lastLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmation_token", type="string", length=180, nullable=true)
     */
    public $confirmationToken;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="password_requested_at", type="datetime", nullable=true)
     */
    public $passwordRequestedAt;

    /**
     * @var array
     *
     * @ORM\Column(name="roles", type="array", nullable=false)
     */
    public $roles;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $id;


}

