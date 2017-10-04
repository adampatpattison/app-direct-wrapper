<?php
declare(strict_types=1);

namespace adityasetiono\AppDirect;

class AppDirectResponse
{
    protected $type;
    protected $marketplace;
    protected $creator;
    protected $payload;
    protected $returnUrl;

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): AppDirectResponse
    {
        $this->type = $type;

        return $this;
    }

    public function getMarketplace(): ?Marketplace
    {
        return $this->marketplace;
    }

    public function setMarketplace(Marketplace $marketplace): AppDirectResponse
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    public function getCreator(): ?Creator
    {
        return $this->creator;
    }

    public function setCreator(Creator $creator): AppDirectResponse
    {
        $this->creator = $creator;

        return $this;
    }

    public function getPayload(): ?Payload
    {
        return $this->payload;
    }

    public function setPayload(Payload $payload): AppDirectResponse
    {
        $this->payload = $payload;

        return $this;
    }

    public function getReturnUrl(): ?string
    {
        return $this->returnUrl;
    }

    public function setReturnUrl(string $returnUrl): AppDirectResponse
    {
        $this->returnUrl = $returnUrl;
    }
}