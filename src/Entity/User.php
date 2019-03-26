<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;
use Symfony\Component\Serializer\Annotation\Groups;
use App\Controller\Api\UserApiController;

//collectionOperations={"get,post"},
// "denormalizationContext"={"groups"={"public"}} => Le group de donnée que l'on doit envoyé au serveur

/**
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ApiResource(
 *            normalizationContext={"groups"={"public"}},
 *            denormalizationContext={"groups"={"base"}},
 *            collectionOperations={"get","post"},
 *             itemOperations={
 *               "get",
 *               "update_password"={
 *                  "method"="POST",
 *                  "path"="/update-password/{id}",
 *                  "controller"=UserApiController::class,
 *                  "normalization_context"={"groups"={"public"}},
 *                  "denormalizationContext"={"groups"={"pwd"}}
 *                }
 *              },
 *              attributes={"formats"={"json"}}
 *              )
 */
class User
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"public"})
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"public"})
     */
    private $firstname;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"public"})
     */
    private $dateOfBirth;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     * @Groups({"public"})
     */
    private $dateOfCreation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"public"})
     */
    private $street;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"public"})
     */
    private $postalCode;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"public"})
     */
    private $city;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"public"})
     */
    private $mobileNumber;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"public","pwd"})
     */
    private $email;

    /**
     * @ORM\Column(name="num_siren", type="string", length=255, nullable=true)
     * @Groups({"public"})
     */
    private $numSiren;

    /**
     * @ORM\Column(name="num_siret", type="string", length=255, nullable=true)
     * @Groups({"public"})
     */
    private $numSiret;

    /**
     * @ORM\Column(name="num_assoc", type="string", length=255)
     * @Groups({"public"})
     */
    private $numAssoc;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"pwd"})
     */
    private $password;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isEnabled;

    /**
     * @ORM\Column(type="integer")
     */
    private $statutJuridique;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastAuthentication;
   

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     *
     * @return self
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     *
     * @return self
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOfCreation()
    {
        return $this->dateOfCreation;
    }

    /**
     * @param mixed $dateOfCreation
     *
     * @return self
     */
    public function setDateOfCreation($dateOfCreation)
    {
        $this->dateOfCreation = $dateOfCreation;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param mixed $street
     *
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     *
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     *
     * @return self
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * @param mixed $mobileNumber
     *
     * @return self
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumSiren()
    {
        return $this->numSiren;
    }

    /**
     * @param mixed $numSiren
     *
     * @return self
     */
    public function setNumSiren($numSiren)
    {
        $this->numSiren = $numSiren;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumSiret()
    {
        return $this->numSiret;
    }

    /**
     * @param mixed $numSiret
     *
     * @return self
     */
    public function setNumSiret($numSiret)
    {
        $this->numSiret = $numSiret;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getNumAssoc()
    {
        return $this->numAssoc;
    }

    /**
     * @param mixed $numAssoc
     *
     * @return self
     */
    public function setNumAssoc($numAssoc)
    {
        $this->numAssoc = $numAssoc;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     *
     * @return self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsEnabled()
    {
        return $this->isEnabled;
    }

    /**
     * @param mixed $isEnabled
     *
     * @return self
     */
    public function setIsEnabled($isEnabled)
    {
        $this->isEnabled = $isEnabled;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatutJuridique()
    {
        return $this->statutJuridique;
    }

    /**
     * @param mixed $statutJuridique
     *
     * @return self
     */
    public function setStatutJuridique($statutJuridique)
    {
        $this->statutJuridique = $statutJuridique;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastAuthentication()
    {
        return $this->lastAuthentication;
    }

    /**
     * @param mixed $lastAuthentication
     *
     * @return self
     */
    public function setLastAuthentication($lastAuthentication)
    {
        $this->lastAuthentication = $lastAuthentication;

        return $this;
    }
}
