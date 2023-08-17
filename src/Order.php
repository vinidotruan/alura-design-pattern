<?php

namespace Alura\DesignPattern;

class Order
{
    public string $clientName;
    public \DateTimeInterface $createdAt;
    public Budget $budget;

}