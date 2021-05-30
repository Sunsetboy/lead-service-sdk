<?php
declare(strict_types=1);

namespace LeadServiceClient\Dto;

class SourceDto
{
    private $id;
    private $type;
    private $name;
    private $description;
    private $noLead;
    private $active;
    private $appId;
    private $secretKey;
    private $userId;
    private $moderation;
    private $priceByPartner;

    public function fillFromArray(array $props): self
    {
        $this->setId((int)$props['id'])
            ->setName($props['name'])
            ->setDescription($props['description'])
            ->setActive((int)$props['active'])
            ->setNoLead((int)$props['noLead'])
            ->setAppId($props['appId'])
            ->setSecretKey($props['secretKey'])
            ->setUserId((int)$props['userId'])
            ->setModeration((int)$props['moderation'])
            ->setPriceByPartner((int)$props['priceByPartner']);

        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return SourceDto
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     * @return SourceDto
     */
    public function setType($type)
    {
        $this->type = $type;
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
     * @return SourceDto
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     * @return SourceDto
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNoLead()
    {
        return $this->noLead;
    }

    /**
     * @param mixed $noLead
     * @return SourceDto
     */
    public function setNoLead($noLead)
    {
        $this->noLead = $noLead;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     * @return SourceDto
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAppId()
    {
        return $this->appId;
    }

    /**
     * @param mixed $appId
     * @return SourceDto
     */
    public function setAppId($appId)
    {
        $this->appId = $appId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSecretKey()
    {
        return $this->secretKey;
    }

    /**
     * @param mixed $secretKey
     * @return SourceDto
     */
    public function setSecretKey($secretKey)
    {
        $this->secretKey = $secretKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     * @return SourceDto
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getModeration()
    {
        return $this->moderation;
    }

    /**
     * @param mixed $moderation
     * @return SourceDto
     */
    public function setModeration($moderation)
    {
        $this->moderation = $moderation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPriceByPartner()
    {
        return $this->priceByPartner;
    }

    /**
     * @param mixed $priceByPartner
     * @return SourceDto
     */
    public function setPriceByPartner($priceByPartner)
    {
        $this->priceByPartner = $priceByPartner;
        return $this;
    }
}
