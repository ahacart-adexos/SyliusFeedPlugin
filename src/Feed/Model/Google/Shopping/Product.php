<?php

declare(strict_types=1);

namespace Setono\SyliusFeedPlugin\Feed\Model\Google\Shopping;

use DateTimeInterface;

final class Product
{
    /** @var string */
    private $id;

    /** @var string */
    private $title;

    /** @var string */
    private $description;

    /** @var string */
    private $link;

    /** @var string */
    private $imageLink;

    /** @var array */
    private $additionalImageLinks = [];

    /** @var Availability */
    private $availability;

    /** @var Price */
    private $price;

    /** @var Price|null */
    private $salePrice;

    /** @var DateTimeInterface|null */
    private $salePriceEffectiveDate;

    /** @var string|null */
    private $brand;

    /** @var string|null */
    private $gtin;

    /** @var string|null */
    private $mpn;

    /** @var bool|null */
    private $identifierExists;

    /** @var Condition|null */
    private $condition;

    /** @var string|null */
    private $itemGroupId;

    /** @var string|null */
    private $googleProductCategory;

    /** @var string|null */
    private $productType;

    /** @var string|null */
    private $shipping;

    public function __construct(
        string $id,
        string $title,
        string $description,
        string $link,
        string $imageLink,
        Availability $availability,
        Price $price
    ) {
        $this->setId($id);
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setLink($link);
        $this->setImageLink($imageLink);
        $this->setAvailability($availability);
        $this->setPrice($price);
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): void
    {
        $this->link = $link;
    }

    public function getImageLink(): string
    {
        return $this->imageLink;
    }

    public function setImageLink(string $imageLink): void
    {
        $this->imageLink = $imageLink;
    }

    public function getAdditionalImageLinks(): array
    {
        return $this->additionalImageLinks;
    }

    public function setAdditionalImageLinks(array $additionalImageLinks): void
    {
        $this->additionalImageLinks = $additionalImageLinks;
    }

    public function addAdditionalImageLink(string $additionalImageLink): void
    {
        $this->additionalImageLinks[] = $additionalImageLink;
    }

    public function hasAdditionalImageLinks(): bool
    {
        return count($this->additionalImageLinks) > 0;
    }

    public function getAvailability(): Availability
    {
        return $this->availability;
    }

    public function setAvailability(Availability $availability): void
    {
        $this->availability = $availability;
    }

    public function getPrice(): Price
    {
        return $this->price;
    }

    public function setPrice(Price $price): void
    {
        $this->price = $price;
    }

    public function getSalePrice(): ?Price
    {
        return $this->salePrice;
    }

    public function setSalePrice(?Price $salePrice): void
    {
        $this->salePrice = $salePrice;
    }

    public function getSalePriceEffectiveDate(): ?DateTimeInterface
    {
        return $this->salePriceEffectiveDate;
    }

    public function setSalePriceEffectiveDate(?DateTimeInterface $salePriceEffectiveDate): void
    {
        $this->salePriceEffectiveDate = $salePriceEffectiveDate;
    }

    public function getBrand(): ?string
    {
        return $this->brand;
    }

    public function setBrand(?string $brand): void
    {
        $this->brand = $brand;
    }

    public function getGtin(): ?string
    {
        return $this->gtin;
    }

    public function setGtin(?string $gtin): void
    {
        $this->gtin = $gtin;
    }

    public function getMpn(): ?string
    {
        return $this->mpn;
    }

    public function setMpn(?string $mpn): void
    {
        $this->mpn = $mpn;
    }

    public function getIdentifierExists(): ?bool
    {
        return $this->identifierExists;
    }

    public function setIdentifierExists(?bool $identifierExists): void
    {
        $this->identifierExists = $identifierExists;
    }

    public function getCondition(): ?Condition
    {
        return $this->condition;
    }

    public function setCondition(?Condition $condition): void
    {
        $this->condition = $condition;
    }

    public function getItemGroupId(): ?string
    {
        return $this->itemGroupId;
    }

    public function setItemGroupId(?string $itemGroupId): void
    {
        $this->itemGroupId = $itemGroupId;
    }

    public function getGoogleProductCategory(): ?string
    {
        return $this->googleProductCategory;
    }

    public function setGoogleProductCategory(?string $googleProductCategory): void
    {
        $this->googleProductCategory = $googleProductCategory;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function setProductType(?string $productType): void
    {
        $this->productType = $productType;
    }

    public function getShipping(): ?string
    {
        return $this->shipping;
    }

    public function setShipping(?string $shipping): void
    {
        $this->shipping = $shipping;
    }
}
