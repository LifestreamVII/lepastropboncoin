<?php
    namespace App\Entity;

    use App\Repository\AnnonceRepository;
    use Doctrine\DBAL\Types\Types;
    use Doctrine\ORM\Mapping as ORM;
    use DateTime;

    /**
     * @ORM\Entity(repositoryClass=AnnonceRepository::class)
     */

    class Annonce {
        /**
         * @ORM\Id
         * @ORM\GeneratedValue
         * @ORM\Column(type="integer")
         */
        private $id;

        /**
         * @ORM\Column(type="string", length=255)
         */
        private $titre;

        /**
         * @ORM\Column(type="string", length=255, nullable: true)
         */
        private $description = null;

        /**
         * @ORM\Column(type="int")
         */
        private $prix;

        /**
         * @ORM\Column(type="datetime")
         */
        private $datePublication = null;

        public function __construct()
        {
            $this->datePublication = new \DateTime();
        }

        public function getId(): ?int
        {
            return $this->id;
        }

        public function getTitre(): ?string
        {
            return $this->titre;
        }

        public function setTitre(?string $titre): self
        {
            $this->titre = $titre;

            return $this;
        }

        public function getDescription(): ?string
        {
            return $this->description;
        }

        public function setDescription(?string $description): self
        {
            $this->description = $description;
            
            return $this;
        }

        public function getPrix(): ?int
        {
            return $this->prix;
        }

        public function setPrix(?int $prix): self
        {
            $this->prix = $prix;
            
            return $this;
        }

        public function getDatePublication(): ?\DateTime
        {
            return $this->datePublication;
        }

        public function setDatePublication(?\DateTime $datePublication): self
        {
            $this->datePublication = $datePublication;
            
            return $this;
        }
    }
?>