<?php 
namespace App\Entity; 
use Doctrine\ORM\Mapping as ORM; 
/** 
 * Autores
 * 
 * @ORM\Table(name="autores", indexes={@ORM\Index(name="id", columns={"id"})}) 
 * @ORM\Entity */ 

class Autores 
{ /** 
 * @var int 
 * 
 * @ORM\Column(name="id", type="integer", nullable=false) 
 * @ORM\Id * @ORM\GeneratedValue(strategy="IDENTITY") */ 
    private $id; 
    /**
     * @var string 
     * 
     * @ORM\Column(name="title", type="text", length=65535, nullable=false) */
    private $title; 
    /** 
     * @var string
     * 
     * @ORM\Column(name="author", type="text", length=65535, nullable=false) */ 
    private $author; 
    /**
     * @var \DateTime 
     * 
     * @ORM\Column(name="year", type="date", nullable=false) */ 
    private $year;
}