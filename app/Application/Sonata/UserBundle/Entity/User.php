<?php

/**
 * This file is part of the <name> project.
 *
 * (c) <yourname> <youremail>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\UserBundle\Entity;

use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * This file has been generated by the Sonata EasyExtends bundle.
 *
 * @link https://sonata-project.org/bundles/easy-extends
 *
 * References :
 *   working with object : http://www.doctrine-project.org/projects/orm/2.0/docs/reference/working-with-objects/en
 *
 * @author <yourname> <youremail>
 */
class User extends BaseUser
{


    public function __construct()
    {

        $this->council = new ArrayCollection();
        $this->contract = new ArrayCollection();
    }

    /**
     * @var int $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return int $id
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @ORM\ManyToOne(targetEntity="User",  inversedBy="fosUser")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    protected $parentUser;


    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="parentUser")
     */
    protected $fosUser;

    /**
     * @ORM\OneToMany(targetEntity="\VaultBundle\Entity\Council", mappedBy="userCouncil")
     */
    protected $council;

    /**
     * @ORM\OneToMany(targetEntity="\VaultBundle\Entity\Contract", mappedBy="userContract")
     */
    protected $contract;


    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=100)
     */
    protected $address;

    /**
     * Set parentUser
     *
     *
     * @return parentUser
     */
    public function setParentUser(\Application\Sonata\UserBundle\Entity\User $user = null)
    {
        $this->parentUser = $user;

        return $this;
    }

    /**
     * Get parentUser
     *
     * @return int $parentUser
     */
    public function getParentUser()
    {
        return $this->parentUser;
    }


    /**
     * Get address
     *
     * @return string $address
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address
     *
     *
     * @return address
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
}
