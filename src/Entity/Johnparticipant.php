<?php

        namespace App\Entity;
        
        use Doctrine\ORM\Mapping as ORM;
        
        /**
         * Johnparticipant
         *
         * @ORM\Table(name="Johnparticipant", )
         * @ORM\Entity
         */
        class Johnparticipant
        {
            /**
             * @var int
             *
             * @ORM\Column(name="id", type="integer", nullable=false)
             * @ORM\Id
             * @ORM\GeneratedValue(strategy="IDENTITY")
             */
            private $id;
        
        
            /**
             * @ORM\ManyToOne(targetEntity="User", inversedBy="Johnparticipant")
             */
            private $user;
        
            /**
             * @ORM\ManyToOne(targetEntity="Conversation", inversedBy="Johnparticipant")
             */
            private $conversation;
        
            
            public function getId(): ?int
            {
                return $this->id;
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
        
        }
        
        