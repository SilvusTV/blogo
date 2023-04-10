<?php
namespace App\Entity;

class Contact {

     /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length ()
     */
    private $subject;

    /**
     * @return string|null
     */
    public function getSubject(): ?string
    {
        return $this->subject;
    }

    /**
     * @param string|null $subject
     * @return Contact
     */
    public function setSubject(?string $subject): Contact
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length(min=10)
     */
    private $message;

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * @param string|null $message
     * @return Contact
     */
    public function setMessage(?string $message): Contact
    {
        $this->message = $message;
        return $this;
    }
    /**
     * @var string|null
     * @Assert\NotBlank()
     * @Assert\Length ()
     */
    private $mailto;

    /**
     * @return string|null
     */
    public function getMailto(): ?string
    {
        return $this->mailto;
    }

    /**
     * @param string|null $mailto
     * @return Contact
     */
    public function setMailto(?string $mailto): Contact
    {
        $this->mailto = $mailto;
        return $this;
    }

}