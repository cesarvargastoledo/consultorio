<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Nota
 *
 * @ORM\Table(name="nota")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NotaRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Nota
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="interrogatorio", type="text")
     */
    private $interrogatorio;

    /**
     * @var string
     *
     * @ORM\Column(name="exploracion", type="text")
     */
    private $exploracion;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnostico", type="text")
     */
    private $diagnostico;

    /**
     * @var string
     *
     * @ORM\Column(name="receta", type="text")
     */
    private $receta;

    /**
     * @var string
     *
     * @ORM\Column(name="estudios", type="text")
     */
    private $estudios;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime")
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updatedAt", type="datetime")
     */
    private $updatedAt;

    /**
     * Many Notas have One Paciente.
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Paciente", inversedBy="notas")
     * @ORM\JoinColumn(name="paciente_id", referencedColumnName="id")
     */
    private $pacientes;

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
     * Set interrogatorio
     *
     * @param string $interrogatorio
     * @return Nota
     */
    public function setInterrogatorio($interrogatorio)
    {
        $this->interrogatorio = $interrogatorio;

        return $this;
    }

    /**
     * Get interrogatorio
     *
     * @return string
     */
    public function getInterrogatorio()
    {
        return $this->interrogatorio;
    }

    /**
     * Set exploracion
     *
     * @param string $exploracion
     * @return Nota
     */
    public function setExploracion($exploracion)
    {
        $this->exploracion = $exploracion;

        return $this;
    }

    /**
     * Get exploracion
     *
     * @return string
     */
    public function getExploracion()
    {
        return $this->exploracion;
    }

    /**
     * Set diagnostico
     *
     * @param string $diagnostico
     * @return Nota
     */
    public function setDiagnostico($diagnostico)
    {
        $this->diagnostico = $diagnostico;

        return $this;
    }

    /**
     * Get diagnostico
     *
     * @return string
     */
    public function getDiagnostico()
    {
        return $this->diagnostico;
    }

    /**
     * Set receta
     *
     * @param string $receta
     * @return Nota
     */
    public function setReceta($receta)
    {
        $this->receta = $receta;

        return $this;
    }

    /**
     * Get receta
     *
     * @return string
     */
    public function getReceta()
    {
        return $this->receta;
    }

    /**
     * Set estudios
     *
     * @param string $estudios
     * @return Nota
     */
    public function setEstudios($estudios)
    {
        $this->estudios = $estudios;

        return $this;
    }

    /**
     * Get estudios
     *
     * @return string
     */
    public function getEstudios()
    {
        return $this->estudios;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * @return mixed
     */
    public function getPacientes()
    {
        return $this->pacientes;
    }

    /**
     * @param mixed $pacientes
     */
    public function setPacientes($pacientes)
    {
        $this->pacientes = $pacientes;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAtValue()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    public function __toString() {
        return  $this->getPacientes() ;
    }
}
