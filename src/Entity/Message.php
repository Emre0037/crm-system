<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\Index;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MessageRepository")
 * @ORM\Table(indexes={@Index(name="created_at_index", columns={"created_at"})})
 * @ORM\HasLifecycleCallbacks()
 */
class Message
{
    use Timestamp;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text" , nullable=true)
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="messages")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Conversation", inversedBy="messages")
     */
    private $conversation;
/**
 * @ORM\Column(type="blob", length=1073741824, nullable=true)
 */
private $message_image;

/**
 * @ORM\Column(type="blob", length=1073741824, nullable=true)
 */
private $message_file;


    private $mine;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getConversation(): ?Conversation
    {
        return $this->conversation;
    }

    public function setConversation(?Conversation $conversation): self
    {
        $this->conversation = $conversation;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMine()
    {
        return $this->mine;
    }
    // public function __toString(): string
    // {
    //    return  $this->getConversation;
    // }
    /**
     * @param mixed $mine
     */
    public function setMine($mine): void
    {
        $this->mine = $mine;
    }

    public function getMessageImage()
    {
        return $this->message_image;
    }

    public function setMessageImage($message_image): self
    {
        $this->message_image = $message_image;

        return $this;
    }

    public function getMessageFile()
    {
        return $this->message_file;
    }

    public function setMessageFile($message_file): self
    {
        $this->message_file = $message_file;

        return $this;
    }
}