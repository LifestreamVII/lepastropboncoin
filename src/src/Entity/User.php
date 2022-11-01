<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['username'], message: 'Il y a déjà un compte existant sous ce login.')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $username = null;

    #[ORM\Column(length: 255)]
    private ?string $firstname = null;

    #[ORM\Column(length: 255)]
    private ?string $lastname = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    #[ORM\Column(type: "json")]
    private $roles = [];

    #[ORM\OneToMany(targetEntity: Annonce::class, mappedBy: 'auteur')]
    private $annonces;

    #[ORM\OneToMany(mappedBy: 'auteur', targetEntity: Vote::class, orphanRemoval: true)]
    private Collection $votes;

    #[ORM\OneToMany(mappedBy: 'cible', targetEntity: Vote::class, orphanRemoval: true)]
    private Collection $ratings;

    public function __construct()
    {
        $this->annonces = new ArrayCollection();
        $this->votes = new ArrayCollection();
        $this->ratings = new ArrayCollection();
    }
    /**
     * @return Collection|Annonce[]
     */

     // What is the ArrayCollection Stuff?
     // The code inside __construct() is important: 
     // The $annonces property must be a collection object that implements Doctrine's Collection interface. 
     // In this case, an ArrayCollection object is used. 
     // This looks and acts almost exactly like an array, but has some added flexibility. 
     // Just imagine that it is an array and you'll be in good shape
    
    public function getRoles(): array
    {
            $roles = $this->roles;
            $roles[] = 'ROLE_USER';
            return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;
        return $this;
    }

    public function eraseCredentials(){
        return false;
    }
    
    public function getUserIdentifier(): string
    {
        return (string) $this->username;
    }

    public function getAnnonces(): Collection
    {
        return $this->annonces;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getFirstName(): ?string
    {
        return $this->firstname;
    }

    public function setFirstName(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastname;
    }

    public function setLastName(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @return Collection<int, Vote>
     */
    public function getVotes(): Collection
    {
        return $this->votes;
    }

    public function addVote(Vote $vote): self
    {
        if (!$this->votes->contains($vote)) {
            $this->votes->add($vote);
            $vote->setAuteur($this);
        }

        return $this;
    }

    public function removeVote(Vote $vote): self
    {
        if ($this->votes->removeElement($vote)) {
            // set the owning side to null (unless already changed)
            if ($vote->getAuteur() === $this) {
                $vote->setAuteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Vote>
     */
    public function getratings(): Collection
    {
        return $this->ratings;
    }

    public function fetchRating(): array{
        $votes = $this->getratings();
        $rating = [0, 0];
        foreach($votes as $vote){
            $rating[0]+=$vote->getUpDown();
        }
        if (count($votes) > 0) {
            $rating[1] = round($rating[0]/count($votes)*100, 1);
            if ($rating[1] < 0) $rating[1] = 0;
            $rating[0] = count($votes);
        } else { $rating[0] = 0; $rating[1] = 0; }
        return $rating;
    }

    public function addrating(Vote $rating): self
    {
        if (!$this->ratings->contains($rating)) {
            $this->ratings->add($rating);
            $rating->setCible($this);
        }

        return $this;
    }

    public function removerating(Vote $rating): self
    {
        if ($this->ratings->removeElement($rating)) {
            // set the owning side to null (unless already changed)
            if ($rating->getCible() === $this) {
                $rating->setCible(null);
            }
        }

        return $this;
    }
}
