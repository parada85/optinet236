<?php

namespace mio\mioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use mio\mioBundle\Entity\Operacion;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
* @ORM\Entity
* @ORM\HasLifecycleCallbacks
* @UniqueEntity(fields={"dni"}, message="Este valor ya se ha utilizado.")
* @UniqueEntity(fields={"email"}, message="Este valor ya se ha utilizado.")
*/
class Usuario{
	
	
	/**
	* @ORM\id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="IDENTITY")
	*/
	public $id;
	
   /**
	* @ORM\Column(type="string",length=9,unique=true)
	* @Assert\NotBlank(message="El campo no puede estar vacío.")
    * @Assert\Regex(pattern="/^\d{8}[A-z]$/",message="El dni es inválido.")
	*/
	public $dni;
	
   /**
	* @ORM\Column(type="string")
	* @Assert\NotBlank(message="El campo no puede estar vacío.")
    * @Assert\Regex(pattern="/^([A-z áéíóúÁÉÍÓÚÑñ]+\s?)*$/",message="Este valor no es válido.")
	*/
	
	public $nombre;
	
		
   /**
    * @Assert\NotBlank(message="El campo no puede estar vacío.")
    * @Assert\Regex(pattern="/^([A-z áéíóúÁÉÍÓÚÑñ]+\s?)*$/",message="Este valor no es válido.")
	* @ORM\Column(type="string")
	*/
	
	public $apellido1;
	
		
   /**
    * @Assert\NotBlank(message="El campo no puede estar vacío.")
    * @Assert\Regex(pattern="/^([A-z áéíóúÁÉÍÓÚÑñ]+\s?)*$/",message="Este valor no es válido.")
	* @ORM\Column(type="string")
	*/
	
	public $apellido2;
	
		
   /**
    * @Assert\NotBlank(message="El campo no puede estar vacío.")
	* @ORM\Column(type="string")
	*/
	
	public $direccion;
	
		
   /**
    * @Assert\NotBlank(message="El campo no puede estar vacío.")
    * @Assert\Regex(pattern="/^([A-z áéíóúÁÉÍÓÚÑñ]+\s?)*$/",message="Este valor no es válido.")
	* @ORM\Column(type="string")
	*/
	
	public $localidad;
	
		
   /**
    * @Assert\NotBlank(message="El campo no puede estar vacío.")
    * @Assert\Regex(pattern="/^([A-z áéíóúÁÉÍÓÚÑñ]+\s?)*$/",message="Este valor no es válido.")
	* @ORM\Column(type="string")
	*/
	
	public $provincia;
		
   /**
    * @Assert\Length(max=9,minMessage="El campo debe tener {{ limit }} números.")
    * @Assert\Type(type="numeric", message="El campo debe tener sólo números.")
	* @ORM\Column(type="string", length=9, nullable=true)
	*/
	
	public $telefono;
	
	 /**
    * @Assert\Length(max=9,minMessage="El campo debe tener {{ limit }} números.")
    * @Assert\Type(type="numeric", message="El campo debe tener sólo números.")
	* @ORM\Column(type="string", length=9, nullable=true)
	*/
	
	public $movil;
	
	
	/**
	* @ORM\Column(type="string",nullable=true)
	* @Assert\Email(
    * message = "El email {{ value }} no es un email válido.",
    * checkMX = true
    * )
	*/
	
	public $email;
	
     /**
     * @ORM\OneToMany(targetEntity="Operacion", mappedBy="cliente")
     */
	
	protected $operaciones;
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellido1
     *
     * @param string $apellido1
     */
    public function setApellido1($apellido1)
    {
        $this->apellido1 = $apellido1;
    }

    /**
     * Get apellido1
     *
     * @return string 
     */
    public function getApellido1()
    {
        return $this->apellido1;
    }

    /**
     * Set apellido2
     *
     * @param string $apellido2
     */
    public function setApellido2($apellido2)
    {
        $this->apellido2 = $apellido2;
    }

    /**
     * Get apellido2
     *
     * @return string 
     */
    public function getApellido2()
    {
        return $this->apellido2;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * Get direccion
     *
     * @return string 
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set localidad
     *
     * @param string $localidad
     */
    public function setLocalidad($localidad)
    {
        $this->localidad = $localidad;
    }

    /**
     * Get localidad
     *
     * @return string 
     */
    public function getLocalidad()
    {
        return $this->localidad;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set movil
     *
     * @param string $movil
     */
    public function setMovil($movil)
    {
        $this->movil = $movil;
    }

    /**
     * Get movil
     *
     * @return string 
     */
    public function getMovil()
    {
        return $this->movil;
    }
    
    /**
     * Set dni
     *
     * @param string $dni
     */
    public function setDni($dni)
    {
        $this->dni = $dni;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set email
     *
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }
    public function __construct()
    {
        $this->operaciones = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add operaciones
     *
     * @param mio\mioBundle\Entity\Operacion $operaciones
     */
    public function addOperacion(\mio\mioBundle\Entity\Operacion $operaciones)
    {
        $this->operaciones[] = $operaciones;
    }

    /**
     * Get operaciones
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getOperaciones()
    {
        return $this->operaciones;
    }

    public function __toString()
    {
           return $this->nombre;
    }
}