<?php

        namespace App\Entity;
        
        use Doctrine\DBAL\Types\Types;
        use Doctrine\ORM\Mapping as ORM;
        use Doctrine\ORM\Mapping\Index;
        
        /**
         * @ORM\Entity(repositoryClass="App\Repository\MessageRepository")
         * @ORM\Table(name="Johnmessage" )
         * @ORM\HasLifecycleCallbacks()
         */
        class Johnmessage
        {
            use Timestamp;
        
            /**
             * @ORM\Id()
             * @ORM\GeneratedValue()
             * @ORM\Column(type="integer")
             */
            private $id;
        
            /**
             * @ORM\Column(type="text")
             */
            private $content;
        
            /**
             * @ORM\ManyToOne(targetEntity="User", inversedBy="Johnmessage")
             */
            private $user;
        
            /**
             * @ORM\ManyToOne(targetEntity="Conversation", inversedBy="Johnmessage")
             */
            private $conversation;
        
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
        }
        
        